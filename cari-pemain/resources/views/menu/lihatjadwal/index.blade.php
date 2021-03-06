@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Jadwal Mendatang</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        {{-- <div class="card-header py-3">
            <a href="{{ route('events.create') }}" class="btn btn-primary m-0 font-weight-bold">Add Events</a>
        </div> --}}
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Id Jadwal</th>
                            <th>Tempat</th>
                            <th>Tanggal</th>
                            <th>Kegiatan</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach ($Jadwalpemain as $j)
                        <tr>
                            <td>{{ $j->id }}</td>
                            <td>{{ $j->tempat }}</td>
                            <td>{{ $j->tanggal}}</td>
                            <td>{{ $j->kegiatan}}</td>
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