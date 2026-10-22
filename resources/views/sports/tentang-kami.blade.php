 @extends('layouts.app')

@section('content')
 <section class="profil-sportiva">
    <div class="container">
        <div class="profil-heading">
            <span class="label-section">OUR STORY</span>
            <h1>Lebih Dekat dengan <span>Sportiva</span></h1>
            <p>Mengenal semangat kami dalam memperkenalkan dunia olahraga.</p>
        </div>

        <div class="row align-items-center g-5 profil-content">
            <div class="col-lg-6">
                <div class="profil-photo">
                    <img src="{{ asset('assets/images/tentang.jpeg') }}"
                         alt="Kegiatan olahraga basket"
                         class="foto-utama">

                    <div class="foto-kecil">
                        <img src="{{ asset('assets/images/tentangg.jpeg') }}"
                             alt="Kegiatan olahraga badminton">
                    </div>

                    <div class="profil-number">
                        <strong>Sportiva</strong>
                        <span>Explore Your Sport</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="profil-text">
                    <span class="profil-subtitle">CERITA KAMI</span>
                    <h2>Semua Orang Bisa Mengenal Olahraga</h2>

                    <p>
                        Olahraga memiliki banyak jenis, aturan, dan keunikan.
                        Namun, tidak semua orang mengetahui informasi dasar
                        tentang setiap cabang olahraga.
                    </p>

                    <p>
                        Karena itu, Sportiva hadir sebagai website informasi
                        yang membantu pengunjung mengenal berbagai olahraga,
                        mulai dari asal negara, perlengkapan, hingga aturan
                        permainannya.
                    </p>

                    <p>
                        Kami berharap Sportiva bisa menjadi langkah awal bagi
                        siapa saja yang ingin mengenal dan menemukan olahraga
                        yang sesuai dengan minatnya.
                    </p>

                    <a href="{{ url('/') }}#daftar-olahraga" class="profil-link">
                        Lihat Daftar Olahraga
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="tentang-info">
    <div class="container">
        <div class="text-center mb-5">
            <span class="label-section">TENTANG KAMI</span>
            <h2 class="judul-info">Apa Itu Sportiva?</h2>
            <p class="info-pembuka">
                Teman digital untuk mengenal dunia olahraga lebih dekat.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="info-card">
                    <div class="info-icon">🏆</div>
                    <h3>Kenali Berbagai Olahraga</h3>
                    <p>Temukan informasi tentang berbagai cabang olahraga dari yang populer hingga yang mungkin belum kamu kenal.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <div class="info-icon">📖</div>
                    <h3>Informasi yang Mudah Dipahami</h3>
                    <p>Pelajari asal negara, perlengkapan, dan aturan dasar olahraga dengan penjelasan yang sederhana.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="info-card">
                    <div class="info-icon">💚</div>
                    <h3>Dukung Gaya Hidup Aktif</h3>
                    <p>Dapatkan inspirasi untuk mengenal aktivitas olahraga dan mulai bergerak sesuai minatmu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection