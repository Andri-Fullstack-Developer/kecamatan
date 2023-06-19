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

        /* Cover Program */
        .cover-program {
            margin-top: 2rem;
        }
    </style>
    <div class="bg-halaman">
        <div class="bg-agenda">
            <h1 class="h2">Program SKPD</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Program SKPD</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        th {
            text-align: center;
        }
    </style>

    <div class="cover-program">
        <div class="container">
            <div class="cover-progrtam_table table-responsive">
                <table>
                    <tr>
                        <th>NO</th>
                        <th>Nama Program</th>
                        <th>Nama Kegiatan</th>
                        <th>Nilai Angaran (Rupiah) </th>
                        <th>Tahun</th>
                    </tr>
                    @php
                        $no = $program->firstItem();
                    @endphp
                    @foreach ($program as $pro)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $pro->nama_program }}</td>
                            <td>{{ $pro->deskripsi }}</td>
                            <td>{{ $pro->anggaran }}</td>
                            <td>{{ $pro->tahun }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="paginat mt-3">
                {{ $program->links() }}
            </div>
        </div>
    </div>

    @include('app.footer')
@endsection
