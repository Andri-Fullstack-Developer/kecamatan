<style>
    .left {
        float: right;
        text-align: left;

    }

    .data_kota {
        margin-top: 3rem;
    }

    /* .conten_cover .data_nama {
                    border: 1px solid black;
                } */
</style>
<div class="container">
    <div class="conten_cover">
        @foreach ($ektp as $e)
            <div class="heading">
                <h5 class="text-center">FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP) WARGA NEGARA INDONESIA</h5>
            </div>
            <div class="heading-ektp-kode p-2">
                <h6><span class="left">{{ $e->kode_pos }}</span></h6>
            </div>
            <div class="heading_ektp_tgl">
                <h6><span class="left">{{ $e->tanggal_pendaftaran }}</span></h6>
                {{-- @if (isset($e->tanggal_pendaftaran))
                    <td>{{ \Carbon\Carbon::parse($e->tanggal_pendaftaran)->format('d F Y') }}</td>
                @else
                    <td>Tanggal tidak tersedia</td>
                @endif --}}
                </span></h6>
            </div>
            <div class="data_kota">
                <h5>PEMERINTAH PROPINSI<span class="left">{{ $e->provinsi }}</span></h5>
                <h5>PEMERINTAH KABUPATEN<span class="left">{{ $e->kabupaten }}</span></h5>
                <h5>Kecamatan<span class="left">{{ $e->kecamatan }}</span></h5>
                <h5>Kelurahan/Desa<span class="left">{{ $e->kelurahan }}</span></h5>
            </div>
            <div class="data_nama mt-4">
                <h5>PERMOHONAN KTP<span class="left">{{ $e->status_ktp }}</span></h5>
            </div>
            <div class="data_nama_alias mt-5">
                <h5>Nama Lengkap <span class="left">{{ $e->nama }}</span></h5>
                <h5>Tempat Tanggal Lahir <span class="left">Tuban 12 januari 2001</span></h5>
                <h5>NIK<span class="left">{{ $e->nik }}</span></h5>
                <h5>Jenis Kelamin<span class="left">{{ $e->jenis_kelamin }}</span></h5>
                <h5>Alamat<span class="left">{{ $e->alamat }}, Rt.{{ $e->rt }},
                        Rw.{{ $e->rw }}</span></h5>
                <h5>Pekerjaan<span class="left">{{ $e->pekerjaan }}</span></h5>
                <h5>Status<span class="left">{{ $e->status_perkawinan }}</span></h5>
            </div>
            <div class="cover_ektp_contack mt-5">
                <h5>Nomer Hp <span class="left">{{ $e->no_hp }}</span></h5>
                <h5>Email <span class="left">{{ $e->email }}</span></h5>
            </div>
        @endforeach
    </div>
</div>
