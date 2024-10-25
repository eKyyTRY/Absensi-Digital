@extends('layouts.app')

@push('style')
<link rel="stylesheet" href="{{ asset('tom-select/tom-select.css') }}">
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
@endpush

@section('buttons')
<div class="btn-toolbar mb-2 mb-md-0">
    <div>
        <a href="{{ route('attendances.index') }}" class="btn btn-sm btn-orange">
            <span data-feather="arrow-left-circle" class="align-text-bottom"></span>
            Kembali
        </a>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-7">
        <livewire:attendance-create-form />
    </div>
</div>
@endsection
