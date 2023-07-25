@extends('visitor.layout.app')
@section('content')

<section class="py-5" id="fitur-dasar">
    <div class="container px-5 my-5">
        <div class="row gx-5">
            <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">Menampilkan data penyebaran endemik per kategori</h2></div>
            <div class="col-lg-8">
                <div class="row gx-5 row-cols-1 row-cols-md-2">
                    <div class="col mb-5 h-100">
                        <div class="feature bg-success bg-gradient text-white rounded-3 mb-3">
                            <i class="fa-solid fa-table"></i>
                        </div>
                        <h2 class="h5">Data per Kelurahan</h2>
                        <p class="mb-0">Menampilkan data kelurahan yang ada dibawah distrik.</p>
                    </div>
                    <div class="col mb-5 h-100">
                        <div class="feature bg-success bg-gradient text-white rounded-3 mb-3">
                            <i class="fa-solid fa-table"></i>
                        </div>
                        <h2 class="h5">Data per RW</h2>
                        <p class="mb-0">Menampilkan data RW yang ada dibawah setiap kelurahan.</p>
                    </div>
                    <div class="col mb-5 mb-md-0 h-100">
                        <div class="feature bg-success bg-gradient text-white rounded-3 mb-3">
                            <i class="fa-solid fa-map-marker"></i>
                        </div>
                        <h2 class="h5">Titik Kordinat</h2>
                        <p class="mb-0">Menampilkan titik kordinat penyebaran endemik malaria di setiap berdasarkan RW.</p>
                    </div>
                    <div class="col h-100">
                        <div class="feature bg-success bg-gradient text-white rounded-3 mb-3">
                            <i class="fa-solid fa-chart-bar"></i>
                        </div>
                        <h2 class="h5">Data Melalui Grafik</h2>
                        <p class="mb-0">Akan dikembangkan kemudian penyanyian data berdasarkan grafik.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="grafik" style="background-color: rgb(230, 255, 247)">
    @include('visitor.partials.grafik')
</div>

<div id="kordinat">
    @include('dasbor.partials.google-map')
</div>

@stop
