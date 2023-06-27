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
            <h1 class="h2">Pelayanan EKTP</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Pelayanan EKTP</a>
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
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, 0) 0%, rgba(213, 234, 245, 1) 100%);
            border-radius: .3rem;
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
                    <p>Kami dari tim kecamatan menerima pendatran secara onlain
                        <br>
                        Pendatran dan memperbarui EKTP
                    </p>
                </div>
            </div>
            @include('sweetalert::alert')
            <div class="row mt-5 ">
                <form action="/pendaftaran_ektp" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-mb-6">
                            <div class="form-ktp">
                                <label for="provinsi" class="cover_pdf-ktp">
                                    Provinsi
                                    <input type="text" name="provinsi" placeholder="Masukan provinsi" required>
                                </label>
                                <label for="kebupatan" class="cover_pdf-ktp">
                                    Kabupaten
                                    <input type="text" name="kebupatan" placeholder="Masukan Kabupaten" required>
                                </label>
                                <label for="kecamatan" class="cover_pdf-ktp">
                                    Kecamatan
                                    <input type="text" name="kecamatan" id="" placeholder="Masukan Kecamatan"
                                        required>
                                </label>
                                <label for="kelurahan" class="cover_pdf-ktp">
                                    Kelurahan
                                    <input type="text" name="kelurahan" id="" placeholder="Masukan Kelurahan"
                                        required>
                                </label>
                                <label for="status_ktp" class="cover_pdf-ktp">
                                    Permohonan ktp
                                    <select name="status_ktp" id="">
                                        <option selected>----------</option>
                                        <option value="Baru">Baru</option>
                                        <option value="Baru/Ulang">Baru/Ulang</option>
                                    </select>
                                </label>
                                <label for="nama" class="cover_pdf-ktp">
                                    Nama Lengkap
                                    <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required>
                                </label>
                                <label for=""class="cover_pdf-ktp">
                                    Tempat Lahir
                                    <input type="text" name="tmpt_lahir" placeholder="Masukan Tempat Lahir" required>
                                </label>
                                <label for=""class="cover_pdf-ktp">
                                    Tanggal Lahir
                                    <input type="date" name="tgl_lahir" placeholder="Masukan Tempat Lahir" required>
                                </label>
                                <label for="" class="cover_pdf-ktp">
                                    Jenis Kelamin
                                    <select name="jk" id="">
                                        <option selected>----------</option>
                                        <option value="Laki-laki">L</option>
                                        <option value="Perempuan">P</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <div class="col-mb-6">
                            <label for="" class="cover_pdf-ktp">
                                Status_perkawinan
                                <select name="status_perkawinan" id="">
                                    <option selected>----------</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </label>
                            <label for=""class="cover_pdf-ktp">
                                NIK
                                <input type="number" name="nik" placeholder="Masukan Nomer NIK" required>
                            </label>
                            <label for="pekerjaan"class="cover_pdf-ktp">
                                Pekerjaan
                                <input type="text" name="pekerjaan" placeholder="Masukan Pekerjaan" required>
                            </label>
                            <label for=""class="cover_pdf-ktp">
                                Alamat
                                <input type="text" name="alamat" placeholder="Masukan Alamat" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                RT
                                <input type="number" name="rt" placeholder="Maukan nomer RT"
                                    oninput="this.value = this.value.slice(0, 2)" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                RW
                                <input type="number" name="rw" placeholder="Maukan nomer RW"
                                    oninput="this.value = this.value.slice(0, 2)" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                Kode Pos
                                <input type="number" name="kode_pos" placeholder="Maukan nomer RW"
                                    oninput="this.value = this.value.slice(0, 6)" required>
                            </label>

                            <label for="" class="cover_pdf-ktp">
                                Nomer Hp
                                <input type="number" name="no_hp"
                                    oninput="this.value
                            =this.value.slice(0, 13)"
                                    placeholder="Masukan Nomer Hp" required>
                            </label>
                            <label for="" class="cover_pdf-ktp">
                                Email
                                <input type="email" name="email" placeholder="Masukan Email" required>
                            </label>
                        </div>
                    </div>
                    <button id="submitBtn" type="submit" class="btn btn-secondary mt-4 btn-submit"
                        disabled>Submit</button>
                </form>
            </div>

        </div>
    </div>
    </div>

    <!-- Modal -->
    {{-- <div id="thankYouModal" class="modal fade" tabindex="-1" role="dialog" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h5 class="modal-title">Terima kasih telah mendaftar!</h5>
                    <p>Anda harus datang ke kecamatan dalam 3 hari setelah pendaftran untuk melengkapi pendaftaran yaitu
                        Foto, cap jari dan tandatangan.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div> --}}
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#submitBtn').click(function(e) {
                e.preventDefault(); // Prevent the default form submission
                $('#thankYouModal').modal('show');
            });
        });
    </script> --}}
    {{-- <script>
        $(document).ready(function() {
            // Function to check if all input fields are filled
            function validateForm() {
                var isValid = true;
                $('#form-ktp input').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        return false; // Exit the loop early if any input is empty
                    }
                });
                return isValid;
            }

            // Check form validation on input change
            $('#form-ktp input').on('input', function() {
                if (validateForm()) {
                    $('#submitBtn').removeClass('btn-secondary').addClass('btn-primary').prop('disabled',
                        false);
                } else {
                    $('#submitBtn').removeClass('btn-primary').addClass('btn-secondary').prop('disabled',
                        true);
                }
            });

            // Show modal after form submission
            $('#myForm').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission

                if (validateForm()) {
                    $('#thankYouModal').modal('show');
                }
            });
        });
    </script> --}}
    <script>
        // Mendapatkan semua input
        const inputs = document.querySelectorAll('input');

        // Memeriksa apakah semua input memiliki nilai
        function checkInputs() {
            let allFilled = true;
            inputs.forEach(input => {
                if (input.value === '') {
                    allFilled = false;
                }
            });

            // Mengaktifkan atau menonaktifkan tombol Submit
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = !allFilled;
        }

        // Menjalankan fungsi checkInputs saat ada perubahan di input
        inputs.forEach(input => {
            input.addEventListener('input', checkInputs);
        });
    </script>
    @include('app.footer')
@endsection
