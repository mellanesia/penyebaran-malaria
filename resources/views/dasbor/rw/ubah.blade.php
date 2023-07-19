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
                                    <p class="text-muted">Menampilkan formulir untuk menambah data {{ Str::upper(Request::segment(2)) }}.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">

                            <form action="{{ route('dasbor.rw.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                
                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="">Nama RW <span class="text-danger" title="Bagian ini wajib dilengkapi" role="button">*</span></label>
                                                    <input type="text" id="nama_rw" name="nama_rw" class="form-control" value="{{ old('nama_rw') ?? $data->nama_rw }}" placeholder="contoh: 02">

                                                    @if ($errors->has('nama_rw'))
                                                        <span class="text-danger" role="alert">
                                                            <small>{{ $errors->first('nama_rw') }}</small>
                                                        </span>
                                                    @endif
                                                    <!-- error message end -->
                                                </div>
                                                <!-- form group end -->    

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="">Jumlah Kasus <span class="text-danger" title="Bagian ini wajib dilengkapi" role="button">*</span></label>
                                                    <input type="text" id="jumlah_kasus" name="jumlah_kasus" class="form-control" value="{{ old('jumlah_kasus') ?? $data->jumlah_kasus }}">

                                                    @if ($errors->has('jumlah_kasus'))
                                                        <span class="text-danger" role="alert">
                                                            <small>{{ $errors->first('jumlah_kasus') }}</small>
                                                        </span>
                                                    @endif
                                                    <!-- error message end -->
                                                </div>
                                                <!-- .input item end -->

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="latitude">Latitude <span class="text-danger" title="Bagian ini wajib dilengkapi" role="button">*</span></label>
                                                    <input type="text" id="latitude" name="latitude" class="form-control" value="{{ old('latitude') ?? $data->latitude }}">

                                                    @if ($errors->has('latitude'))
                                                        <span class="text-danger" role="alert">
                                                            <small>{{ $errors->first('latitude') }}</small>
                                                        </span>
                                                    @endif
                                                    <!-- error message end -->
                                                </div>

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="longitude">Longitude <span class="text-danger" title="Bagian ini wajib dilengkapi" role="button">*</span></label>
                                                    <input type="text" id="longitude" name="longitude" class="form-control" value="{{ old('longitude') ?? $data->longitude }}">

                                                    @if ($errors->has('longitude'))
                                                        <span class="text-danger" role="alert">
                                                            <small>{{ $errors->first('longitude') }}</small>
                                                        </span>
                                                    @endif
                                                    <!-- error message end -->
                                                </div>

                                                <!-- form group start -->
                                                <div class="mb-3">
                                                    <label for="id_kelurahan " class="form-label d-block">Kelurahan</label>
                                                    <select class="form-control" name="id_kelurahan" id="exampleFormControlSelect1">
                                                        @foreach($kelurahan as $k)
                                                            <option value="{{$k->id}}"> {{$k->nama_kelurahan}}</option>
                                                        @endforeach
                                                    </select>

                                                    @if ($errors->has('id_kelurahan '))
                                                        <span class="text-danger" role="alert">
                                                            <small>{{ $errors->first('id_kelurahan ') }}</small>
                                                        </span>
                                                    @endif
                                                    <!-- error message end -->
                                                </div>
                                                <!-- input item end -->

                                            </div>
                                        </div>

                                    </div>
                                    <!-- .dard-body end -->

                                    <div class="card-footer">
                                        <a href="{{ url(Request::segment(1) .'/'. Request::segment(2)) }}" 
                                            class="btn btn-outline-dark">
                                            <i class="fa-solid fa-arrow-left"></i> ke Halaman {{ Str::title(Request::segment(2)) }}
                                        </a>
                                        <button class="btn btn-success">
                                            <i class="fa-solid fa-save"></i> Simpan
                                        </button>
                                    </div>
                                    <!-- .dard-footer end -->

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
