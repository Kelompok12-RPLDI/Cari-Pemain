@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Nilai Pemain</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('nilaipemain.create') }}" class="btn btn-primary m-0 font-weight-bold">Input Nilai</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Id Pemain</th>
                            <th>Nama Pemain</th>
                            <th>Posisi Pemain</th>
                            <th>Kecepatan</th>
                            <th>Stamina</th>
                            <th>Power</th>
                            <th>Feedback</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach ($nilai_pemain as $n)
                        <tr>
                            <td>{{ $n->id_pemain }}</td>
                            <td>{{ $n->nama_pemain }}</td>
                            <td>{{ $n->posisi_pemain}}</td>
                            <td>{{ $n->kecepatan}}</td>
                            <td>{{ $n->stamina}}</td>
                            <td>{{ $n->power}}</td>
                            <td>{{ $n->feedback}} 
                            </td>
                                
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu shadow animated--fade-in" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('nilaipemain.edit', $n->id_pemain) }}">
                                            <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-600"></i>
                                            Edit
                                        </a>

                                        <form action="{{ route('nilaipemain.destroy', $n->id_pemain) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="dropdown-item">
                                                <i class="fas fa-trash fa-sm fa-fw mr-2 text-gray-600"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('custom_scripts')
<!-- Page level custom scripts -->
<script src="{{ asset('js/datatables-demo.js') }}"></script>
@endsection