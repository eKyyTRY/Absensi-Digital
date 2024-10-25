@extends('layouts.base')

@push('style')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<style>
    .btn-orange {
        background-color: orange; /* Warna latar belakang oranye */
        color: white; /* Warna teks putih */
        border: none; /* Hapus border default */
        transition: background-color 0.3s ease, transform 0.3s ease; /* Animasi transisi */
    }

    .btn-orange:hover {
        background-color: darkorange; /* Warna saat hover */
        color: white; /* Warna teks tetap putih saat hover */
        transform: scale(1.05); /* Efek zoom saat hover */
    }
</style>
@endpush

@section('base')

@include('partials.navbar')

<div class="container-fluid">
    <div class="row">
        @include('partials.sidebar')

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">{{ $title }}</h1>
                @yield('buttons')
            </div>

            <div class="py-4">
                @yield('content')
            </div>
        </main>
    </div>
</div>
@endsection
