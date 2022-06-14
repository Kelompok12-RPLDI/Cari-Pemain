@extends('layouts.app')

@section('content')
<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800 font-weight-bold">{{ __('Edit Nilai Pemain') }}</h1>

        <div class="row">
            <div class="col-lg-12">
                @if ($message = Session::get('success'))
                <div class="alert alert-primary alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ $message }}
                </div>
                @endif


                <div class="card">

                    <form action="{{ route('nilaipemain.update', $nilaipemain) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body col-lg-8">

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Nama</span>
                                </div>
                                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{$nilaipemain->nama_pemain}}" disabled required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Posisi</span>
                                </div>
                                <input type="text" name="posisi" class="form-control @error('posisi') is-invalid @enderror" value="{{$nilaipemain->posisi_pemain}}"  required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Kecepatan</span>
                                </div>
                                <input type="text" name="kecepatan" class="form-control @error('kecepatan') is-invalid @enderror" value="{{$nilaipemain->kecepatan}}"  required>
                            </div>
                        </div>
                        
                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Stamina</span>
                                </div>
                                <input type="text" name="stamina" class="form-control @error('stamina') is-invalid @enderror" value="{{$nilaipemain->stamina}}"  required>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Power</span>
                                </div>
                                <input type="text" name="power" class="form-control @error('power') is-invalid @enderror" value="{{$nilaipemain->power}}"  required>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Feedback</span>
                                </div>
                                <input type="text" name="feedback" class="form-control @error('feedback') is-invalid @enderror" value="{{$nilaipemain->feedback}}"  required>
                            </div>
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