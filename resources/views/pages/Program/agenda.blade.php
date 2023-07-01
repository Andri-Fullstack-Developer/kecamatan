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

        .row {
            align-items: flex-start;
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

    <style>
        .agenda select.th {
            width: 100%;

            margin: .2rem 0 .9rem 0;
        }

        select.th {
            border-image-source: linear-gradient(rgba(0, 51, 102, 0.5), rgba(0, 0, 51, 0.5));
            border-width: 2px;
            border-image-slice: 1;
            background: transparent;
        }
    </style>

    <div class="container agenda">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex justify-content-end">
                    <form class="col-md-2" action="{{ route('agenda.index', ['id' => 0]) }}" method="GET" id="form-tahun">
                        <select class="th p-2" name="tahun" id="tahun" onchange="submitForm()">
                            @foreach ($years as $year)
                                <option value="{{ $year }}" {{ $year == $tahun ? 'selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endforeach
                        </select>
                    </form>
                </div>

                @foreach ($agen as $agenda)
                    <div class="box-agenda">
                        <h3 class="judul-agenda">{{ $agenda->judul }}</h3>
                        <div class="hariTgl-agenda">HARI/TGL: <span>{{ $agenda->hari }},
                                {{ \Carbon\Carbon::parse($agenda->hariTgl)->isoFormat('D MMMM YYYY') }}</span></div>
                        <div class="jam-agenda">PUKUL: <span>{{ $agenda->jam }}</span></div>
                        <div class="lokasi-agenda">LOKASI: <span>{{ $agenda->lokasi }}</span></div>
                    </div>
                @endforeach
                <div class="container mt-2">
                    {{ $agen->links() }}
                </div>
            </div>
            <div class="col-md-4">
                <div class="cover-img_data">
                    <img src="{{ asset('img/indo_maju.png') }}" alt="">
                </div>
                @foreach ($berike as $be)
                    <div class="berita-data_kecil">
                        @if ($be->image)
                            <img class="card-img-top  small-image" src="{{ url('storage/Images') . '/' . $be->image }}"
                                alt="">
                        @endif
                        <a href="{{ url('/data_berita', $be->id) }}">
                            <p class="judul-text_data mt-3 mb-1">{{ substr($be->judul, 0, 50) }}...</p>
                        </a>
                        <p class="jam-text_data mb-1"><i class="fa-regular fa-clock"></i> {{ $be->created_at }} <i
                                class="fa-solid fa-user"></i> <span>User</span></p>
                        <p class="informasi-text_data">{{ substr($be->informasi, 0, 60) }}...</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>


    @include('app.footer')
@endsection
<script>
    function submitForm() {
        document.getElementById('form-tahun').submit();
    }
</script>
