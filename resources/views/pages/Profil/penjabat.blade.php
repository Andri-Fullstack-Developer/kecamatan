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

        .agenda {
            margin-top: 1rem;
        }

        .box-penjabat {
            margin-top: 1rem;
            box-shadow: rgba(0, 0, 0, 0.25) 0px 0.0625em 0.0625em, rgba(0, 0, 0, 0.25) 0px 0.125em 0.5em, rgba(255, 255, 255, 0.1) 0px 0px 0px 1px inset;
            padding: 1rem;
            background: #D1EEFC;
        }

        .box-image {
            background: gray;
            position: relative;
            width: 100%;
            height: 500px;
        }

        .box-image img {
            position: absolute;
            width: 100%;
            height: 100%;
            object-fit: cover;
            top: 0;
            left: 0;
        }

        .box-bg_img {
            background: #A8D1E7;
            padding: 1rem;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px;
        }


        table tr:nth-child(even) {
            background-color: #DADEDF;
        }

        table tr:hover {
            background-color: #AEB8D1;
        }

        th,
        td {
            border-top: 1px solid #002060;
            border-bottom: 1px solid #002060;
        }


        table td {
            padding: 8px;
            vertical-align: top;
            text-align: left;
        }


        @media screen and (max-width: 600px) {
            .box-image {
                height: 350px;
            }

            .box-image img {
                height: 350px;
            }

            .table-camat {
                margin-top: 2rem;
            }

        }
    </style>
    <div class="bg-halaman">
        <div class="bg-agenda">
            <h1 class="h2">Profil Penjabat</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Profil Penjabat</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="box-penjabat">
            <div class="row">
                @foreach ($ja as $jabatan)
                    <div class="col-md-4">
                        <div class="box-bg_img">
                            <div class="box-image">
                                <img src="{{ url('/Image') . '/' . $jabatan->image }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <table class="table-camat">
                            <tbody>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <td>{{($jabatan->nama)}}</td>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <td>{{$jabatan->jabatan}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

    @include('app.footer')
@endsection
