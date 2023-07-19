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

                            <form action="{{ route('dasbor.kelurahan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <div class="card">
                                    <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- .table-responsive start -->
                                                <div class="table-responsive">

                                                    <div class="mb-3">
                                                        <label for="">Nama Kelurahan <span class="text-danger">*</span></label>
                                                        <input type="text" id="nama_kelurahan" name="nama_kelurahan" class="form-control" value="{{ old('nama_kelurahan') ?? '' }}">

                                                        @if ($errors->has('nama_kelurahan'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('nama_kelurahan') }}</small>
                                                            </span>
                                                        @endif
                                                        <!-- error message end -->
                                                    </div>

                                                    <!-- .input item end -->
                                                    <div class="mb-3">
                                                        <label for="">Nama Kepala Kelurahan <span class="text-danger"></span></label>
                                                        <input type="text" id="kepala_kelurahan" name="kepala_kelurahan" class="form-control" value="{{ old('kepala_kelurahan') ?? '' }}">

                                                        @if ($errors->has('kepala_kelurahan'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('kepala_kelurahan') }}</small>
                                                            </span>
                                                        @endif
                                                        <!-- error message end -->
                                                    </div>
                                                    <!-- .input item end -->

                                                    <div class="mb-3">
                                                        <label for="">Jumlah Penduduk</label>
                                                        <input type="text" id="jumlah_penduduk" name="jumlah_penduduk" class="form-control" value="{{ old('jumlah_penduduk') ?? '' }}">

                                                        @if ($errors->has('jumlah_penduduk'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('jumlah_penduduk') }}</small>
                                                            </span>
                                                        @endif
                                                        <!-- error message end -->
                                                    </div>
                                                    <!-- .input item end -->

                                                    <div class="mb-3">
                                                      <label for="google_map_embed_script" class="form-label">Google Map Embed Ccript</label>
                                                      <textarea class="form-control" name="google_map_embed_script" id="google_map_embed_script" rows="2">{{ old('google_map_embed_script') ?? '' }}</textarea>

                                                      @if ($errors->has('google_map_embed_script'))
                                                      <span class="text-danger" role="alert">
                                                          <small>{{ $errors->first('google_map_embed_script') }}</small>
                                                      </span>
                                                      @endif
                                                    </div>

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


                                                    <div class="mb-3">
                                                        <label for="id_distrik" class="form-label d-block">Distrik</label>
                                                        <select class="form-control" name="id_distrik" id="exampleFormControlSelect1">
                                                            @foreach($distrik as $d)
                                                                <option value="{{$d->id}}"> {{$d->nama_distrik}}</option>
                                                            @endforeach
                                                        </select>

                                                        @if ($errors->has('id_distrik'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('id_distrik') }}</small>
                                                            </span>
                                                        @endif
                                                        <!-- error message end -->
                                                    </div>
                                                    <!-- input item end -->


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
