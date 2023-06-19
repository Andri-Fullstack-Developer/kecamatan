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

        form.rating {
            margin-top: 1rem;
        }

        .rating {
            display: inline-block;
            position: relative;
            height: 50px;
            line-height: 50px;
            font-size: 50px;
        }

        .rating label {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            cursor: pointer;
        }

        .rating label:last-child {
            position: static;
        }

        .rating label:nth-child(1) {
            z-index: 5;
        }

        .rating label:nth-child(2) {
            z-index: 4;
        }

        .rating label:nth-child(3) {
            z-index: 3;
        }

        .rating label:nth-child(4) {
            z-index: 2;
        }

        .rating label:nth-child(5) {
            z-index: 1;
        }

        .rating label input {
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .rating label .icon {
            float: left;
            color: transparent;
        }

        .rating label:last-child .icon {
            color: #959595;

        }

        .rating:not(:hover) label input:checked~.icon,
        .rating:hover label:hover input~.icon {
            color: #ffa904;
        }

        .rating label input:focus:not(:checked)~.icon:last-child {
            color: #000;
            text-shadow: 0 0 5px #ffa904;
        }
    </style>
    <div class="bg-halaman">
        <div class="bg-agenda">
            <h1 class="h2">Rating</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Rating</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        .submut {
            margin-top: 10rem;
        }
    </style>

    <div class="container">
        <form class="rating" data-aos="fade-right" id="ratingForm" action="{{ route('ratings.store') }}" method="POST">
            @csrf
            <div class="cover-rating">
                <label>
                    <input type="radio" name="stars" value="1" />
                    <span class="fa fa-star icon"></span>
                </label>
                <label>
                    <input type="radio" name="stars" value="2" />
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                </label>
                <label>
                    <input type="radio" name="stars" value="3" />
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                </label>
                <label>
                    <input type="radio" name="stars" value="4" />
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                </label>
                <label>
                    <input type="radio" name="stars" value="5" />
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                    <span class="fa fa-star icon"></span>
                </label>
            </div>
          
        </form>
    </div>
    <script>
        const ratingForm = document.getElementById('ratingForm');
        const ratingRadios = document.querySelectorAll('input[name="stars"]');

        ratingRadios.forEach(radio => {
            radio.addEventListener('click', () => {
                ratingForm.submit();
            });
        });
    </script>

    <style>
        .ran-hasil {
            font-size: 1.5rem;
        }

        .hasil-ranting {
            padding: 2rem;
            background: #D1EEFC;
            border-radius: 1rem;
            box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.5);
            border-radius: .3rem;
            transition: all 2s;
        }

        #zoom-in {
            transition: all 2s;
        }
    </style>
    <div class="hasil-ranting m-3">
        <div class="container ran-total" data-aos="fade-up" data-aos-duration="3000">
            <h4 class="ran-text">Hasil Total Ranting:</h4>
            <div class="ran-hasil mt-3">
               
                    <div>⭐<span>{{$bin1}}</span></div>
                    <div>⭐⭐<span>{{$bin2}}</span></div>
                    <div>⭐⭐⭐<span>{{$bin3}}</span></div>
                    <div>⭐⭐⭐⭐<span>{{$bin4}}</span></div>
                    <div>⭐⭐⭐⭐⭐<span>{{$ran}}</span></div>
               
            </div>
            <div class="ran-total mt-3 fw-bold fs-5">Hasil Selurah Ranting: <span>{{$jum}}</span></div>
        </div>
    </div>

    @include('app.footer')
@endsection
