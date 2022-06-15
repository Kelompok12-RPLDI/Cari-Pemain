@extends('layouts.app')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">{{ __('Tambah Nilai') }}</h1>

        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-primary alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $message }}
                </div>
                @endif


                <div class="card">

                    <form action="{{ route('nilaipemain.store') }}" method="POST">
                        @csrf

                        <div class="card-body col-lg-8">



                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nama</span>
                                </div>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="{{ __('Nama') }}" required>
                            </div>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Posisi</span>
                                </div>
                                <input type="text" name="posisi" class="form-control @error('posisi') is-invalid @enderror" placeholder="{{ __('Posisi') }}" >
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Kecepatan</span>
                                </div>
                                <input type="number" name="kecepatan" class="form-control @error('kecepatan') is-invalid @enderror" placeholder="{{ __('Kecepatan') }}" >
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Stamina</span>
                                </div>
                                <input type="number" name="stamina" class="form-control @error('stamina') is-invalid @enderror" placeholder="{{ __('Stamina') }}" >
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Power</span>
                                </div>
                                <input type="number" name="power" class="form-control @error('power') is-invalid @enderror" placeholder="{{ __('Power') }}" >
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Feedback</span>
                                </div>
                                <input type="text" name="feedback" class="form-control @error('feedback') is-invalid @enderror" placeholder="{{ __('Feedback') }}" >
                            </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
@endsection