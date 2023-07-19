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
                                    <h3>{{ Str::upper(Request::segment(2)) }}</h3>
                                    <p class="text-muted">Menampilkan semua data {{ Str::upper(Request::segment(2)) }} yang telah ditambahkan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ route('dasbor.rw.tambah') }}" class="btn btn-sm btn-success">
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
                                                    <th>RW <small>| Kelurahan</small> </th>
                                                    <th>Jumlah Kasus </th>
                                                    <th>Latitude </th>
                                                    <th>Longitude </th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                <tr>
                                                    <td class="text-center">{{ ++$i }}</td>
                                                    <td>
                                                        <b>RW {{ $data->nama_rw ?? '' }} </b>
                                                        <small class="d-block text-muted"> {{ $data->kelurahan->nama_kelurahan ?? '' }} </small>
                                                    </td>
                                                    <td><b>{{ $data->jumlah_kasus ?? ''}}</b> Kasus</td>
                                                    <td>{{ $data->latitude ?? '' }}</td>
                                                    <td>{{ $data->longitude ?? '' }}</td>
                                                    <td>
                                                        <div class="d-flex gap-1">
                                                            <a href="{{ route('dasbor.rw.detail', $data->id ) }}" class="btn btn-sm btn-success">
                                                                <i class="fa-solid fa-eye"></i>
                                                            </a>
                                                            <a href="{{ route('dasbor.rw.ubah', $data->id ) }}" class="btn btn-sm btn-outline-success">
                                                                <i class="fa-solid fa-edit"></i>
                                                            </a>
                                                            <form action="{{ route('dasbor.rw', $data->id ) }}" method="POST">
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
