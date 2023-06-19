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
            <h1 class="h2">Struktur Organisasi</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Struktur Organisasi</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        div.cover-organiasi {
            margin-top: 2rem;
        }

        th {
            padding-right: 5rem;
            font-weight: 700;
            font-size: .8rem;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

    <div class="cover-organiasi">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table>
                        <tbody>

                            <tr>
                                <th class="col-md-4">Camat</th>
                                <td class="col-md-8">: {{$data[0]}}</td>
                            </tr>
                            <tr>
                                <th class="col-md-4">Sekertaris Camat</th>
                                <td class="col-md-8">: {{$data[1]}}</td>
                            </tr>
                            {{-- <tr>
                                    <th class="col-md-4">Kepala Seksi Pemerintahan Umun</th>
                                    <td class="col-md-8">: habibi</td>
                                </tr>
                                <tr>
                                    <th class="col-md-4">Kepala Seksi Kesejahteraan Masyrakat</th>
                                    <td class="col-md-8">: habibi</td>
                                </tr>
                                <tr>
                                    <th class="col-md-4">Kepala Seksi Pemberdayayan Masyrakat</th>
                                    <td class="col-md-8">: habibi</td>
                                </tr>
                                <tr>
                                    <th class="col-md-4">Kepala Seksi Pelayanan Umun</th>
                                    <td class="col-md-8">: habibi</td>
                                </tr>
                                <tr>
                                    <th class="col-md-4">Kepala Seksi Ketentraman dan Ketertiban</th>
                                    <td class="col-md-8">: habibi</td>
                                </tr> --}}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('app.footer')
@endsection
