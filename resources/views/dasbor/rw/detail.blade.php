@extends('dasbor.layout.app')
@section('content')

    <section class="py-5">
        <div class="container">
            <div class="row">
                @include('dasbor.partials.left-sidebar')
                <!-- .col end -->

                <div class="col-md-10">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h3>{{ Str::title(Request::segment(3)) }} {{ Str::upper(Request::segment(2)) }}</h3>
                                    <p class="text-muted">Menampilkan data {{ Str::upper(Request::segment(2)) }} secara detail</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">



                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <!-- item group start -->
                                                <div class="mb-3 border-bottom pb-2">
                                                    <label class="d-block fw-bold">RW</label>
                                                    <div>
                                                        {{ $data->nama_rw ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->
                                        
                                                <!-- item group start -->
                                                <div class="mb-3 border-bottom pb-2">
                                                    <label class="d-block fw-bold">Jumlah Kasus</label>
                                                    <div>
                                                        {{ $data->jumlah_kasus ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->
                                        
                                                <!-- item group start -->
                                                <div class="mb-3 border-bottom pb-2">
                                                    <label class="d-block fw-bold">Latitude</label>
                                                    <div>
                                                        {{ $data->latitude ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->
                                        
                                                <!-- item group start -->
                                                <div class="mb-3 border-bottom pb-2">
                                                    <label class="d-block fw-bold">Longitude</label>
                                                    <div>
                                                        {{ $data->longitude ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->
                                        
                                                <!-- item group start -->
                                                <div class="mb-3 border-bottom pb-2">
                                                    <label class="d-block fw-bold">Kelurahan</label>
                                                    <div>
                                                        {{ $data->kelurahan->nama_kelurahan ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- item group end -->

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ url(Request::segment(1) .'/'. Request::segment(2)) }}" class="btn btn-outline-dark">
                                            <i class="fa-solid fa-arrow-left"></i> ke Halaman {{ Str::upper(Request::segment(2)) }}
                                        </a>
                                        <a href="{{ url(Request::segment(1) .'/'. Request::segment(2).'/ubah', $data->id) }}" 
                                            class="btn btn-dark">
                                            <i class="fa-solid fa-edit"></i> Ubah
                                        </a>
                                    </div>
                                </div>

                            </form>
                            <!-- form end -->

                        </div>
                    </div>
                    <!-- .row end -->

                </div>
                <!-- .col end -->
            </div>
            <!-- .row end -->
        </div>
    </section>

  @stop
