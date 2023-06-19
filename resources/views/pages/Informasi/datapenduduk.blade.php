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
            <h1 class="h2">Data Jumplah Penduduk</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Data Jumplah Penduduk</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        button.btn-download {
            color: #002060;
            border: none;
            font-size: 1.5rem;
            background: none;
            transition: all 1000ms;
        }

        button.btn-download:hover {
            color: #f7f8f3;
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
            padding: 5px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        /* Cover Program */
        .cover-program {
            margin-top: 2rem;
        }

        .cover-jumplah {
            height: 100px;
        }

        .row {
            align-items: flex-start;
        }

        .cover-jph_data {
            /* background: #002060; */
            box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;
            padding: .8rem;
        }

        .text-jph {
            font-weight: 500;
            font-size: 1rem;
            padding-left: 1rem;
            /* border: 1px  solid red; */
            /* box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset; */
        }
    </style>

    <div class="cover-program">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="cover-progrtam_table table-responsive">
                        <table>
                            <tr>
                                <th>NO</th>
                                <th>Nama Desa</th>
                                <th>jumplah Desa</th>
                                <th>Jumplah KK</th>

                            </tr>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($nads as $na)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $na->namaDs }}</td>
                                    <td>{{ $na->jph_jiwa }} Jiwa</td>
                                    <td>{{ $na->jph_kk }} KK</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-md-4 cover-jumplah">
                    <div class="cover_reght">
                        <div class="cover-img_data">
                            <img src="{{ asset('img/indo_maju.png') }}" alt="">
                        </div>
                        <div class="cover-jph_data">
                            <p class="text-jph">Jumplah Jiwa: {{ $jumlahJiwa }}</p>
                            <p class="text-jph">Jumplah KK: {{ $jumlahKK }}</p>
                        </div>
                        {{-- @foreach ($berike as $be)
                            <div class="berita-data_kecil">
                                @if ($be->image)
                                    <img class="card-img-top  small-image"
                                        src="{{ url('storage/Images') . '/' . $be->image }}" alt="">
                                @endif
                                <a href="{{ url('/data_berita', $be->id) }}">
                                    <p class="judul-text_data mt-3 mb-1">{{ substr($be->judul, 0, 50) }}...</p>
                                </a>
                                <p class="jam-text_data mb-1"><i class="fa-regular fa-clock"></i> {{ $be->created_at }} <i
                                        class="fa-solid fa-user"></i> <span>User</span></p>
                                <p class="informasi-text_data">{{ substr($be->informasi, 0, 60) }}...</p>
                            </div>
                        @endforeach --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('app.footer ')
@endsection
