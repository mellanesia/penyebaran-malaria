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

                            <form action="{{ route('dasbor.rw.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- .table-responsive start -->
                                                <div class="table-responsive">

                                                    <!-- form group start -->
                                                    <div class="mb-3">
                                                        <label for="">Nama RW <span class="text-danger">*</span></label>
                                                        <input type="text" id="nama_rw" name="nama_rw" class="form-control" value="{{ old('nama_rw') ?? '' }}">
    
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
                                                        <label for="">Jumlah Kasus</label>
                                                        <input type="text" id="jumlah_kasus" name="jumlah_kasus" class="form-control" value="{{ old('jumlah_kasus') ?? '' }}">

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
                                                        <label for="latitude">Latitude <span class="text-danger">*</span></label>
                                                        <input type="text" id="latitude" name="latitude" class="form-control" value="{{ old('latitude') ?? '' }}">

                                                        @if ($errors->has('latitude'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('latitude') }}</small>
                                                            </span>
                                                        @endif
                                                        <!-- error message end -->
                                                    </div>

                                                    <!-- form group start -->
                                                    <div class="mb-3">
                                                        <label for="longitude">Longitude <span class="text-danger">*</span></label>
                                                        <input type="text" id="longitude" name="longitude" class="form-control" value="{{ old('longitude') ?? '' }}">

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

                                                    <!-- form group start -->
                                                    <div class="mb-3">
                                                        <label for="status" class="form-label d-block">Status</label>
                                                        <select class="form-control" name="status" id="exampleFormControlSelect1">
                                                            <option value="Draft" @if(old('status') == 'Draft') Selected @endif>Draft</option>
                                                            <option value="Publish" @if(old('status') == 'Publish') Selected @endif>Publish</option>
                                                        </select>

                                                        @if ($errors->has('status'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('status') }}</small>
                                                            </span>
                                                        @endif
                                                        <!-- error message end -->
                                                    </div>
                                                    <!-- input item end -->

                                                </div>
                                                <!-- .table-responsive end -->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-dark">
                                            Simpan
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