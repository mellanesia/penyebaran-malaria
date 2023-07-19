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
                                    <h3 class="text-capitalize">Tambah {{ Request::segment(2) }}</h3>
                                    <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error soluta illum asperiores at modi eos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">

                            <form action="{{ route('dasbor.distrik.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- .table-responsive start -->
                                                <div class="table-responsive">
                                                    
                                                    <div class="mb-3">
                                                        <label for="">Nama Distrik <span class="text-danger">*</span></label>
                                                        <input type="text" id="nama_distrik" name="nama_distrik" class="form-control" value="{{ old('nama_distrik') ?? '' }}">

                                                        @if ($errors->has('nama_distrik'))
                                                            <span class="text-danger" role="alert">
                                                                <small>{{ $errors->first('nama_distrik') }}</small>
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
