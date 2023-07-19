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
                                    <h3>Kelurahan</h3>
                                    <p class="text-muted">Data Kelurahan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ url('dasbor/kelurahan/create') }}" class="btn btn-sm btn-dark">
                                        <i class="fa-solid fa-plus-square"></i> Tambah
                                    </a>
                                </div>
                                <div class="card-body">

                                    <!-- .table-responsive start -->
                                    <div class="table-responsive">

                                        <table class="table table-borderles">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" >#</th>
                                                    <th class="text-center" >Nama Kelurahan</th>
                                                    <th class="text-center" >Nama Distrik </th>
                                                    <th class="text-center" >Kepada Kelurahan</th>
                                                    <th class="text-center" >Jumlah Penduduk </th>
                                                    <th class="text-center" >Latitude </th>
                                                    <th class="text-center" >Longitude </th>
                                                    <th class="text-center" >Status</th>
                                                    <th class="text-center" >Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $data->nama_kelurahan ?? '' }}</td>
                                                    <td>{{ $data->distrik->nama_distrik ?? '' }}</td>
                                                    <td>{{ $data->kepala_kelurahan ?? '' }}</td>
                                                    <td>{{ $data->jumlah_penduduk }}</td>
                                                    <td>{{ $data->latitude ?? '' }}</td>
                                                    <td>{{ $data->longitude ?? '' }}</td>
                                                    <td>{{ $data->status ?? '' }}</td>
                                                    <td class="d-flex gap-2">
                                                        <a href="{{$data->google_map_embed_script ?? '#'}}"  target="_blank" class="btn btn-sm btn-dark">
                                                          Lihat Embed  <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('dasbor.kelurahan.show', $data->id ) }}" class="btn btn-sm btn-dark">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('dasbor.kelurahan.edit', $data->id ) }}" class="btn btn-sm btn-dark">
                                                            <i class="fa-solid fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('dasbor.kelurahan.destroy', $data->id ) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-dark">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>

                                                @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- .table-responsive end -->

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
