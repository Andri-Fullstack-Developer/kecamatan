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
            <h1 class="h2">Pelayanan KK</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Pelayanan KK</a>
                </li>
            </ul>
        </div>
    </div>


    <style>
        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            display: none;
        }

        .col-mb-6 {
            width: 100%;
            background-color: #730c0c;
            /* padding: 10px; */
        }

        .cover-btn-input {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 10px;
        }

        .cover-btn-input button {
            width: 100%;
        }


        .form-row.show {
            display: block;
        }
    </style>

    <div class="cover-ducapil mt-5">
        <div class="container">
            <div class="cover-bg-pendaftran text-center col-md-12">
                <div class="cover-text-pendaftran">
                    <h4>Selamat Datang di Kecamatan Tuban</h4>
                    <p>Kami dari tim kecamatan menerima pendatran secara onlain
                        <br>
                        Pendatran dan memperbarui KK
                    </p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="cover-btn-input">
                    <div class="col">
                        <button id="baruButton">baru</button>
                    </div>
                    <div class="col">
                        <button id="lamaButton">lama</button>
                    </div>
                </div>
                <form class="row" action="/pendaftran-kk" method="POST">
                    <div class="form-row baru mt-5">
                        <div class="col-mb-6">
                            red
                        </div>
                        <div class="col-mb-6">
                            red
                        </div>
                    </div>
                    <div class="form-row lama">
                        <div class="col-mb-6  ">
                            blu
                        </div>
                        <div class="col-mb-6">
                            blu
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('app.footer')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var baruButton = document.getElementById('baruButton');
            var lamaButton = document.getElementById('lamaButton');
            var baruFormRow = document.querySelector('.form-row.baru');
            var lamaFormRow = document.querySelector('.form-row.lama');

            baruButton.addEventListener('click', function() {
                baruFormRow.classList.add('show');
                lamaFormRow.classList.remove('show');
            });

            lamaButton.addEventListener('click', function() {
                baruFormRow.classList.remove('show');
                lamaFormRow.classList.add('show');
            });
        });
    </script>
@endsection
