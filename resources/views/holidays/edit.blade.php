@extends('layouts.app')

@push('style')
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
        <a href="{{ route('holidays.index') }}" class="btn btn-sm btn-orange">
            <span data-feather="arrow-left-circle" class="align-text-bottom"></span>
            Kembali
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7">
        <livewire:holiday-edit-form :holidays="$holidays" />
    </div>
</div>
@endsection
