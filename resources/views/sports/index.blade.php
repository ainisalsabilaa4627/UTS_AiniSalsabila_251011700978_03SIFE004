
@extends('layouts.app')

@section('title', 'Sportiva - Jelajahi Dunia Olahraga')

@section('content')

<section class="hero-sportiva">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-7">
                <span class="label-hero">
                    TEMUKAN OLAHRAGA FAVORITMU
                </span>

                <h1 class="judul-hero mt-4">
                    Kenali Olahragamu,<br>
                    <span>Mulai Aksi Hebatmu!</span>
                </h1>

                <p class="deskripsi-hero mt-3">
                    Temukan berbagai jenis olahraga, pelajari peraturannya,
                    kenali peralatan yang dibutuhkan, dan mulai gaya hidup aktifmu.
                </p>

                <div class="d-flex flex-wrap gap-3 mt-4">
                    <a href="#daftar-olahraga" class="btn btn-sportiva">
                        Jelajahi Olahraga
                    </a>

                    <a href="{{ route('tentang-kami') }}" class="btn btn-outline-sportiva">
                        Tentang Sportiva
                    </a>
                </div>

                <div class="d-flex flex-wrap gap-4 mt-5 statistik-sportiva">
                    <div>
                        <h3>10 +</h3>
                        <p>Jenis Olahraga</p>
                    </div>
                    <div>
                        <h3>Beragam</h3>
                        <p>Kategori Olahraga</p>
                    </div>
                    <div>
                        <h3>Lengkap</h3>
                        <p>Informasi Olahraga</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="hero-visual">
                    <img
                        src="{{ asset('assets/images/beranda.jpg') }}"
                        alt="Olahraga sepak bola"
                        class="gambar-hero"
                    >

                    <div class="hero-caption">
                        <span class="caption-icon">&#9917;</span>
                        <div>
                            <h6>Mulai dari sekarang!</h6>
                            <p>Temukan olahraga yang kamu sukai.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- DAFTAR OLAHRAGA -->
<section class="section-olahraga py-5" id="daftar-olahraga">
    <div class="container">

        <div class="text-center mb-4">
            <span class="label-section">JELAJAHI SPORTIVA</span>

            <h2 class="judul-section mt-3">
                Temukan Olahraga Favoritmu
            </h2>

            <p class="text-secondary">
                Kenali jenis olahraga, peralatan, dan aturan permainannya.
            </p>
        </div>

        <!-- PENCARIAN -->
<div class="row justify-content-center mb-5">
    <div class="col-md-8 col-lg-6">
        <form action="{{ route('sports.index') }}#daftar-olahraga" method="GET">
            <div class="search-box">
                <span>&#128269;</span>

                <input
                    type="text"
                    id="cariOlahraga"
                    name="search"
                    class="form-control"
                    placeholder="Cari nama atau kategori olahraga..."
                    aria-label="Cari olahraga"
                    value="{{ request('search') }}"
                >

                <button type="submit" class="btn-search">
                    Search
                </button>
            </div>
        </form>
    </div>
</div>

        <!-- KARTU OLAHRAGA -->
        <div class="row g-4" id="daftar-kartu">

            @foreach ($sports as $sport)
            <div class="col-12 col-sm-6 col-lg-4 item-olahraga"
                 data-search="{{ strtolower($sport->name . ' ' . $sport->category . ' ' . $sport->origin_country) }}">

                <div class="card h-100 border-0 kartu-olahraga">

                    <div class="gambar-kartu">
                        <a href="{{ route('sports.show', $sport->id) }}">
                            <img src="{{ asset('assets/images/' . $sport->image) }}"
                                alt="{{ $sport->name }}"
                                class="card-img-top">
                        </a>
                    </div>

                    <div class="card-body d-flex flex-column p-3">
                        <span class="badge-kategori align-self-start mb-3">
                            {{ $sport->category }}
                        </span>

                        <h5 class="card-title fw-bold">
                            {{ $sport->name }}
                        </h5>

                        <p class="text-secondary small mb-4">
                            Negara asal: {{ $sport->origin_country }}
                        </p>

                        <a href="{{ route('sports.show', $sport->id) }}"
                           class="btn btn-detail mt-auto">
                            Pelajari Selengkapnya
                        </a>
                    </div>

                </div>
                
            </div>
            @endforeach

        </div>

        <div id="tidakDitemukan" class="text-center py-5 d-none">
            <h5>Olahraga tidak ditemukan</h5>
            <p class="text-secondary">
                Coba kata kunci lainnya, ya!
            </p>
        </div>

        <div class="d-flex justify-content-center mt-5">
            {{ $sports->appends(request()->query())->fragment('daftar-olahraga')->links('pagination::bootstrap-5') }}
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const input = document.getElementById('cariOlahraga');
    const form = input.closest('form');
    let timer;

    input.addEventListener('input', function () {
        clearTimeout(timer);

        timer = setTimeout(function () {
            form.requestSubmit();
        }, 500);
    });
});
</script>

@endsection
