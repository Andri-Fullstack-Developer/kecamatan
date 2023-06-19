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

        .box-agenda {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
            padding: 2rem;
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
        }

        .hariTgl-agenda {
            margin-top: 1rem;
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
    </style>
    <div class="bg-halaman">
        <div class="bg-agenda">
            <h1 class="h2">Agenda</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Agenda</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container agenda">
        @foreach ($agen as $agenda)
            <div class="box-agenda">
                <h3 class="judul-agenda">{{$agenda->judul}}</h3>
                <div class="hariTgl-agenda">HARI/TGL: <span>{{$agenda->hariTgl}}</span></div>
                <div class="jam-agenda">PUKUL: <span>{{$agenda->jam}}</span></div>
                <div class="lokasi-agenda">LOKASI: <span>{{$agenda->lokasi}}</span></div>
            </div>
        @endforeach
        {{-- <div class="box-agenda">
            <h3 class="judul-agenda">Paginator and LengthAwarePaginator Instance Methods</h3>
            <div class="hariTgl-agenda">HARI/TGL: <span>08 maret 2010</span></div>
            <div class="jam-agenda">PUKUL: <span>20:10</span></div>
            <div class="lokasi-agenda">LOKASI: <span>Kantor Laravel</span></div>
        </div> --}}
    </div>


    @include('app.footer')
@endsection
