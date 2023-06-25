<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Daharan</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('dasboard/img/admin.png') }}" alt=""
                    style="width: 40px; height: 40px;">
                <div
                    class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                </div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0"></h6>
                <span>{{$username}}</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/dashboard" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>

            <a href="/dashboard/Home/nameDs" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Desa</a>

            {{-- Profil Start --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Profil</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/dashboard/Profil/penjabat" class="dropdown-item">Profil Penjabat</a>
                    <a href="/dashboard/Profil/organisasi" class="dropdown-item">Struktur Organisai</a>
                    <a href="/dashboard/Profil/tugas" class="dropdown-item">Tugas dan fungsi</a>
                </div>
            </div>
            {{-- Profil End --}}

            {{-- Berita start --}}
            <a href="/dashboard/Berita/berita" class="nav-item nav-link "><i class="fa fa-th me-2"></i>Berita</a>
            {{-- Berita End --}}

            {{-- Program Start --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Program</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/dashboard/Program/program" class="dropdown-item">Program SKPD</a>
                    <a href="/dashboard/Program/agenda" class="dropdown-item">Agenda</a>
                </div>
            </div>
            {{-- Program End --}}
            {{-- Media Start --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Media</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/dashboard/Media/datapengaduan" class="dropdown-item">Data Pengaduan</a>
                    <a href="/dashboard/Program/agenda" class="dropdown-item">Redaksi</a>
                </div>
            </div>
            {{-- Media End --}} 

            {{-- Pelayanan Start --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Pelayanan</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/dashboard/Pelayanan/data_pendaftran_ektp" class="dropdown-item">Data Pendaftran EKTP</a>
                    <a href="typography.html" class="dropdown-item">Persyaratan</a>
                    <a href="typography.html" class="dropdown-item">Penghargaan</a>
                    <a href="typography.html" class="dropdown-item">Sobat Ducapil</a>
                </div>
            </div>
            {{-- Pelayanan End --}}

            {{-- Informasi Start --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Infomasi Publik</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">sds</a>
                    <a href="typography.html" class="dropdown-item">Laporan Kinerja</a>
                    <a href="typography.html" class="dropdown-item">Laporan Keuangan</a>
                    <a href="typography.html" class="dropdown-item">Pemohonan</a>
                </div>
            </div>
            {{-- Informasi End --}}

            {{-- Layanan Start --}}
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Layanan Publik</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Standar Pelayanan</a>
                    <a href="typography.html" class="dropdown-item">Pengolahan Pelayanan</a>
                    <a href="typography.html" class="dropdown-item">Visi & Misi</a>
                </div>
            </div> --}}
            {{-- Layanan End --}}

            {{-- Galery Start --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="fa fa-laptop me-2"></i>Galeri</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/dashboard/Galery/foto" class="dropdown-item">Galeri Foto</a>
                    <a href="/dashboard/Galery/video" class="dropdown-item">Galeri Video</a>
                </div>
            </div>
            {{-- Galery End --}}

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                        class="far fa-file-alt me-2"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="signin.html" class="dropdown-item">Sign In</a>
                    <a href="/dashboard/Setting/singup" class="dropdown-item">Sign Up</a>
                    <a href="404.html" class="dropdown-item">404 Error</a>
                    <a href="blank.html" class="dropdown-item">Blank Page</a>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->
