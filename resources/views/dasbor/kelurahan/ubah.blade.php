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

                            <form action="{{ route('dasbor.kelurahan.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('put')


                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- .table-responsive start -->
                                                <div class="table-responsive">

                                                    <!-- form group start -->
                                                    <div class="mb-3">
                                                        <label for="">Nama Kelurahan <span class="text-danger">*</span></label>
                                                        <input type="text" id="nama_kelurahan" name="nama_kelurahan" class="form-control" value="{{ old('nama_kelurahan') ?? $data->nama_kelurahan ?? '' }}">

                                                        @if ($errors->has('nama_kelurahan'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('nama_kelurahan') }}</small>
                                                            </span>
                                                        @endif
                                                        <!-- error message end -->
                                                    </div>
                                                    <!-- form group end -->

                                                    <!-- form group start -->
                                                    <div class="mb-3">
                                                        <label for="id_distrik" class="form-label d-block">Distrik</label>
                                                        <select class="form-control" name="id_distrik" id="exampleFormControlSelect1">
                                                            @foreach($distrik as $d)
                                                                @if($d->id == $data->distrik->id)
                                                                    <option selected value="{{$d->id}}"> {{$d->nama_distrik}}</option>
                                                                @else
                                                                    <option value="{{$d->id}}"> {{$d->nama_distrik}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                        @if ($errors->has('id_distrik'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('id_distrik') }}</small>
                                                            </span>
                                                        @endif
                                                        <!-- error message end -->
                                                    </div>
                                                    <!-- form group end -->

                                                </div>
                                                <!-- .table-responsive end -->
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
