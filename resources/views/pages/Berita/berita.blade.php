@extends('app/layout')

<style>
    .cp-berita-nav {
        background: #A8D1E7;
        padding: .4rem;
    }

    .card-text {
        color: #000;
    }

    .card-img-top {
        transition: transform 0.3s;
        max-height: 200px;
        /* ukuran maksimal gambar */
    }

    .card {
        overflow: hidden !important;
    }


    .card-img-top:hover {
        transform: scale(1.05);
        max-height: 220px;
    }

    .card-img-top:hover .card {
        width: 400px !important;
    }

    .container_berita {
        padding: .2rem;
        background: #D1EEFC;
        border-radius: 1rem;
        box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.5);
        border-radius: .3rem;
    }

    .card-body a {
        background: #002060;
        color: #f7f8f3;
        text-decoration: none;
        font-weight: 700;
        font-size: 0.7rem;
        transition: transform 0.5s ease-in-out;
        transition-property: all;
        transition-duration: 0.3s;
        transition-delay: 0.2s;
    }

    .card-body a:hover {
        transform: scale(1.1);
    }

    .jam_tgl {
        color: rgb(0, 0, 0);
        margin-top: 0.3rem;
        margin-bottom: 0.1rem;
        font-size: 0.6rem;
    }

    .container_berita .btn-infor {
        font-weight: 700;
    }

    .container_berita .btn-infor:hover {
        background: transparent;
        border: 1px solid red;
        color: black;
        color: #df4f33;
    }

    .container.get-berita {
        background: #002060;
        color: #D1EEFC;
        transition: all 2s;
    }

    p.card-title {
        color: #002060;
        font-size: .8rem;
        font-weight: 700;
    }
</style>

@section('conten')
  

    <style>
        .bg-halaman {
            width: 100%;
            background-image: url('{{ asset('img/bg-nanativ.png') }}');
            background-repeat: no-repeat;
            background-size: cover;
            padding: 4rem;
            color: #fff;
        }

        .bg-agenda {
            justify-content: center;
            text-align: center;

        }

        ul.agenda-li {
            list-style: none;
        }

        ul.agenda-li li {
            display: inline;
        }

        ul.agenda-li li:not(:last-child)::after {
            content: " > ";
        }
    </style>

    <div class="bg-halaman">
        <div class="bg-agenda">
            <h1 class="h2">Berita</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Berita</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="cp-berita">
        <div class="container container_berita mt-5">
            <div class="row mt-5">
                @foreach ($berita as $be)
                    <div class="col">
                        <div class="card mb-5 mx-auto" style="width: 16rem;">
                            @if ($be->image)
                                <img class="card-img-top" src="{{ url('storage/Images') . '/' . $be->image }}"
                                    alt="">
                            @endif
                            <div class="card-body">
                                <p class="card-title">{{ substr($be->judul, 0, 50) }}...</p>
                                <p class="card-text">{{ substr($be->informasi, 0, 60) }}...</p>
                                <a class="btn btn-bg text-center" href="{{ url('/data_berita', $be->id) }}">kunjugi</a>
                                <p class="jam_tgl"><i class="fa-regular fa-clock"></i> {{ $be->created_at }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('app.footer')
@endsection
