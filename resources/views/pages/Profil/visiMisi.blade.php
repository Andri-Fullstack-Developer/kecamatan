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

        .box-visi {
            margin-top: 2rem;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
            padding: 2rem;
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
        }
    </style>
    <div class="bg-halaman">
        <div class="bg-agenda">
            <h1 class="h2">Visi & Misi</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Visi & Misi</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="bg-visi">
        <div class="container">
            <div class="box-visi">
                <div class="visiMisi" data-aos="fade-up"
                data-aos-duration="3000">
                    <div class="container">
                        <h1>Visi</h1>
                        <p>MENJADI INSTITUSI YANG AKUNTABEL SEBAGAI PELAYAN, KOORDINATOR DAN FASILITATOR MENUJU PEMERINTAHAN
                            YANG BERKUALITAS (GOOD GOVERNANCE).</p>
                        <h1>Misi</h1>
                        <p>1. <span> Mewujudkan pelayanan prima melalui peningkatan, profesionalisme Aparat Kecamatan
                                Tuban</span></p>
                        <p>2. <span>Mewujudkan keamanan dan ketertiban di wilayah Kecamatan Tuban;</span></p>
                        <p>3. <span>Mewujudkan kewaspadaan masyarakat menuju terbentuknya masyarakat madani;</span></p>
                        <p>4. <span>Menjadikan Kecamatan Karanganyar sebagai pusat pengembangan industri, perdagangan dan
                                penunjang
                                pariwisata;</span></p>
                        <p>5. <span> Menjadikan Masyarakat Kecamatan Tuban meningkat pendapatannya;</span></p>
                        <p>6. <span>Memberdayakan semua potensi Sumber Daya Alam dan Sumber Daya Manusia untuk pengembangan
                                industri,</span></p>
                        <p>7. <span>perdagangan, pertanian, pariwisata dan ekonomi kerakyatan.</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('app.footer')
@endsection
