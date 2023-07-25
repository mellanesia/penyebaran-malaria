{{-- Gratik --}}
<section class="py-5" id="fitur-dasar">
    <div class="container px-5 my-5">
        <div class="row gx-5 text-center">
            <div class="col-lg-12 mb-5 mb-lg-0"><h2 class="fw-bolder mb-5"> <div class="feature bg-success bg-gradient text-white rounded-3 mb-3">
                <i class="fa-solid fa-chart-bar"></i>
            </div>  Grafik Kasus Penyakit Malaria</h2></div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div >
                    <canvas id="myChart" width="100%"></canvas>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [@foreach ($label as $l )
        {!! "'".$l->nama_kelurahan  ."'"!!},

        @endforeach],
        datasets: [{
          label: 'Data Grafik',
          data: [
            @foreach ($grafik as $g )
                @if ($g->total != null)
                    {{$g->total}},
                @else
                    {{0}},
                @endif
            @endforeach
          ],
          borderWidth: 4
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
