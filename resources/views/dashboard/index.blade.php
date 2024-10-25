@extends('layouts.app')

@push('style')
<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Animasi transisi */
    }

    .card:hover {
        transform: scale(1.05); /* Efek zoom saat hover */
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Bayangan yang lebih dalam saat hover */
    }

    .card-body {
        background-color: white; /* Warna latar belakang putih */
        color: black; /* Warna teks hitam */
    }
</style>
@endpush

@section('content')
<div>
    <div class="row">
        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="fs-6 fw-light">Data Jabatan</h6>
                    <h4 class="fw-bold">{{ $positionCount }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <div class="card shadow">
                <div class="card-body">
                    <h6 class="fs-6 fw-light">Data Siswa</h6>
                    <h4 class="fw-bold">{{ $userCount }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
