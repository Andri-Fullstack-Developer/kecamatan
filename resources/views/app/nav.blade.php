<div class="cp-header ">

    <div class="cp-coltop ">
        <div class="container">
            <div class="cp-colcontak row align-items-center align-items-md-center ">

                <div class="col-md-6 d-flex ">
                    <div class="icon-email">
                        <div class="icon-contak">
                            <a href="https://api.whatsapp.com/send?phone+628979162846"><i
                                    class="fa-solid fa-phone"></i><span class="ms-2">+628979162846</span></a>
                            <a href="mailto:virtole@gmail.com" class="ms-4"><i
                                    class="fa-sharp fa-regular fa-envelope"></i><span
                                    class="ms-2">virtole@gmail.com</span></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 text-center cp-logo-icon">
                    <div class="icon-social ">
                        <div class="icon-media">
                            <a href="" class="ms-4">
                                <i class="fa-brands fa-twitter"></i>
                            </a>

                            <a href="" class="ms-4">
                                <i class="fa-brands fa-youtube"></i>
                            </a>

                            <a href="https://www.instagram.com/al_virrr/" target="_" class="ms-4">
                                <i class="fa-brands fa-instagram"></i>
                            </a>

                            <a href="{{ url('/singin') }}" target="_" class="ms-4">
                                <i class="fa-solid fa-right-to-bracket"></i>
                            </a>

                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>
    <style>
        .img-clout {
            position: absolute;
            margin-bottom: 5rem;
            margin-left: 6rem;
            z-index: 1;
        }

        .img-clouty {
            position: absolute;
            margin-bottom: 5rem;
            margin-right: 7rem;
            z-index: 1;
        }
    </style>

    <div class="cp-logo-kab">
        <div class="container">
            <div class="row justify-content-end cp-logo-conten">
                <div class="col-md-5 cp-logo">
                    <img class="cp-logo-img" src="{{ asset('img/logo-tuban.png') }}" alt="" width="80">
                    <span id="play" class="typing-text">Kecamatan Tuban</span>
                </div>
                <div class="col-md-7">
                    <div class="logo-list">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                @foreach ($ds as $item)
                                    <div class="cp-sclin swiper-slide">
                                        <img src="{{ asset('img/office.png') }}" width="130" alt="">
                                        <img src="{{ asset('img/clouds.png') }}" width="80" alt=""
                                            class="img-clout">
                                        <img src="{{ asset('img/cloudy.png') }}" class="img-clouty" width="80"
                                            alt="">
                                        <div class="neme-des">
                                            <span>{{ $item->namaDs }}</span>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="cp-sclin swiper-slide">
                                    <img src="{{ asset('img/office.png') }}" width="130" alt="">
                                    <img src="{{ asset('img/clouds.png') }}" class="img-clout" width="80"
                                        alt="">
                                    <img src="{{ asset('img/cloudy.png') }}" class="img-clouty" width="80"
                                        alt="">
                                    <div class="neme-des">
                                        <span>Ds. Soko</span>
                                    </div>
                                </div>
                                <div class="cp-sclin swiper-slide">
                                    <img src="{{ asset('img/office.png') }}" width="130" alt="">
                                    <img src="{{ asset('img/clouds.png') }}" class="img-clout" width="80"
                                        alt="">
                                    <img src="{{ asset('img/cloudy.png') }}" class="img-clouty" width="80"
                                        alt="">
                                    <div class="neme-des">
                                        <span>Ds. Soko</span>
                                    </div>
                                </div>
                                <div class="cp-sclin swiper-slide">
                                    <img src="{{ asset('img/office.png') }}" width="130" alt="">
                                    <img src="{{ asset('img/clouds.png') }}" class="img-clout" width="80"
                                        alt="">
                                    <img src="{{ asset('img/cloudy.png') }}" class="img-clouty" width="80"
                                        alt="">
                                    <div class="neme-des">
                                        <span>Ds. Soko</span>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .navbar-toggler {
            width: 30px;
            height: 10px;
            position: relative;
            transition: .5s ease-in-out;
        }

        .navbar-toggler span {
            margin-bottom: 0.5em;
        }

        .navbar-toggler,
        .navbar-toggler:focus,
        .navbar-toggler:active,
        .navbar-toggler-icon:focus {
            outline: none;
            box-shadow: none;
            border: 0;
        }

        .navbar-toggler span {
            margin: 0;
            padding: 0;
        }

        .toggler-icon {
            display: block;
            position: absolute;
            height: 2px;
            width: 100%;
            background: #f7f8f3;
            border-radius: 1px;
            opacity: 1;
            left: 0;
            transform: rotate(0deg);
            transition: .25s ease-in-out;
        }

        .middle-bar {
            margin-top: 0;

        }

        /* when navigation is clicked */

        .navbar-toggler .top-bar {
            margin-top: 0px;
            transform: rotate(135deg);
        }

        .navbar-toggler .middle-bar {
            opacity: 0;
            filter: alpha(opacity=0);
        }

        .navbar-toggler .bottom-bar {

            transform: rotate(-135deg);
        }

        /* State when the navbar is collapsed */

        .navbar-toggler.collapsed .top-bar {
            margin-top: -20px;
            transform: rotate(0deg);
        }

        .navbar-toggler.collapsed .middle-bar {
            opacity: 1;
            filter: alpha(opacity=100);
        }

        .navbar-toggler.collapsed .bottom-bar {
            margin-top: 20px;
            transform: rotate(0deg);
        }

        /* Color of 3 lines */

        .navbar-toggler.collapsed .toggler-icon {
            background: linear-gradient(263deg, rgba(247, 248, 243) 0%, rgba(209, 238, 252, 1) 100%);
        }

        .navbar-toggler {
            background: none;
        }
    </style>

</div>

<style>
    .logo {
        display: none;

    }

    .logo img {
        display: block;
        margin-top: 1rem;
        width: 23%;
        height: auto;
    }
</style>
<style>
    .nav-item {
        padding-left: .5rem;
        padding-right: .5rem;
    }

    .searchBox {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, 50%);
        background: #2f3640;
        height: 40px;
        border-radius: 40px;
        padding: 10px;
    }

    .searchBox:hover>.searchInput {
        width: 240px;
        padding: 0 6px;
    }

    .searchBox:hover>.searchButton {
        background: white;
        color: #2f3640;
    }

    .searchButton {
        color: white;
        float: right;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background: #2f3640;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: 0.4s;
    }

    .searchInput {
        border: none;
        background: none;
        outline: none;
        float: left;
        padding: 0;
        color: white;
        font-size: 16px;
        transition: 0.4s;
        line-height: 40px;
        width: 0px;
    }

    .form-outline {
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        margin-top: .2rem;
    }

    .form-outline .form-label {
        position: absolute;
        top: 50%;
        left: .5rem;
        pointer-events: none;
        transition: 0.2s all;
        transform: translateY(-50%);
        font-size: 0.875rem;
    }

    .form-outline input:focus~label,
    .form-outline input:not(:placeholder-shown)~label {
        top: 0;
        font-size: 0.75rem;
        color: #6c757d;
    }

    .form-outline label.active {
        top: 0;
        font-size: 0.75rem;
        color: #6c757d;
    }

    .form-outline label {
        margin-bottom: 0.5rem;
        /* Atur margin bawah sesuai kebutuhan */
    }


    .form-outline input {
        width: 150px;
        height: 30px;
        font-size: 14px;
        padding: 0.375rem 0.75rem;
    }

    @media screen and (max-width: 620px) {
        .searchBox:hover>.searchInput {
            width: 150px;
            padding: 0 6px;
        }
    }
</style>

<div class="cp-footer sticky-top">
    <div class="container ">
        <div class="navbar cp-footer navbar-expand-lg">
            <div class="container-fluid">
                <ul class="logo nav-item">
                    <img src="{{ asset('img/logo-tuban.png') }}" alt="Logo">
                </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
                <div class="collapse  navbar-collapse justify-content-center " id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ url('/') }}">Beranda</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profil
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/penjabat') }}">Profil Penjabat</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/organisasi') }}">Struktur
                                        Organisai</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/visiMisi') }}">Visi & Misi</a></li>
                                <li><a class="dropdown-item" href="{{ url('/ranting') }}">Rating</a></li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="{{ url('/berita') }}">Berita</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Program
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/program') }}">Program SKPD</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('/agenda/{id}/{tahun?}') }}">Agenda</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Galeri
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/foto') }}">Galeri Foto</a></li>
                                <li><a class="dropdown-item" href="{{ url('/video') }}">Galeri Vidio</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Media Center
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/pengaduan') }}">Pengaduan
                                        Masyarakat</a></li>
                                <li><a class="dropdown-item" href="#">Twiter</a></li>
                                <li><a class="dropdown-item" href="#">Email: virtole@gmail.com</a></li>
                                <li><a class="dropdown-item" href="{{ url('/redaksi') }}">Redaksi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Pelayanan
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/ektp') }}">Pelayanan EKTP</a></li>
                                {{-- <li><a class="dropdown-item" href="{{ url('/template') }}">form</a></li> --}}
                                <li><a class="dropdown-item" href="{{ url('/kk') }}">Pelayanan KK</a></li>
                                <li><a class="dropdown-item" href="{{ url('/akte') }}">Pelayanan AKTE</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Infomasi Publik
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ url('/tampildata') }}">Data Pengaduan
                                        Masyarakat</a></li>
                                <li><a class="dropdown-item" href="{{ url('/data_penduduk') }}">Data Jumpalah
                                        Penduduk</a></li>
                                <li><a class="dropdown-item" href="{{ url('/data_keuagan') }}">Laporan keuagan</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Pemohonan</a></li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-white" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Layanan Publik
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Standar Pelayanan</a></li>
                                <li><a class="dropdown-item" href="#">Pengolahan Pelayanan</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="https://www.lapor.go.id/" target="_">LAPOR!</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ route('showResults') }}" method="GET" id="form-search">
                                <div class="input-group">
                                    <div class="form-outline">
                                        <label class="form-label" for="form1">Search</label>
                                        <input id="search-focus" name="query" type="search" id="form1"
                                            class="form-control" onchange="submitForm()" />
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>
                    @include('sweetalert::alert')
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function submitForm() {
        document.getElementById('form-search').submit();
    }
</script>
<script>
    // Mendapatkan elemen input dan label
    const input = document.getElementById('search-focus');
    const label = document.querySelector('.form-outline label');

    // Menambahkan event listener untuk event focus pada input
    input.addEventListener('focus', () => {
        label.classList.add('active');
    });

    // Menambahkan event listener untuk event blur pada input
    input.addEventListener('blur', () => {
        if (input.value === '') {
            label.classList.remove('active');
        }
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper(".mySwiperHome", {
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar",
            },
            autoplay: {
                delay: 3000,
            },
        });
    });
</script>

<script>
    // let prevScrollpos = window.pageYOffset;
    // let logoNav = document.querySelector(".cp-logo-nav");

    // window.onscroll = function() {
    //     let currentScrollPos = window.pageYOffset;
    //     if (prevScrollpos < currentScrollPos) {
    //         logoNav.classList.remove("logo-hide");
    //         logoNav.classList.add("logo-show");
    //     } else {
    //         logoNav.classList.remove("logo-show");
    //         logoNav.classList.add("logo-hide");
    //     }
    //     prevScrollpos = currentScrollPos;
    // }
    window.addEventListener('scroll', function() {
        var logo = document.querySelector('.logo');

        if (window.pageYOffset > 0) {
            logo.style.display = 'block';
        } else {
            logo.style.display = 'none';
        }
    });
</script>
