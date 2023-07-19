@extends('dasbor.layout.app')
@section('content')

    <section class="py-5">
        <div class="container-fluid">
            <div class="row">
                @include('dasbor.partials.left-sidebar')
                <!-- .col end -->

                <div class="col-md-10">
                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="text-capitalize">Detail RW </h3>
                                    {{-- <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error soluta illum asperiores at modi eos.</p> --}}
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

                                                    <div class="mb-3">
                                                        <label for="">Nama RW <span class="text-danger"></span></label>
                                                        <input type="text" id="nama_rw"  readonly  value="{{$data->nama_rw}}"  class="form-control bg-light" value="{{ old('nama_kelurahan') ?? '' }}">

                                                        <!-- error message end -->
                                                    </div>

                                                    <!-- .input item end -->
                                                    <div class="mb-3">
                                                        <label for="">Nama Kepala RW <span class="text-danger"></span></label>
                                                        <input type="text" id="kepala_rw" readonly  class="form-control bg-light" value="{{$data->kepala_rw}}">

                                                        <!-- error message end -->
                                                    </div>
                                                    <!-- .input item end -->

                                                    <div class="mb-3">
                                                        <label for="">Jumlah Penduduk</label>
                                                        <input type="text" id="jumlah_penduduk" name="" readonly  class="form-control bg-light" value="{{$data->jumlah_penduduk}}">

                                                        <!-- error message end -->
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">Jumlah Kasus</label>
                                                        <input type="text" id="jumlah_kasus" name="" readonly  class="form-control bg-light" value="{{$data->jumlah_kasus}}">

                                                        <!-- error message end -->
                                                    </div>
                                                    <!-- .input item end -->

                                                    <div class="mb-3">
                                                      <label for="google_map_embed_script" class="form-label">Google Map Embed Ccript</label>
                                                      <textarea class="form-control bg-light" readonly name="google_map_embed_script" id="google_map_embed_script" rows="2">{{$data->google_map_embed_script}}</textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="latitude">Latitude <span class="text-danger"></span></label>
                                                        <input type="text" id="latitude" name="" class="form-control bg-light" readonly value="{{ $data->latitude }}">


                                                        <!-- error message end -->
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="longitude">Longitude <span class="text-danger"></span></label>
                                                        <input type="text" id="longitude" name="longitude" class="form-control bg-light" readonly value="{{ $data->longitude }}">

                                                        <!-- error message end -->
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="id_kelurahan">Kelurahan <span class="text-danger"></span></label>
                                                        <input type="text" id="id_kelurahan" name="id_kelurahan" class="form-control bg-light" readonly value="{{ $data->kelurahan->nama_kelurahan }}">
                                                    <!-- error message end -->
                                                </div>


                                                    <!-- input item end -->


                                                    <div class="mb-3">
                                                        <label for="status">Status <span class="text-danger"></span></label>
                                                        <input type="text" id="status" name="status" class="form-control bg-light" readonly value="{{ $data->status }}">
                                                    <!-- error message end -->
                                                    </div>


                                                </div>
                                                <!-- .table-responsive end -->
                                            </div>
                                        </div>

                                    </div>
                                    <div class="card-footer">
                                        <a href="{{$data->google_map_embed_script ?? '#'}}"  target="_blank" class="btn btn-sm btn-dark">
                                            Lihat Embed  <i class="fa-solid fa-eye"></i>
                                          </a>
                                          <a href="{{ route('dasbor.rw.edit', $data->id ) }}" class="btn btn-sm btn-dark">
                                              <i class="fa-solid fa-edit"></i>
                                          </a>
                                          <a href="{{ route('dasbor.rw.index') }}" class="btn btn-sm btn-dark">
                                          Kembali
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
