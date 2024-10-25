@extends('layouts.app')

@push('style')
<style>
    .btn-orange {
        background-color: orange; /* Warna latar belakang oranye */
        color: white; /* Warna teks putih */
        border: none; /* Hapus border default */
    }

    .btn-orange:hover {
        background-color: darkorange; /* Warna saat hover */
        color: white; /* Warna teks tetap putih saat hover */
    }
</style>
@powerGridStyles
@endpush

@section('buttons')
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="{{ route('attendances.create') }}" class="btn btn-sm btn-orange">
            <span data-feather="plus-circle" class="align-text-bottom me-1"></span>
            Tambah Data Absensi 
        </a>
    </div>
</div>
@endsection

@section('content')
@include('partials.alerts')
<livewire:attendance-table />
@endsection

@push('script')
<script src="{{ asset('jquery/jquery-3.6.0.min.js') }}"></script>
@powerGridScripts
@endpush
