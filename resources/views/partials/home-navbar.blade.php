<nav class="navbar navbar-expand-md custom-navbar navbar-light py-3">
    <div class="container">
        <!-- Ganti teks dengan logo -->
        <a class="navbar-brand bg-transparent fw-bold" href="{{ route('home.index') }}">
            <img src="/image/logo_orbit.png" alt="Logo" style="width: 150px; height: auto;"> <!-- Ganti dengan URL logo Anda -->
        </a>
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav align-items-md-center gap-md-4 py-2 py-md-0">
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <a class="nav-link {{ request()->routeIs('home.*') ? 'active' : '' }}" aria-current="page"
                        href="{{ route('home.index') }}">Beranda</a>
                </li>
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <a class="nav-link join-course" href="https://portofolio.ekyaja.my.id" target="_blank">Gabung Kursus</a>
                </li>
                <li class="nav-item px-4 py-1 px-md-0 py-md-0">
                    <form action="{{ route('auth.logout') }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn fw-bold btn-danger w-100">Keluar</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.custom-navbar {
    background-color: #ffffff; /* Warna latar belakang putih */
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1); /* Bayangan untuk efek kedalaman */
}

/* Style umum untuk semua link */
.custom-navbar .nav-link {
    background-color: transparent; /* Latar belakang transparan */
    color: #333333; /* Warna teks hitam */
    padding: 10px 20px; /* Padding untuk link */
    border-radius: 30px; /* Sudut membulat penuh */
    font-weight: 500; /* Berat font menengah */
    transition: all 0.3s ease; /* Transisi untuk hover */
}

.custom-navbar .nav-link:hover,
.custom-navbar .active {
    background-color: transparent; /* Tetap transparan saat hover atau aktif */
    color: #333333; /* Warna teks hitam saat hover atau aktif */
    border: none; /* Hapus border */
    box-shadow: none; /* Hapus bayangan */
}

/* Style khusus untuk "Gabung Kursus" */
.custom-navbar .join-course {
    background-color: transparent; /* Latar belakang transparan */
    color: #333333; /* Warna teks hitam */
}

.custom-navbar .join-course:hover {
    background-color: transparent; /* Tetap transparan saat hover */
    color: #333333; /* Warna teks tetap hitam */
    border: none; /* Hapus border saat hover */
}

/* Style untuk tombol toggle navbar */
.custom-navbar .navbar-toggler {
    border: none; /* Menghilangkan border pada toggler */
}

.custom-navbar .navbar-toggler:hover {
    background-color: rgba(0, 0, 0, 0.1); /* Efek hover pada toggler */
}

</style>
