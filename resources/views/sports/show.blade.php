
@extends('layouts.app')

@section('title', $sport->name . ' - Sportiva')

@section('content')

<div class="container py-5">

    <div class="card border-0 shadow-sm overflow-hidden">
        <div class="row g-0">

            <div class="col-md-5">
                <img
                    src="{{ asset('assets/images/' . $sport->image) }}"
                    alt="{{ $sport->name }}"
                    class="img-fluid w-100 h-100"
                    style="min-height: 300px; object-fit: cover;"
                >
            </div>

            <div class="col-md-7">
                <div class="card-body p-4 p-lg-5">

                    <span class="badge mb-3"
                          style="background-color: #d9f3e9; color: #168568;">
                        {{ $sport->category }}
                    </span>

                    <h1 class="fw-bold mb-3" style="color: #168568;">
                        {{ $sport->name }}
                    </h1>

                    <hr>

                    <h5 class="fw-bold">Tentang {{ $sport->name }}</h5>
                    <p class="text-secondary">
                        {{ $sport->description }}
                    </p>

                    <h5 class="fw-bold mt-4">Negara Asal</h5>
                    <p class="text-secondary">{{ $sport->origin_country }}</p>

                    <h5 class="fw-bold">Peralatan yang Dibutuhkan</h5>
                    <p class="text-secondary">{{ $sport->equipment }}</p>

                    <h5 class="fw-bold">Peraturan Permainan</h5>
                    <p class="text-secondary">{{ $sport->rules }}</p>

                    <a href="{{ route('sports.index') }}#daftar-olahraga"
                    class="btn btn-olahraga-lain mt-3">
                        Lihat Olahraga Lain
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
