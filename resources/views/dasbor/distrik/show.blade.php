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
                                    <h3 class="text-capitalize">Detail {{ Request::segment(2) }}</h3>
                                    <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error soluta illum asperiores at modi eos.</p>
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
                                            <!-- .table-responsive start -->
                                            <div class="table-responsive">
                                                
                                                <div class="mb-3 border-bottom pb-2">
                                                    <label class="d-block fw-bold">Nama Distrik</label>
                                                    <div>
                                                        {{ $data->nama_distrik ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- .input item end -->
                                                
                                                <div class="mb-3 border-bottom pb-2">
                                                    <label class="d-block fw-bold">Jumlah Penduduk</label>
                                                    <div>
                                                        {{ $data->jumlah_penduduk ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- .input item end -->
                                                
                                                <div class="mb-3 border-bottom pb-2">
                                                    <label class="d-block fw-bold">Status</label>
                                                    <div>
                                                        {{ $data->status ?? '' }}
                                                    </div>
                                                </div>
                                                <!-- .input item end -->

                                            </div>
                                            <!-- .table-responsive end -->
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <a href="{{ route('dasbor.distrik.edit', $data->id) }}" class="btn btn-dark">
                                        Ubah
                                    </a>
                                    <a href="{{ route('dasbor.distrik') }}" class="btn btn-outline-dark">
                                        Kembali
                                    </a>
                                </div>
                            </div>

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
