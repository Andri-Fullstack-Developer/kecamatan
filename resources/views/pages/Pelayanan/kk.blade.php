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
            <h1 class="h2">Pelayanan KK</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Pelayanan KK</a>
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

        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding-left: .4rem;
            padding-right: .6rem;
           
        }

        .form_kk {
            padding-left: 2rem;
            padding-bottom: 1rem;
            background: rgb(255, 255, 255);
            border-radius: .3rem;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(213, 234, 245, 1) 100%);
        }

        .col-mb-6 {
            flex-basis: calc(50% - 10px);
            /* Mengatur lebar 50% dengan jarak 10px antara kolom */
            margin-bottom: 20px;
        }
    </style>

    <div class="cover-ducapil mt-5">
        <div class="container">
            <div class="cover-bg-pendaftran text-center col-md-12">
                <div class="cover-text-pendaftran">
                    <h4>Selamat Datang di Kecamatan Tuban</h4>
                    <p>Kami dari tim kecamatan menerima pendaftaran secara onlain
                        <br>
                        Pendaftaran dan memperbarui KK
                    </p>
                </div>
            </div>
            <div class="row mt-5 ">
                <form class="form_kk" action="/pendaftaran_kk" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-mb-6">
                            <div class="form-ktp">
                                <div class="cover-hal text-center text-bold mb-2">Data Alamat</div>
                                <label for="provinsi" class="cover_pdf-ktp">
                                    Provinsi
                                    <input type="text" name="provinsi_kk" placeholder="Masukan provinsi" required>
                                </label>
                                <label for="kebupatan" class="cover_pdf-ktp">
                                    Kabupaten
                                    <input type="text" name="kebupatan_kk" placeholder="Masukan Kabupaten" required>
                                </label>
                                <label for="kecamatan" class="cover_pdf-ktp">
                                    Kecamatan
                                    <input type="text" name="kecamatan_kk" id="" placeholder="Masukan Kecamatan"
                                        required>
                                </label>
                                <label for="kelurahan" class="cover_pdf-ktp">
                                    Kelurahan
                                    <input type="text" name="kelurahan_kk" id="" placeholder="Masukan Kelurahan"
                                        required>
                                </label>
                                <div class="cover-hal text-center text-bold mb-2">Data Nama</div>
                                <label for="nama" class="cover_pdf-ktp">
                                    Nama Lengkap Pemohon
                                    <input type="text" name="nama_pe_kk" placeholder="Masukan Nama Lengkap" required>
                                </label>
                                <label for=""class="cover_pdf-ktp">
                                    NIK
                                    <input type="number" name="nik_pe_kk" placeholder="Masukan Nomer NIK" required>
                                </label>
                                <label for=""class="cover_pdf-ktp">
                                    No. KK Semula
                                    <input type="number" name="no_kk_pe_kk" placeholder="Masukan Nomer KK Semula" required>
                                </label>

                                <label for=""class="cover_pdf-ktp">
                                    Alamat Pemohon
                                    <input type="text" name="almt_pe_kk" placeholder="Masukan Tempat Lahir" required>
                                </label>

                            </div>
                        </div>
                        <div class="col-mb-6">
                            <label for="pekerjaan"class="cover_pdf-ktp">
                                Pekerjaan
                                <input type="text" name="pekerjaan_pe_kk" placeholder="Masukan Pekerjaan" required>
                            </label>

                            <label for="status_ktp" class="cover_pdf-ktp">
                                Pemohon kk
                                <select name="status_pe_kk">
                                    <option selected>----------</option>
                                    <option value="Baru">Baru</option>
                                    <option value="Baru/Ulang">Baru/Ulang</option>
                                </select>
                            </label>

                            <label for="" class="cover_pdf-ktp">
                                RT
                                <input type="number" name="rt_pe_kk" placeholder="Masukkan nomer RT"
                                    oninput="this.value = this.value.slice(0, 2)" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                RW
                                <input type="number" name="rw_pe_kk" placeholder="Masukkan nomer RW"
                                    oninput="this.value = this.value.slice(0, 2)" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                Kode Pos
                                <input type="number" name="kode_pos_pe_kk" placeholder="Masukan kodepos"
                                    oninput="this.value = this.value.slice(0, 6)" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                Nomer Hp
                                <input type="number_pe_kk" name="no_hp"
                                    oninput="this.value
                            =this.value.slice(0, 13)"
                                    placeholder="Masukan Nomer Hp" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                Email
                                <input type="email" name="email_pe_kk" placeholder="Masukan Email" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                Jumlah Permohonan
                                <input type="number" name="jlh_pe_kk" placeholder="Masukkan Jumlah Permohonan"
                                    oninput="this.value = this.value.slice(0, 2)" required>
                            </label>
                        </div>
                    </div>
                    <style>
                        .cover-hal,
                        .header-kk {
                            font-weight: 700;
                        }
                    </style>
                    <div class="cover-hal text-center mt-4">Daftar Anggota</div>
                    <div class="row mt-4">
                        <div class="col-md-2 header-kk">No</div>
                        <div class="col-md-4 header-kk">Nik</div>
                        <div class="col-md-4 header-kk">Nama Lengkap</div>
                        <div class="col-md-2 header-kk">SHDK</div>
                    </div>
                    <div class="row mt-2  justify-content-center ">

                        <input class="col-md-1 me-4" type="number" name="no_1">
                        <input class="col-md-4 me-4"type="number" name="kk_1">
                        <input class="col-md-4 me-4"type="text" name="nama_1">
                        <input class="col-md-2 me-4"type="text" name="shdk_1">
                    </div>
                    <div class="row mt-2  justify-content-center ">
                        <input class="col-md-1 me-4" type="number" name="no_2">
                        <input class="col-md-4 me-4"type="number" name="kk_2">
                        <input class="col-md-4 me-4"type="text" name="nama_2">
                        <input class="col-md-2 me-4"type="text" name="shdk_2">
                    </div>
                    <div class="row mt-2  justify-content-center ">
                        <input class="col-md-1 me-4" type="number" name="no_3">
                        <input class="col-md-4 me-4"type="number" name="kk_3">
                        <input class="col-md-4 me-4"type="text" name="nama_3">
                        <input class="col-md-2 me-4"type="text" name="shdk_3">
                    </div>
                    <div class="row mt-2  justify-content-center ">
                        <input class="col-md-1 me-4" type="number" name="no_4">
                        <input class="col-md-4 me-4"type="number" name="kk_4">
                        <input class="col-md-4 me-4"type="text" name="nama_4">
                        <input class="col-md-2 me-4"type="text" name="shdk_4">
                    </div>
                    <div class="row mt-2  justify-content-center ">
                        <input class="col-md-1 me-4" type="number" name="no_5">
                        <input class="col-md-4 me-4"type="number" name="kk_5">
                        <input class="col-md-4 me-4"type="text" name="nama_5">
                        <input class="col-md-2 me-4"type="text" name="shdk_5">
                    </div>
                    <div class="row mt-2  justify-content-center ">
                        <input class="col-md-1 me-4" type="number" name="no_6">
                        <input class="col-md-4 me-4"type="number" name="kk_6">
                        <input class="col-md-4 me-4"type="text" name="nama_6">
                        <input class="col-md-2 me-4"type="text" name="shdk_6">
                    </div>
                    <div class="row mt-2  justify-content-center ">
                        <input class="col-md-1 me-4" type="number" name="no_7">
                        <input class="col-md-4 me-4"type="number" name="kk_7">
                        <input class="col-md-4 me-4"type="text" name="nama_7">
                        <input class="col-md-2 me-4"type="text" name="shdk_7">
                    </div>
                    <div class="row mt-2  justify-content-center ">
                        <input class="col-md-1 me-4" type="number" name="no_8">
                        <input class="col-md-4 me-4"type="number" name="kk_8">
                        <input class="col-md-4 me-4"type="text" name="nama_8">
                        <input class="col-md-2 me-4"type="text" name="shdk_8">
                    </div>
                    <div class="row mt-2  justify-content-center ">
                        <input class="col-md-1 me-4" type="number" name="no_9">
                        <input class="col-md-4 me-4"type="number" name="kk_9">
                        <input class="col-md-4 me-4"type="text" name="nama_9">
                        <input class="col-md-2 me-4"type="text" name="shdk_9">
                    </div>
                    <button id="submitBtn" type="submit" class="btn btn-secondary mt-4 btn-submit"
                        disabled>Submit</button>
                </form>
            </div>
        </div>
    </div>

    @include('app.footer')
@endsection
