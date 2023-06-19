@extends('app.layout')


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
    <style>
        .bg-berita_data {
            padding: 1rem;
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .small-image {
            width: 100%;
            height: auto;
        }

        .informasi-text_data {
            font-size: 14px;
            line-height: 1.5;

        }

        .cover-berita {
            margin-top: 2rem;
        }

        .col-md-8.data-berita {
            margin-bottom: 0;
        }

        .row {
            align-items: flex-start;
        }
        .berita-data_kecil a{
            color: black;
            width: 700;
            transition: color 20ms;
        }
         .judul-text_data:hover{
            color: blue;
        }
        .data-berita a{
            color: black;
        }
    </style>

    <div class="container cover-berita">
        <div class="bg-berita_data">
            <div class="row">
                @foreach ($berita as $be)
                    <div class="col-md-8 ">
                        <div class="data-berita">
                            @if ($be->image)
                                <img class="card-img-top  small-image" src="{{ url('storage/Images') . '/' . $be->image }}"
                                    alt="">
                            @endif
                            <a href="{{ url('/data_berita', $be->id) }}">
                                <p class="judul-text_data mt-3 mb-1">{{ $be->judul }}</p>
                            </a>
                            <p class="jam-text_data mb-1"><i class="fa-regular fa-clock"></i> {{ $be->created_at }} <i
                                    class="fa-solid fa-user"></i> <span>User</span></p>
                            <p class="informasi-text_data">{{ $be->informasi }}</p>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4">
                    <div class="cover-img_data">
                        <img src="{{ asset('img/indo_maju.png') }}" alt="">
                    </div>
                    @foreach ($berike as $be)
                        <div class="berita-data_kecil">
                            @if ($be->image)
                                <img class="card-img-top  small-image" src="{{ url('storage/Images') . '/' . $be->image }}"
                                    alt="">
                            @endif
                            <a href="{{ url('/data_berita', $be->id) }}">
                                <p class="judul-text_data mt-3 mb-1">{{ substr($be->judul, 0, 50) }}...</p>
                            </a>
                            <p class="jam-text_data mb-1"><i class="fa-regular fa-clock"></i> {{ $be->created_at }} <i
                                    class="fa-solid fa-user"></i> <span>User</span></p>
                            <p class="informasi-text_data">{{ substr($be->informasi, 0, 60) }}...</p>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>


    @include('app.footer')
@endsection
