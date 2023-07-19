<section>
    <div>
            <div id="map" class="p-5" style="height: 800px;"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAP_KEY') }}&callback=initMap" async defer></script>

    <script>
        function initMap() {
            var mapCanvas = document.getElementById('map');

            // Center maps
            var myLatlng = new google.maps.LatLng(-2.575425, 140.687634);


            // Map Options
            var mapOptions = {
                zoom: 13,
                center: myLatlng
            };

            // Create the Map
            map = new google.maps.Map(mapCanvas, mapOptions);

            var infoWindow = new google.maps.InfoWindow;

            //request data from data-maps.php
            // $.getJSON("http://127.0.0.1:8000/json", function(data) {
            $.getJSON({!! json_encode(url('/json')) !!}, function(data) {

                //parsing data json
                $.each(data, function(i, item) {
                    //set point marker
                    var point = new google.maps.LatLng(
                        parseFloat(item.latitude),
                        parseFloat(item.longitude));
                    //create pop up info header
                    var infowincontent = document.createElement('div');
                    var strong = document.createElement('strong');
                    strong.textContent = item.nama_kelurahan;

                    infowincontent.appendChild(document.createElement('br'));

                    // //create pop up info content
                    var text = document.createElement('text');
                    var string = `<div class="p-2">
                                    <h5 class=""> <a href="#" class="text-decoration-none" target="_blank"> ${item.nama_rw} </a>   <h5>
                                        <p> Jumlah Kasus ${item.jumlah_kasus} <p/>
                                            <a href="dasbor/kelurahan/${item.id}/show " class="btn btn-primary" target="_blank"> Detail </a>
                                </div> `;


                    text.textContent = string;


                    infowincontent.textContent  = string;
                    var url = {!! json_encode(url('/assets/img/red-flag.png')) !!}
                    //marker option
                    var marker = new google.maps.Marker({
                        map: map,
                        position: point,
                        icon: url,
                        disableDefaultUI: false,
                    });

                    //popup info
                    marker.addListener('click', function() {
                        infoWindow.setContent(string);
                        infoWindow.open(map, marker);
                    });

                });

            });
        }
    </script>
    </div>
</section>