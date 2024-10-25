@extends('layouts.app')

@push('style')
@powerGridStyles
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

@section('buttons')
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="{{ route('employees.create') }}" class="btn btn-sm btn-orange">
            <span data-feather="plus-circle" class="align-text-bottom me-1"></span>
            Tambah Data Siswa
        </a>
    </div>
</div>
@endsection

@section('content')
@include('partials.alerts')
<livewire:employee-table />
@endsection

@push('script')
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
@powerGridScripts
@endpush
