@extends('app/layout')

@section('conten')

    <div class="conten12">
        <div class="bg-swiper">
            <div class="container">
                <div class="swiper mySwiperHome" data-aos="fade-up" data-aos-duration="3000">
                    <div class="swiper-wrapper">
                        @foreach ($home as $imghome)
                            <div class="swiperHome swiper-slide">
                                <img src="{{ url('Image') . '/' . $imghome->image }}"
                                    style="width: 100%; height: 400px;" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('app.diagramBatanag')

    @include('app.diagramLingkaran')

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

    <div class="cp-berita">
        <div class="container container_berita mt-5">
            <h2 class="text-center line" data-aos="fade-down" data-aos-delay="150" data-aos-offset="100"
                data-aos-duration="2000">Berita</h2>
            <div class="row mt-5">
                @foreach ($berita as $be)
                    <div class="col" data-aos="fade-down" data-aos-delay="150" data-aos-offset="100"
                        data-aos-duration="2000">
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
                <div class="container ">
                    <div class="row">
                        <div class="col d-flex justify-content-center" data-aos="fade-down" data-aos-delay="150"
                            data-aos-offset="100" data-aos-duration="2000">
                            <a class="container get-berita  btn mb-4" href="{{ url('/berita') }}">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .dm-batang {
            height: 550px;
            width: 100%;
        }

        .row-info {
            display: flex;
            justify-content: center;
            padding-bottom: 1rem;
        }

        h4.blue {
            background: #3366cc;
            border: none;
            width: 2rem;
            height: 1rem;

        }

        h4.orange {
            background: #ff9900;
            border: none;
            width: 2rem;
            height: 1rem;
        }

        h4.red {
            background: #dc3912;
            border: none;
            width: 2rem;
            height: 1rem;
        }

        small {
            position: absolute;
            margin-top: -1.7rem;
            margin-left: 2.2rem;
        }

        .dm-ling {
            width: 100%;
            height: 500px;
        }

        .diagram-lingkran {
            background: #D1EEFC;
            margin-top: 2rem;
            box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.5);
            border-radius: .3rem;
        }

        .diagram-batang {
            background: #D1EEFC;
            margin-top: 2rem;
            box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.5);
            border-radius: .3rem;

        }

        @media screen and (max-width: 600px) {
            .dm-batang {
                height: 0;
            }

            h4.blue {
                margin-top: 60%;
            }

            h4.blue,
            h4.red {
                width: 1.5rem;
                height: .7rem;
            }

            .dm-ling {
                height: 0;
            }
        }
    </style>

    @include('app.mediaKontak')

    @include('app.footer')
@endsection
