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
            <h1 class="h2">Pelayanan AKTE</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Pelayanan AKTE</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        .form-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .col-mb-6 {
            flex-basis: calc(50% - 10px);

            margin-bottom: 20px;
        }

        .cover_label {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
        }

        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }

        input,
        select {
            width: 50%;
            padding: .2rem;
            margin-bottom: .3rem;
            justify-content: right;
            border: 1px solid black;
            border-radius: .2rem;
        }

        .data_saksi {
            margin-top: 1rem;
            margin-bottom: .8rem;
            justify-content: center;
            text-align: center;
            font-weight: 700;
        }

        .btn-submit {
            width: 100%;
            text-align: center;
            font-weight: 700;
        }
    </style>

    <div class="cover-akte">
        <div class="container">
            <div class="cover-bg-pendaftran text-center mt-3">
                <div class="cover-text-pendaftran">
                    <h4>Selamat Datang di Kecamatan Tuban</h4>
                    <p>Kami dari tim kecamatan menerima pendatran secara onlain
                        <br>
                        Pendatran dan memperbarui AKTE
                    </p>
                </div>
            </div>
            <div class="row">
                <form id="form-akte" action="pendaftran_akte" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-mb-6" id="form-akte">
                            <div class="data_saksi">Data Pelapor</div>
                            <label for="" class="cover_label">
                                Nama Pelapor
                                <input type="text" name="nama_pelapor" placeholder="Masukan Nama Pelapor">
                            </label>
                            <label for="" class="cover_label">
                                NIK
                                <input type="number" name="nik_pelapor" placeholder="Masukan Nik Pelapor">
                            </label>
                            <label for="" class="cover_label">
                                Nomer KK
                                <input type="number" name="kk_pelapor" placeholder="Masukan KK Pelapor">
                            </label>
                            <label for="" class="cover_label">
                                Kewarganegaraan
                                <input type="text" name="kewarga_pelapor" placeholder="Masukan Kewarganegaraan">
                            </label>
                            <label for="" class="cover_label">
                                Nomer Hp
                                <input type="number" name="noHp_pelapor" placeholder="Masukan Nomer HP">
                            </label>
                            <div class="data_saksi">Saksi I</div>
                            <label for="" class="cover_label">
                                Nama Saksi
                                <input type="text" name="nama_sak_I" placeholder="Masukan Nama Saksi I">
                            </label>
                            <label for="" class="cover_label">
                                NIK Saksi
                                <input type="number" name="nik_sak_I" placeholder="Masukan Nik Saksi I">
                            </label>
                            <label for="" class="cover_label">
                                KK Saksi
                                <input type="number" name="kk_sak_I" placeholder="Masukan KK Saksi I">
                            </label>
                            <label for="" class="cover_label">
                                Kewarganegaraan
                                <input type="text" name="kewarga_sak_I" placeholder="Masukan Saksi Kewarganegaraan">
                            </label>
                            <div class="data_saksi">Saksi II</div>
                            <label for="" class="cover_label">
                                Nama Saksi
                                <input type="text" name="nama_sak_II" placeholder="Masukan Nama Saksi II">
                            </label>
                            <label for="" class="cover_label">
                                NIK Saksi
                                <input type="number" name="nik_sak_II" placeholder="Masukan Nik Saksi II">
                            </label>
                            <label for="" class="cover_label">
                                KK Saksi
                                <input type="number" name="kk_sak_II" placeholder="Masukan KK Saksi II">
                            </label>
                            <label for="" class="cover_label">
                                Kewarganegaraan
                                <input type="text" name="kewarga_sak_II" placeholder="Masukan Saksi Kewarganegaraan">
                            </label>
                            <div class="data_saksi">Data Subjek AKTA</div>
                            <label for="" class="cover_label">
                                Nama
                                <input type="text" name="nama_subjek" placeholder="Masukan Nama Subjek">
                            </label>
                            <label for="" class="cover_label">
                                NIK
                                <input type="number" name="nik_subjek" placeholder="Masukan Nik Sunjek">
                            </label>
                            <label for="" class="cover_label">
                                Nomer Dokumen Perjalanan
                                <input type="number" name="no_doc_subjek"
                                    placeholder="Masukan Nomer Dokumen Penjalanna">
                            </label>
                            <label for="" class="cover_label">
                                Nomer KK
                                <input type="number" name="kk_subjek" placeholder="Masukan Nomer">
                            </label>
                            <label for="" class="cover_label">
                                Kewarganegaraan
                                <input type="text" name="kewarga_subjek" placeholder="Masukan Kewarganegaraan">
                            </label>
                        </div>
                        <div class="col-mb-6" id="form-akte">
                            <div class="data_saksi">Data Orang Tua</div>
                            <label for="" class="cover_label">
                                Nama Ayah
                                <input type="text" name="nama_ayah" placeholder="Masukan Nama Ayah">
                            </label>
                            <label for="" class="cover_label">
                                NIK Ayah
                                <input type="number" name="nik_ayah" placeholder="Msukan NIK Ayah">
                            </label>
                            <label for="" class="cover_label">
                                Tempat Lahir Ayah
                                <input type="text" name="tempatLahir_ayah" placeholder="Masukan Tempah lahir">
                            </label>
                            <label for="" class="cover_label">
                                Tanggal Lahir Ayah
                                <input type="date" name="tglLahir_ayah" placeholder="Masukan Tempah lahir">
                            </label>
                            <label for="" class="cover_label">
                                Kewarganegaraan
                                <input type="text" name="kewarga_ayah" placeholder="Masukan Kewarganegaraan Ayah">
                            </label>
                            <br>
                            <label for="" class="cover_label">
                                Nama Ibu
                                <input type="text" name="nama_ibu" placeholder="Masukan Nama Ibu">
                            </label>
                            <label for="" class="cover_label">
                                NIK Ibu
                                <input type="number" name="nik_ibu" placeholder="Msukan NIK Ibu">
                            </label>
                            <label for="" class="cover_label">
                                Tempat Lahir Ibu
                                <input type="text" name="tmptlahir_ibuk" placeholder="Masukan Tempah lahir">
                            </label>
                            <label for="" class="cover_label">
                                Tanggal Lahir Ibu
                                <input type="date" name="tgllahir_ibuk" placeholder="Masukan Tempah lahir">
                            </label>
                            <label for="" class="cover_label">
                                Kewarganegaraan
                                <input type="text" name="kewarga_ibuk" placeholder="Masukan Kewarganegaraan Ayah">
                            </label>

                            <div class="data_saksi">Data Anak</div>
                            <label for="" class="cover_label">
                                Nama Anak
                                <input type="text" name="nama_anak" placeholder="Masukan Nama Anak">
                            </label>
                            <label for="" class="cover_label">
                                Jenis Kelamin
                                <select name="jk_anak" id="">
                                    <option selected>----------</option>
                                    <option value="Laki-laki">L</option>
                                    <option value="Perempuan">P</option>
                                </select>
                            </label>
                            <label for="" class="cover_label">
                                Tempat dilahirkan
                                <select name="tmptLahir_anak" id="">
                                    <option selected>----------</option>
                                    <option value="RS/RB">RS/RB</option>
                                    <option value="Pukesmas">Pukesmas</option>
                                    <option value="Polides">Polides</option>
                                    <option value="Rumah">Rumah</option>
                                </select>
                            </label>
                            <label for="" class="cover_label">
                                Hari
                                <select name="hari_anak" id="">
                                    <option value="" selected>-------</option>
                                    <option value="senin" selected>Senin</option>
                                    <option value="selasa" selected>Selasa</option>
                                    <option value="rabu" selected>Rabu</option>
                                    <option value="kamis" selected>Kamis</option>
                                    <option value="ju'mat" selected>Jumat</option>
                                    <option value="sabtu" selected>Sabtu</option>
                                    <option value="minggu" selected>Minggu</option>
                                </select>
                            </label>
                            <label for="" class="cover_label">
                                Tanggal Lahir
                                <input type="date" name="tgllahir_anak">
                            </label>
                            <label for="" class="cover_label">
                                Kelahiran Ke
                                <select name="anakKe_anak" id="">
                                    <option selected>----------</option>
                                    <option value="Tunggal">Tunggal</option>
                                    <option value="Kembar 2">Kembar 2</option>
                                    <option value="Kembar 3">Kembar 3</option>
                                </select>
                            </label>
                            <label for="" class="cover_label">
                                Penolong Kelahiran
                                <select name="penolong_anak" id="">
                                    <option selected>----------</option>
                                    <option value="Dokter">Dokter</option>
                                    <option value="Bidan/Perawat">Bidan/Perawat</option>
                                    <option value="Dukun">Dukun</option>
                                </select>
                            </label>
                            <label for="" class="cover_label">
                                Berat Bayi
                                <input type="number" name="berat_anak" placeholder="Masukan Berat bayi">
                            </label>
                            <label for="" class="cover_label">
                                Panjang Bayi
                                <input type="number" name="panjang_anak" placeholder="Masukan panjang bayi">
                            </label>
                        </div>
                    </div>
                    <button id="btn-akte" type="submit" class="btn btn-secondary mt-4 btn-submit"
                        disabled>Submit</button>
                </form>
            </div>
        </div>
    </div>
    @include('app.footer')

    <!-- Modal -->
    <div id="modal-akte" class="modal fade" tabindex="-1" role="dialog" data-bs-backdrop="static"
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
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Function to check if all input fields are filled
            function validateForm() {
                var isValid = true;
                $('#form-akte input').each(function() {
                    if ($(this).val() === '') {
                        isValid = false;
                        return false; // Exit the loop early if any input is empty
                    }
                });
                return isValid;
            }

            // Check form validation on input change
            $('#form-akte input').on('input', function() {
                if (validateForm()) {
                    $('#btn-akte').removeClass('btn-secondary').addClass('btn-primary').prop('disabled',
                        false);
                } else {
                    $('#btn-akte').removeClass('btn-primary').addClass('btn-secondary').prop('disabled',
                        true);
                }
            });

            // Show modal after form submission
            $('#form-akte').submit(function(e) {
                e.preventDefault(); // Prevent the default form submission

                if (validateForm()) {
                    // Kirim permintaan AJAX ke server
                    $.ajax({
                        url: $(this).attr('action'), // Ambil URL dari atribut 'action' form
                        method: $(this).attr('method'), // Ambil metode dari atribut 'method' form
                        data: $(this).serialize(), // Ambil data form yang telah di-serialize
                        success: function(response) {
                            // Tampilkan modal setelah permintaan berhasil
                            $('#modal-akte').modal('show');
                        },
                        error: function(xhr, status, error) {
                            // Tangani kesalahan jika permintaan gagal
                            console.log(xhr.responseText);
                        }
                    });
                }
            });
        });
    </script>
@endsection
