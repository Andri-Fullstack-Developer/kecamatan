<style>
    .bg-cover_datapengaduan {
        width: 100%;
        margin-top: 2rem;
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        padding: 1rem;
        background: rgb(255, 255, 255);
        background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
    }

    .cover-data_heading h3 {
        font-weight: 800;
        font-size: 1.5rem;
    }

    .cover-data_heading h6 {
        font-weight: 700;
        font-size: 1.1rem;
    }

    .line-formilir {
        border-bottom: 4px solid black;
        padding: .1rem;
        display: inline-block;
    }

    .isi-nama {
        font-size: 1.2rem;
    }

    .isi-data {
        border-bottom: 3px dotted black;
        font-size: 1.5rem;
    }

    .header {
        text-align: center;
        margin-bottom: 20px;
    }

    .tanggal {
        text-align: right;
    }

    .logo {
        width: 100px;
        height: auto;
    }

    .title {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .subtitle {
        font-size: 18px;
        margin-bottom: 10px;
    }

    .content {
        margin-bottom: 20px;
    }

    .ttd {
        text-align: right;
    }

    .footer {
        font-style: italic;
    }

    .header img {
        width: 8%;
    }
    p{
        
    }
    .paragraph {
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .data_foto img{
        width: 50%;
        margin-top: 2rem;
    }
</style>

<div class="container">
    @foreach ($pengadu as $pe)
        <div class="header">
            <img src="{{ asset('img/logo-tuban.png') }}" alt="Logo" class="logo" />
            <h1 class="title">SURAT LAPORAN</h1>
            <p class="subtitle">Kecamatan Tuban</p>
        </div>

        <div class="content">
            <p class="tanggal paragraph">Tuban, {{ $pe->tanggal_huruf }}</p>
            <p class="paragraph">Kepada Yth.,</p>
            <p class="paragraph">kepala pemerintahan kecamatan tuban</p>
            <p class="paragraph">Di -</p>
            <p class="paragraph">kecamatan tuban</p>
            <br />
            <p class="paragraph">Dengan hormat,</p>
            <p class="paragraph">yang bertandatangan di bawah ini:</p>
            <br />
            <p class="paragraph">Nama: {{ $pe->namape }} </p>
            <p class="paragraph">Umur: {{ $pe->usia }} tahun</p>
            <p class="paragraph">Jenis Kelamin: {{ $pe->jk }} </p>
            <p class="paragraph">Alamat: {{ $pe->alamat }} </p>
            <p class="paragraph">Email: {{ $pe->email }}</p>
            <br />
            <p class="paragraph">
                {{ $pe->text_laporan }}
            </p>
        </div>

        <div class="data_foto mt-2">
            <img src="{{ asset('Image/' . $pe->foto_ktp) }}" alt="">
        </div>
        <div class="data_foto mt-2">
            <img src="{{ asset('Image/' . $pe->foto_selfi) }}" alt="">
        </div>
        <div class="data_foto mt-2">
            <img src="{{ asset('Image/' . $pe->foto_pengadu) }}" alt="">
        </div>
    @endforeach
</div>
