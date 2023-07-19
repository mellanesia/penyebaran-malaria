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
                                    <h3>{{ Str::title(Request::segment(2)) }}</h3>
                                    <p class="text-muted">Menampilkan semua data {{ Request::segment(2) }} yang telah ditambahkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ url(Request::segment(1).'/'.Request::segment(2).'/tambah') }}" class="btn btn-sm btn-success">
                                        <i class="fa-solid fa-plus-square"></i> Tambah
                                    </a>
                                </div>
                                <!-- .card-header end -->
                                
                                <div class="card-body">

                                    <!-- .table-responsive start -->
                                    <div class="table-responsive">

                                        <table class="table table-borderles table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">#</th>
                                                    <th>Nama Distrik</th>
                                                    <th>Jumlah Penduduk</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                <tr>
                                                    <td class="text-center">{{ ++$i }}</td>
                                                    <td>{{ $data->nama_distrik ?? '' }}</td>
                                                    <td>{{ $data->jumlah_penduduk ?? '' }}</td>
                                                    <td>
                                                        <div class="d-flex gap-1">
                                                            <a href="{{ route('dasbor.distrik.detail', $data->id ) }}" class="btn btn-sm btn-success">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('dasbor.distrik.ubah', $data->id ) }}" class="btn btn-sm btn-outline-success">
                                                                <i class="fa-solid fa-edit"></i>
                                                            </a>
                                                            <form action="{{ route('dasbor.distrik', $data->id ) }}" method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-sm btn-outline-dark show_confirm">
                                                                    <i class="fa-solid fa-trash"></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>

                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- .table-responsive end -->
                                </div>
                                <!-- .card-body end -->

                                @if($datas->hasPages())
                                
                                <div class="card-footer">
                                    {{ $datas->links() }}
                                </div>
                                <!-- .card-footer end -->

                                @endif

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
@include('dasbor.partials.footer-script-sweetalert')