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
            <h1 class="h2">Data Pengaduan Masyarakat</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Data Pengaduan Masyarakat</a>
                </li>
            </ul>
        </div>
    </div>
    <style>
        th.aksi,
        td.aksi {
            text-align: center;
        }

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
    </style>

    <div class="cover-program">
        <div class="container">
            <div class="cover-progrtam_table table-responsive">
                <table>
                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Tanggal Pendatran</th>
                        <th>Alamat</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($ektp as $e)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $e->nama }}_{{ $e->id }}</td>
                            <td>{{ $e->tanggal_pendaftaran }}</td>
                            <td>{{ $e->alamat }}</td>
                            <td class="aksi">
                                <a href="/tampil_ektp/{{ $e->id }}">
                                    <button class="btn-download" type="submit"><i class="fa fa-download"></i></button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            {{-- <div class="paginat mt-3">
                {{ $users->links() }}
            </div> --}}
        </div>
    </div>

    @include('app.footer')
@endsection
