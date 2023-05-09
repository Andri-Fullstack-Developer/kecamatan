<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Panel Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    {{-- <meta http-equiv="refresh" content="10"> --}}

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"
        integrity="sha512-Ep/gxr+Jb9XO4hL4Iv2ks4q3V7AK2lrJz0V0vflfKzwhVtX5p5J5osil+Z50tKxym/SL+VEY/5yNvWEH1usJGA=="
        crossorigin="anonymous" />

    <link rel="shortcut icon" href="{{ asset('dasboard/img/admin.png') }}" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('dasboard/css/bootstrapmin.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('dasboard/css/style.css') }}" rel="stylesheet">

    <!-- Css Contend --->
    <link rel="stylesheet" href="{{ asset('dasboard/css/conten.css') }}">
    <style>
        @media screen and (max-width: 600px) {
            table {
                width: 100%;
            }

            thead th {
                font-size: 5px;
            }

            table,
            thead,
            tbody,
            th,
            td,
            tr {
                display: block;
            }

            tr {
                border: 1px solid #ccc;
            }

            td {
                border: none;
                position: relative;
                padding-left: 50%;
            }

            td:before {
                position: absolute;
                top: 6px;
                left: 2px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                content: attr(data-column);
                color: #ff0000;
                font-weight: medium;
            }
        }
    </style>
    <style>
        label.model-la {
            display: block;
            font-weight: bold;
            margin-bottom: 10px;
            width: 100%;
        }

        textarea,
        input.model-in {
            display: block;
            margin-bottom: 20px;
            width: 100%;
            border-radius: 10px;
        }

        input[type=file] {
            max-width: 100%;
            color: #444;
            padding: 5px;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #555;
        }

        input[type=text] {
            max-width: 100%;
            color: #444;
            padding: 5px;
            background: #fff;
            border-radius: 10px;
            border: 1px solid #555;
        }

        button {
            background: none;
            color: #ff0000;
            border: none;
        }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">

        <!-- Spinner Start -->
        @include('dasboard.app.spinner')
        <!-- Spinner End -->

         <!-- Sidebar Start -->
        @include('dasboard.app.sidebar')

        <!-- Content Start -->
        <div class="content">
             <!-- Navbar Start -->
            @include('dasboard.app.nav')

             <!-- Containt Start -->
            @if ($menu === 'home')
                @section('home')
                    @include('dasboard.Home.home')
                @show
            @elseif($menu === 'penjabat')
                @section('penjabat')
                    @include('dasboard.Profil.penjabat')
                @show
            @elseif($menu === 'organisasi')
                @section('organisasi')
                    @include('dasboard.profil.organisasi')
                @show
            @elseif($menu === 'visi&misi')
                @section('visi&misi')
                    @include('dasboard.profil.visi&misi')
                @show
            @elseif($menu === 'berita')
                @section('berita')
                    @include('dasboard.Berita.berita')
                @show
            @elseif($menu === 'agenda')
                @section('agenda')
                    @include('dasboard.Program.agenda')
                @show
            @elseif($menu === 'singup')
                @section('singup')
                    @include('dasboard.setting.singup')
                @show
            @endif


            <!-- Footer Start -->
            @include('dasboard.app.footer')
            <!-- Footer End -->
            
        </div>
        <!-- Content End -->

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
            integrity="sha512-DOMA8JJJbY1uNhM+TZoAWnM+ETpR+BfKTJFL/4X3q4BQO1G+17g2kp7Jdd8Ai8uV7PRSQo5P5TWtX5I+1mV7Cg=="
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"
            integrity="sha512-S0F8qJW2yvTjKs50WTU6XCEJ6h/bZvRwDjKUoWXe3qWzTQy1U/EL6Uf/6UoW6HeMSehYwKNm/dKzgLMmaC1fGw=="
            crossorigin="anonymous"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('dasboard/js/main.js') }}"></script>
</body>

</html>
