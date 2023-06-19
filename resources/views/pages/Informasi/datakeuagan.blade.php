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
            <h1 class="h2">Jumplah Dana</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Jumplah Dana</a>
                </li>
            </ul>
        </div>
    </div>


    <style>
        .search-form {
            width: 80%;
            margin: 0 auto;
            margin-top: 1rem;
        }

        .search-form input {
            height: 100%;
            background: transparent;
            border: 0;
            display: block;
            width: 100%;
            padding: 1rem;
            height: 100%;
            font-size: 1rem;
        }

        .search-form select {
            background: transparent;
            border: 0;
            padding: 1rem;
            height: 100%;
            font-size: 1rem;
        }

        .search-form select:focus {
            border: 0;
        }

        .search-form button {
            height: 100%;
            width: 100%;
            font-size: 1rem;
        }

        .search-form button svg {
            width: 24px;
            height: 24px;
        }

        .search-body {
            margin-bottom: 1.5rem;
        }

        .search-body .search-filters .filter-list {
            margin-bottom: 1.3rem;
        }

        .search-body .search-filters .filter-list .title {
            color: #3c4142;
            margin-bottom: 1rem;
        }

        .search-body .search-filters .filter-list .filter-text {
            color: #727686;
        }

        .search-body .search-result .result-header {
            margin-bottom: 2rem;
        }

        .search-body .search-result .result-header .records {
            color: #3c4142;
        }

        .search-body .search-result .result-header .result-actions {
            text-align: right;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .search-body .search-result .result-header .result-actions .result-sorting {
            display: flex;
            align-items: center;
        }

        .search-body .search-result .result-header .result-actions .result-sorting span {
            flex-shrink: 0;
            font-size: 0.8125rem;
        }

        .search-body .search-result .result-header .result-actions .result-sorting select {
            color: #68cbd7;
        }

        .search-body .search-result .result-header .result-actions .result-sorting select option {
            color: #3c4142;
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .search-body .search-filters {
                display: flex;
            }

            .search-body .search-filters .filter-list {
                margin-right: 1rem;
            }
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
    <div class="container">
        <div class="row">
            <div class="col-lg-12 card-margin">
                <div class="card search-form">
                    <div class="card-body p-0">
                        <form id="search-form" action="/data_keuagan" method="GET">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row no-gutters">
                                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                            <select id="bulan-select" name="bulan" class="form-control">
                                                <option value="1" {{ $selectedMonth == 1 ? 'selected' : '' }}>Januari
                                                </option>
                                                <option value="2" {{ $selectedMonth == 2 ? 'selected' : '' }}>Februari
                                                </option>
                                                <option value="3" {{ $selectedMonth == 3 ? 'selected' : '' }}>Maret
                                                </option>
                                                <option value="4" {{ $selectedMonth == 4 ? 'selected' : '' }}>April
                                                </option>
                                                <option value="5" {{ $selectedMonth == 5 ? 'selected' : '' }}>Mei
                                                </option>
                                                <option value="6" {{ $selectedMonth == 6 ? 'selected' : '' }}>Juni
                                                </option>
                                                <option value="7" {{ $selectedMonth == 7 ? 'selected' : '' }}>Juli
                                                </option>
                                                <option value="8" {{ $selectedMonth == 8 ? 'selected' : '' }}>Agustus
                                                </option>
                                                <option value="9" {{ $selectedMonth == 9 ? 'selected' : '' }}>September
                                                </option>
                                                <option value="10" {{ $selectedMonth == 10 ? 'selected' : '' }}>Oktober
                                                </option>
                                                <option value="11" {{ $selectedMonth == 11 ? 'selected' : '' }}>
                                                    November</option>
                                                <option value="12" {{ $selectedMonth == 12 ? 'selected' : '' }}>
                                                    Desember</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                            <input type="text" placeholder="Masukkan Tahun Search..."
                                                class="form-control" id="tahun-input" name="tahun">
                                        </div>
                                        <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                            <button type="submit" name="submit" class="btn btn-base">
                                                <i class="fa-solid fa-magnifying-glass"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

       

        <table class="mt-5">
            <tr>
                <th>Tanggal</th>
                <th>Bulan</th>
                <th>Tahun</th>
                <th>Jumlah Uang</th>
            </tr>
            @if (isset($_GET['submit']))
                @foreach ($dataKeuangan as $data)
                    <tr>
                        <td>{{ $data->tanggal }}</td>
                        <td>{{ $data->bulan }}</td>
                        <td>{{ $data->tahun }}</td>
                        <td>{{ $data->jumlah_uang }} Juta</td>
                    </tr>
                @endforeach
            @endif
        </table>

    </div>

    @include('app.footer')
@endsection
