@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Jadwal Pemain</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('jadwalpemain.create') }}" class="btn btn-primary m-0 font-weight-bold">Input Jadwal</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Id Jadwal</th>
                            <th>Tempat</th>
                            <th>Tanggal</th>
                            <th>Kegiatann</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach ($jadwal_pemain as $j)
                        <tr>
                            <td>{{ $j->id_jadwal }}</td>
                            <td>{{ $j->tempat }}</td>
                            <td>{{ $j->tanggal}}</td>
                            <td>{{ $j->kegiatan}}</td>

                            
                                
                            <td>
                                <div class="dropdown no-arrow">
                                    <a class="dropdown-toggle" href="#" id="dropdownMenuButton" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu shadow animated--fade-in" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ route('jadwalpemain.edit', $j->id) }}">
                                            <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-600"></i>
                                            Edit
                                        </a>

                                        <form action="{{ route('jadwalpemain.destroy', $j->id) }}" method="post">
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