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
                                    <h3>Distrik</h3>
                                    <p class="text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error soluta illum asperiores at modi eos.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .row end -->

                    <div class="row mb-3">
                        <div class="col">
                            <div class="card">
                                <div class="card-header">
                                    <a href="{{ url('dasbor/distrik/create') }}" class="btn btn-sm btn-dark">
                                        <i class="fa-solid fa-plus-square"></i> Tambah
                                    </a>
                                </div>
                                <div class="card-body">
                                    
                                    <!-- .table-responsive start -->
                                    <div class="table-responsive">
                                        
                                        <table class="table table-borderles">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Nama Distrik</th>
                                                    <th>Status</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($datas as $data)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $data->nama_distrik ?? '' }}</td>
                                                    <td>{{ $data->jumlah_penduduk ?? '' }}</td>
                                                    <td>{{ $data->status ?? '' }}</td>
                                                    <td class="d-flex gap-2">
                                                        <a href="{{ route('dasbor.distrik.show', $data->id ) }}" class="btn btn-sm btn-dark">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </a>
                                                        <a href="{{ route('dasbor.distrik.edit', $data->id ) }}" class="btn btn-sm btn-dark">
                                                            <i class="fa-solid fa-edit"></i>
                                                        </a>
                                                        <form action="{{ route('dasbor.distrik.destroy', $data->id ) }}" method="POST">
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
