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
            <h1 class="h2">Ducapil</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Sobat Ducapil</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        input,
        select {
            width: 50%;
            padding: .2rem;
            margin-bottom: .3rem;
            justify-content: right;
            border: 1px solid black;
            border-radius: .2rem;
        }

        .row {
            display: flex;
            align-items: flex-start;
        }

        .cover_pdf-ktp {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        .form-ktp {
            padding: .4rem;
        }

        button.fa {
            font-size: 1.4rem;
            font-weight: 900;
            color: rgb(0, 38, 255);
            background: none;
            border: 1px solid black;
            padding: .1rem .4rem .1rem .4rem;
            border-radius: .3rem;
        }

        .btn-submit {
            width: 100%;
            text-align: center;
            font-weight: 700;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>

    <div class="cover-ducapil mt-5">
        <div class="container ">
            <div class="cover-bg-pendaftran text-center">
                {{-- <div class="container"> --}}
                <div class="cover-text-pendaftran">
                    <h6>Selamat Datang di Kecamatan Tuban</h6>
                    <p>Kami dari tim kecamatan menerima pendatran secara onlain
                        <br>
                        Pendatran dan memperbarui EKTP, KK, dan Akte
                    </p>
                    {{-- </div> --}}
                </div>
            </div>
            <div class="row mt-5 ">
                <div class="col-md-4">
                    <div class="colom_pendaftran_ktp">
                        <h6>Pendaftaran E KTP</h6>
                        <p>Silahkan isi data selengkap mungkin
                            <br>
                            Silankan Clik tombol di bawah
                        </p>
                        <button class="fa fa-angle-down" id="ktp" onclick="toggleForm_ktp()"></button>
                    </div>
                    <div class="form-ktp" id="form-ktp" style="display: none;">
                        <label for="" class="cover_pdf-ktp">
                            Propinsi
                            <input type="text" name="propindi" placeholder="Masukan Profinnsi">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Kabupaten
                            <input type="text" name="kabupaten" placeholder="Masukan Kabupaten">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Kecamatan
                            <input type="text" name="kecamatan" id="" placeholder="Masukan Kecamatan">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Kelurahan
                            <input type="text" name="kelirahan" id="" placeholder="Masukan Kkelurahan">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Permohonan ktp
                            <select name="status" id="">
                                <option selected>----------</option>
                                <option value="Baru">Baru</option>
                                <option value="Pergantian">Pergantian</option>
                            </select>
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Nama Lengkap
                            <input type="text" name="nama" placeholder="Masukan Nama Lengkap">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            No. KK
                            <input type="text" name="kk" id="" placeholder="Masukan Nomer KK">
                        </label>
                        <label for=""class="cover_pdf-ktp">
                            NIK
                            <input type="text" name="nik" placeholder="Masukan Nomer NIK">
                        </label>
                        <label for=""class="cover_pdf-ktp">
                            Alamat
                            <input type="text" name="alamat" placeholder="Masukan Alamat">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            RT
                            <input type="number" name="rt" placeholder="Maukan nomer RT"
                                oninput="this.value = this.value.slice(0, 2)">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            RW
                            <input type="number" name="rw" placeholder="Maukan nomer RW"
                                oninput="this.value = this.value.slice(0, 2)">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Kode Post
                            <input type="number" name="kode_post" placeholder="Maukan nomer RW"
                                oninput="this.value = this.value.slice(0, 6)">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Nomer Hp
                            <input type="number" name="no_hp"
                                oninput="this.value
                            =this.value.slice(0, 13)"
                                placeholder="Masukan Nomer Hp">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Email
                            <input type="email" name="email_ktp" placeholder="Masukan Email">
                        </label>
                        <button type="submit" class="btn btn-primary mt-4 btn-submit">Submit</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="colom_pendaftran_KK">
                        <h6>Pendaftaran KK</h6>
                        <p>Silahkan isi data selengkap mungkin
                            <br>
                            Silankan Clik tombol di bawah
                        </p>
                        <button class="fa fa-angle-down" id="kk" onclick="toggleForm_kk()"></button>
                    </div>
                    <div class="form-kk" id="form-kk" style="display: none;">
                        <label for="" class="cover_pdf-ktp">
                            Propinsi
                            <input type="text" name="propindi" placeholder="Masukan Pprofinnsi">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Kabupaten
                            <input type="text" name="kabupaten" placeholder="Masukan Kabupaten">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Kecamatan
                            <input type="text" name="kecamatan" id="" placeholder="Masukan Kecamatan">
                        </label>
                        <label for="" class="cover_pdf-ktp">
                            Kelurahan
                            <input type="text" name="kelirahan" id="" placeholder="Masukan Kkelurahan">
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="colom_pendaftran_akte">
                        <h6>Pendaftaran Akte</h6>
                        <p>Silahkan isi data selengkap mungkin
                            <br>
                            Silankan Clik tombol di bawah
                        </p>
                        <P class="fa fa-angle-down"></P>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('app.footer')
    <script>
        function toggleForm_ktp() {
            var form = document.getElementById("form-ktp");
            var icon = document.getElementById("ktp");

            if (form.style.display === "none") {
                form.style.display = "block";
                icon.classList.remove("fa-angle-down");
                icon.classList.add("fa-angle-up");
            } else {
                form.style.display = "none";
                icon.classList.remove("fa-angle-up");
                icon.classList.add("fa-angle-down");
            }
        }
    </script>
    <script>
        function toggleForm_kk() {
            var form = document.getElementById("form-kk");
            var icon = document.getElementById("kk");

            if (form.style.display === "none") {
                form.style.display = "block";
                icon.classList.remove("fa-angle-down");
                icon.classList.add("fa-angle-up");
            } else {
                form.style.display = "none";
                icon.classList.remove("fa-angle-up");
                icon.classList.add("fa-angle-down");
            }
        }
    </script>
@endsection
