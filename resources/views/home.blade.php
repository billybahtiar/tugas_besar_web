@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Dashboard') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card border-0 shadow-lg rounded" style="background-color: #f9f9f9;">
                        <div class="card-body">
                            <h5 class="card-title text-primary">{{ __('Halo, Selamat Datang!') }}</h5>
                            <p class="card-text" style="color: #333;">
                                Selamat datang di halaman dashboard. Ini adalah tempat untuk mengelola semua informasi Anda.
                            </p>
                            <img src="{{ asset('images/hero.jpg') }}" alt="Image" class="img-fluid rounded mb-4" style="border-radius: 10px;">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
