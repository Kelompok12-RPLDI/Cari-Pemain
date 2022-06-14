@extends('layouts.app')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">{{ __('Edit Jadwal Pemain') }}</h1>

        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-primary alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $message }}
                </div>
                @endif


                <div class="card">

                    <form action="{{ route('jadwalpemain.update', $jadwalpemain) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body col-lg-8">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Tempat</span>
                                </div>
                                <input type="text" name="nama" class="form-control @error('tempat') is-invalid @enderror" value="{{$jadwalpemain->tempat}}" disabled required>
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Tanggal</span>
                                </div>
                                <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{$jadwalpemain->tanggal}}"  required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Kegiatan</span>
                                </div>
                                <input type="text" name="kegiatan" class="form-control @error('kegiatan') is-invalid @enderror" value="{{$jadwalpemain->kegiatan}}"  required>
                            </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection