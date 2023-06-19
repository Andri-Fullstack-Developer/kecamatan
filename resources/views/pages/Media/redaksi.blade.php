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
            <h1 class="h2">Redaksi</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Redaksi</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        .cover-redaksi {
            margin-top: 2rem;
        }

        h2 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-top: 1rem;
        }

        .text-redaksi {
            padding-top: .5rem;
            padding-bottom: .5rem;
        }

        .text-redaksi p {
            margin-bottom: 0.1em;

        }

        .cover-notiv {
            width: 89%;
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
            padding: 1rem;
            margin-left: 3rem;
        }

        .cover-notiv2 {
            margin-top: 3rem;
        }

        .cover-ling {
            display: inline-block;
            position: absolute;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: #090909;
            text-align: center;
            line-height: 55px;

        }

        .cover-ling i {
            color: white;
            font-size: 1.8rem;
        }

        .cover-ling_left {
            margin-left: 38.3%;
            margin-top: 3.2rem;
        }

        @media (max-width: 600px) {
            .cover-ling_left {
                margin-left: 78%;
            }

            .cover-text {
                margin-top: 2rem;
            }
        }
    </style>

    <div class="cover-redaksi">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="redaksi-pelindung">
                        <h2>Pelindung :</h2>
                        <div class="text-redaksi">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing.(Camat Tuban)</p>
                        </div>
                    </div>
                    <div class="redaksi-sekertaris">
                        <h2>Sekertaris :</h2>
                        <div class="text-redaksi">
                            <p>Lorem ipsum dolor sit amet.(Sekertaris Kecamatan)</p>
                        </div>
                    </div>
                    <div class="redaksi-pengarah_seksi">
                        <h2>Pengarah Seksi :</h2>
                        <div class="text-redaksi">
                            <p>Lorem ipsum dolor sit amet consectetur.(Pemerintahan)</p>
                            <p>Lorem ipsum dolor sit amet consectetur.(Trantip)</p>
                            <p>Lorem ipsum dolor sit amet consectetur.(Pelindung Masyarakat)</p>
                            <p>Lorem ipsum dolor sit amet consectetur.(Kesejahteraan Sosial)</p>
                            <p>Lorem ipsum dolor sit amet consectetur.(Pembagunan)</p>
                        </div>
                    </div>
                    <div class="redaksi-bidang_pelayanan">
                        <h2>Bidang Pelayanan-pelayanan :</h2>
                        <div class="text-redaksi">
                            <p>Lorem ipsum dolor sit amet.(Pranata Komputer Ahli Muda)</p>
                            <p>Lorem ipsum dolor sit amet.(Dokumentasi)</p>
                            <p>Lorem ipsum dolor sit amet.(Operator)</p>
                        </div>
                    </div>
                    <div class="redaksi-bidang_pemberitaan">
                        <h2>Bidang Pemberitaan :</h2>
                        <div class="text-redaksi">
                            <p>Lorem ipsum dolor sit amet.(Pranata Humas Ahli Muda) </p>
                            <p>Lorem ipsum dolor sit amet. (Redaktur)</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cover-text">
                        <div class="cover-ling">
                            <i class="fa fa-hand-point-right"></i>
                        </div>
                        <div class="cover-notiv">
                            <div class="text-notiv">
                                <p>Di Tuban yang toak-toba,
                                    <br>
                                    Mari kita saling berbagi doa.
                                    <br>
                                    Jaga kebersihan dan kesehatan,
                                    <br>
                                    Untuk masa depan yang cerah berjaya.
                                </p>
                                <p>
                                    Bersama membangun daerah Tuban,
                                    <br>
                                    Kerja keras dengan penuh semangat jangan kendor.
                                    <br>
                                    Tingkatkan pendidikan dan pengetahuan,
                                    <br>
                                    Agar kehidupan semakin baik dan berjaya berjalan.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="cover-text">
                    </div>
                    <div class="cover-ling mt-5">
                        <i class="fa fa-hand-point-right"></i>
                    </div>
                    <div class="cover-notiv  cover-notiv2">
                        <div class="text-notiv">
                            <p>Jalinlah persatuan dan persaudaraan,
                                <br>
                                Saling tolong-menolong, menjaga keharmonisan.
                                <br>
                                Lestarikan adat dan budaya yang beragam,
                                <br>
                                Hargai dan cintai warisan nenek moyang kita selamanya.
                            </p>
                            <p>
                                Mari bersama kita jaga lingkungan,
                                <br>
                                Hijaukan bumi, lestarikan alam yang indah dan sejuk rindang.
                                <br>
                                Tuban toak, Tuban gemah ripah loh jinawi,
                                <br>
                                Dengan nasehat ini, semoga bahagia dan sejahtera selalu di sini.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('app.footer')
@endsection
