@extends('app/layout')

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
            <h1 class="h2">Galery Foto</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Galery Foto</a>
                </li>
            </ul>
        </div>
    </div>
    {{-- <style>
        .covergaleri {
                margin-top: 2rem;
              
                background: rgb(255, 255, 255);
                background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
                box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            }

            .ligaleri {
                overflow: hidden;
                /* object-fit: fill; */
                border: 1px solid #002060;
                /* float: left; */
                margin-right: 1rem;
                margin-top: .8rem;
            }

            .galeri li,
            .galeri li span {
                width: 200px;
                height: 200px;
            }

            .galeri li span {
                display: block;
                background: rgb(0, 32, 96, .8);
                position: absolute;
                margin-top: 10rem;
                top: 0;
                height: 50px;
                text-align: center;
                color: #ffffff;
                opacity: 0;
                transform: scale(0) rotate(0);
                transition: .3s;
            }

            .galeri li a:hover span {
                opacity: 1;
                transform: rotate(360deg);
            }

            .gambarmini {
                width: 200px;
                height: 200px;
                object-fit: scale-down;
                /* object-fit: none; */
            }

            .clear {
                clear: both;
            }

            .overlay {
                width: 0;
                height: 0;
                overflow: hidden;
                position: fixed;
                top: 0;
                left: 0;
                background-color: rgb(0, 0, 0, 0);
                z-index: 9999;
                transition: .8s;
                text-align: center;
                padding: 100px 0;
            }

            .overlay:target {
                width: auto;
                height: auto;
                bottom: 0;
                right: 0;
                background-color: rgb(0, 0, 0, .7);
            }

            .overlay img {
                max-height: 100%;
                box-shadow: 2px 2px 7px rgba(0, 0, 0, .5);
            }

            .overlay:target img {
                animation: zoom .5s;
            }

            .overlay .close {
                position: absolute;
                top: 50px;
                left: 48.5%;
                font-size: 3rem;
                color: rgb(255, 255, 255);
                text-decoration: none;
                line-height: 14px;
                padding: 5px;
            }

            .overlay:target .close {
                animation: slideClose .5s .5s forwards;
            }

            @keyframes zoom {
                0% {
                    transform: scale(0);
                    opacity: 0;
                }

                0% {
                    transform: scale(1);
                    opacity: 1;
                }
            }

            @keyframes slideClose {
                0% {
                    opacity: 0;
                    margin-top: -20px;
                }

                0% {
                    opacity: 1;
                    margin-top: 0;
                }
            }

            @media (max-width: 600px) {
                .col {
                    flex: 0 0 50%;
                    max-width: 50%;
                }

                .gambarmini {
                    width: 100px;
                    height: 100px;
                }

                .ligaleri {
                    border: none;
                }

                .galeri li,
                .galeri li span {
                    width: 100px;
                    height: 100px;
                }
            }

    </style>

    <div class="container">
        <div class="covergaleri">
            <ul class="galeri">
                <div class="row">
                    @foreach ($foto as $foto)
                        <div class="col">
                            <li class="ligaleri">
                                <a href="#{{ $foto->id }}">
                                    <img class="gambarmini" src="{{ url('Image') . '/' . $foto->image }}"
                                        alt="lamborghini-aventador-sv">
                                    <span>{{ $foto->judul }}</span>
                                </a>
                                <div class="overlay" id="{{ $foto->id }}">
                                    <a href="" class="close">
                                        <i class="fa-solid fa-xmark"></i>
                                    </a>
                                    <img src="{{ url('/Image') . '/' . $foto->image }}"
                                        alt="lamborghini-aventador-sv">
                                </div>
                            </li>
                        </div>
                    @endforeach
                </div>
                <div class="clear"></div>
            </ul>
        </div>
    </div> --}}

    <style>
        .cover-gallery {
            margin-top: 2rem;
            padding: 1rem;
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .img-item {
            padding: .3rem;
            background: aquamarine;
            border-radius: .2rem;
            position: relative;
            overflow: hidden;
            object-fit: cover;
        }

        img {
            max-width: 100%;
            border-radius: .2rem;
        }

        .text-gallery-item {
            position: absolute;
            width: 100%;
            padding: 1rem;
            color: white;
            font-weight: 900;
            top: 87%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .img-item:hover .text-gallery-item {
            opacity: 1;
            visibility: visible;
        }

        .img-item img {
            width: 100%;
            height: auto;
            height: 200px;
            object-fit: cover;
        }

        .img-item .text-gallery-item {
            width: 100%;
            background-color: rgba(4, 67, 255, 0.632);
            padding: 10px;
            color: #fff;
        }


        .img-item img {
            transition: transform .3s ease;
        }

        .img-item:hover img {
            transform: scale(1.04);
        }

        .modal-dialog {
            max-width: 800px;
            width: 100%;
            height: auto;
        }

        /* .modal-content {
                  width: 100%;
                } */
/* 
        .modal-body img.modal_img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        } */

        /* .modal {
            width: 100%;
            height: auto;
        } */

        /* .modal .modal_img {
            width: 100%;
        } */

        /* .cover-foto-modal {
            width: 100%;
            height: auto;
        } */
/* 
        .cover-foto-modal img {
            max-width: 100%;
            max-height: 100%;
        } */

        /* .modal-body img.modal_img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        } */
    </style>
    <div class="cover-gallery">
        <div class="container-lg ">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                @foreach ($foto as $foto)
                    <div class="col-md-3 row-item ">
                        <div class="img-item" data-bs-toggle="modal" data-bs-target="#foto{{ $foto->id }}">
                            <img src="{{ url('Image') . '/' . $foto->image }}" class="gallry-item" alt="Gambar">
                            <div class="text-gallery-item text-center">
                                <h5>{{ $foto->judul }}</h5>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="foto{{ $foto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog" style="max-width: 800px; width: 100%;">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5>{{ $foto->judul }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{ url('Image') . '/' . $foto->image }}" alt="" class="modal_img">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @include('app.footer')
@endsection
