@extends('layouts.app')

@section('custom_styles')
<link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 font-weight-bold">Daftar Pemain</h1>

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
                            <th>Id Pemain</th>
                            <th>Nama Pemain</th>
                            <th>Posisi Pemain</th>
                            <th>Kecepatan</th>
                            <th>Stamina</th>
                            <th>Power</th>
                            <th>Feedback</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach ($Nilaipemain as $n)
                        <tr>
                            
                            <td>{{ $n->id_pemain }}</td>
                            <td>{{ $n->nama_pemain }}</td>
                            <td>{{ $n->posisi_pemain}}</td>
                            <td>{{ $n->kecepatan}}</td>
                            <td>{{ $n->stamina}}</td>
                            <td>{{ $n->power}}</td>
                            <td>{{ $n->feedback}} 
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