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
                                    <h3>{{ Str::title(Request::segment(3)) }} {{ Str::title(Request::segment(2)) }}</h3>
                                    <p class="text-muted">Menampilkan formulir untuk menambah data {{ Request::segment(2) }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">

                            <form action="{{ route('dasbor.distrik.update', $data->id ) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="">Nama Distrik <span class="text-danger">*</span></label>
                                                    <input type="text" id="nama_distrik" name="nama_distrik" class="form-control" value="{{ old('nama_distrik') ?? $data->nama_distrik }}">

                                                    @if ($errors->has('nama_distrik'))
                                                        <span class="text-danger" role="alert">
                                                            <small>{{ $errors->first('nama_distrik') }}</small>
                                                        </span>
                                                    @endif
                                                    <!-- error message end -->
                                                </div>
                                                <!-- form group end -->
                                                
                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="">Jumlah Penduduk</label>
                                                    <input type="text" id="jumlah_penduduk" name="jumlah_penduduk" class="form-control" value="{{ old('jumlah_penduduk') ?? $data->jumlah_penduduk }}">
                                                </div>
                                                <!-- form group end -->

                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <a href="{{ url(Request::segment(1) .'/'. Request::segment(2)) }}" 
                                            class="btn btn-outline-dark">
                                            <i class="fa-solid fa-arrow-left"></i> ke Halaman {{ Str::title(Request::segment(2)) }}
                                        </a>
                                        <button class="btn btn-success">
                                            <i class="fa-solid fa-save"></i> Simpan
                                        </button>
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
