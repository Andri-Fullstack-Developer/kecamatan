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
            <h1 class="h2">Pengaduan Masyarakat</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Pengaduan Masyarakat</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        .cover-conten_pengadu {
            width: 100%;
            margin-top: 2rem;
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            padding: 1rem;
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
        }

        .box-pengadu label {
            display: block;
            margin-top: 10px;
        }

        textarea {
            resize: none;
        }

        .pengadu-text {
            text-align: center;
            justify-content: center;
            justify-items: center;
        }

        .box-pengadu {
            width: 100%;
            background: white;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 1rem;
            justify-content: center;
            justify-items: center;
            border-radius: .2rem;
        }

        /* .col-md-6 {
                                        width: 100%;
                                    } */

        label {
            margin-bottom: .4rem;
        }

        input,
        select {
            height: 30px;
            border: 1px solid black;

        }

        input,
        select,
        textarea {
            width: 100%;
            border-radius: .2rem;
        }

        .input {
            padding-left: .4rem;
        }

        .cover-button {
            text-align: right;
        }

        button.no-button {
            margin-top: 1rem;
            border: 1px solid black;
            border-radius: .3rem;
            background: white;
            color: black;
            font-weight: 700;
            padding: .2rem;
            transition: all .9s;
        }

        button.no-button:hover {
            background: #002060;
            color: white;
        }

        .no-button i {
            font-size: 2rem;
        }

        /* @media (min-width: 600px) {
                                        .col {
                                            flex: 0 0 50%;
                                        }
                                    } */

        /* @media (max-width: 600px) {
                                        .col {
                                            flex: 0 0 100%;
                                        }
                                    } */

        .ket {
            color: blue;
        }

        .ket:hover {
            color: rgb(0, 0, 0);
        }

        .row {
            align-items: flex-start;
        }

        span.info {
            color: blue;
            font-size: 1rem;
        }
    </style>

    <div class="cover-pengaduan">
        <div class="container">

            <div class="cover-conten_pengadu">
                <div class="pengadu-text">
                    <h2>Pengaduan Masyarakat</h2>
                    <p>Mengisi data harus benar</p>
                    <p class=" ket" type="button" data-bs-toggle="modal" data-bs-target="#ket">keterangan*</p>
                </div>
                @include('sweetalert::alert')
                <form action="{{ url('post-pengadu') }}" method="POST" enctype="multipart/form-data">
                    <div class="row mt-5">
                        @csrf
                        <div class="col-md-6">
                            <div class="box-pengadu">
                                <label for="name_pelapor">Nama Pelapor</label>
                                <input class="input" type="text" name="nama_pelapor"
                                    placeholder="Masuakan Nama Pelapor">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="input" name="jenis_kelamin" id="cars">
                                    <option>
                                        <------->
                                    </option>
                                    <option value="L">L</option>
                                    <option value="P">P</option>
                                </select>
                                <label for="usia">Usia</label>
                                <input class="input" type="number" name="usia" placeholder="Masukan usia anda" oninput="this.value = this.value.slice(0, 2)">
                                <label for="alamat">Alamat Lengkap</label>
                                <input class="input" type="text" name="alamat" placeholder="Masukan Alamat Lengkap">
                                <label for="phone">Telephone</label>
                                <input class="input" type="number" name="phone" placeholder="Masukan Nomer Telephone" oninput="this.value = this.value.slice(0, 13)">
                                <label for="email">Email</label>
                                <input class="input" type="email" name="email" placeholder="Masukan Email">
                                <label for="img_ktp">Foto KTP</label>
                                <input type="file" name="img_ktp" placeholder="Masukan ">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="box-pengadu">

                                <label for="img_selvi">Foto Ktp Selfi</label>
                                <input type="file" name="img_selvi" placeholder="Masukan Selfi">

                                <label for="img_pengadu">Foto Pengaduan</label>
                                <input type="file" name="img_pengadu" id="" placeholder="Masukan Ktp">

                                <label for="diskripsi">Isi laporan ( permasalahan )</label>
                                <textarea class="input" name="diskripsi" id="" cols="30" rows="10"
                                    placeholder="Masukan laporan pengaduan masyarakat"></textarea>
                                <div class="cover-button p-1">
                                    <a href="" type="submit">
                                        <button class="no-button">
                                            Simpan
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        .modal {
            margin-top: 5rem;
        }

        .modal-body {
            padding: 1rem;
            font-size: 2rem;
        }

        .cover-modal_foto {
            width: 100%;
            height: auto;
            overflow: hidden;
        }

        .cover-modal_foto img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    </style>

    <!-- Modal -->
    <div class="modal fade" id="ket" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Keterangan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5><span>1. </span>Tolong isi data yang benar</h5>
                    <h5><span>2. </span>Tolong isi foto yang benar</h5>
                    <h5><span>3. </span>Tolong isi foto selfi benar</h5>
                    <h5><span>4. </span>Jika foto atau foto selfi tidak sesuai maka tidak di acc</h5>

                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ktp" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Keterangan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="cover-modal_foto">
                        <img src="{{ asset('/img/ktp.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="selvi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Keterangan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body cover-modal-img ">

                    <div class="cover-modal_foto">
                        <img src="{{ asset('/img/Selfi.png') }}" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('app.footer')
@endsection
