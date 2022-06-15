@extends('layouts.app')

@section('custom_styles')
<style>
    .board-item {
        transition: all 0.15s ease-in;
        
    }
    .board-item:hover {
        transform: scale(1.05, 1.05);
        transition: all 0.15s ease-out;
        cursor: pointer;
    }
    .link {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        z-index: 1;
      }
</style>
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Dashboard Cari-Pemain</h1>
    </div>

    <!-- Content Row -->
    <div class="row">


        <div class="board-item col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success border-bottom-success shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{ route('users.index') }}">
                        <span class="link"></span>
                    </a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-normal font-weight-bold text-success text-uppercase mb-1">Total Pelatih</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_users_admin }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-success"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="board-item col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary border-bottom-primary shadow h-100 py-2">
                <div class="card-body">
                    <a href="{{ route('users.index') }}">
                        <span class="link"></span>
                    </a>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-normal font-weight-bold text-primary text-uppercase mb-1">Total Pemain</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $total_users_pemain }}</div>
                        </div>
                        <div class="col-auto">  
                            <i class="fas fa-user-shield fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Pemain</h6>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                <div class="table-responsive">
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
                                </tr>
                            </thead>
                            <tbody class="text-dark">
                                @foreach ($nilai_pemain as $n)
                                <tr>
                                    
                                    <td>{{ $n->id_pemain }}</td>
                                    <td>{{ $n->nama_pemain }}</td>
                                    <td>{{ $n->posisi_pemain}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pemain terbaik</h6>
                </div>
                <div class="table-responsive">
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
                                </tr>
                            </thead>
                            <tbody class="text-dark">
                                @foreach ($pemainterbaik as $n)
                                <tr>
                                    <td>{{ $n->id }}</td>
                                    <td>{{ $n->nama_pemain }}</td>
                                    <td>{{ $n->posisi_pemain}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            

            </div>
        </div>

        
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection