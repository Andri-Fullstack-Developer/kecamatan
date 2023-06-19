<style>
    .cp-contak {
        background: #D1EEFC;
        margin-top: 2rem;
        box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.5);
        border-radius: .3rem;
    }

    .cp-media {
        display: flex;
        flex-direction: column;
        fon
    }

    .cp-media a {
        display: flex;
        align-items: center;
        color: #002060;
        padding: .8rem;
        font-size: 1rem;
    }

    .cp-media span {
        margin-left: 1rem;
    }

    .cp-media a:last-child {
        margin-bottom: 0;
    }
    .linekontak::after {
        content: "";
        width: 50%;
        margin-top: .5rem;
        display: block;
        border-bottom: 1px solid #002060;
        border-radius: .3rem;
    }

    iframe {
        padding: 1rem;
    }

    @media screen and (max-width: 600px) {

        .cp-media a {
            font-size: 1rem;
            margin-left: 2rem;
        }
        .text-kontak{
            justify-content: center;
            text-align: center;
            padding: .8rem;
        }

        .contact {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .cover-media {
            padding: .1rem;
            width: 100%;
        }
        .linekontak::after{
            width: 65% ;
            margin-left: 2.8rem;
        }
    }
  
</style>

<div class="cp-contak">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-kontak" data-aos="fade-down" data-aos-delay="100" data-aos-offset="300" data-aos-duration="2000">Info Kontak</h2>
                <div class="cp-media">
                    <a href="" data-aos="fade-right" data-aos-delay="50"  data-aos-offset="300" data-aos-duration="2000">
                        <i class="fa fa-building-columns"></i>
                        <span>Jl. Kartini No.2 Tuban</span>
                    </a>
                    <div class="linekontak"></div>
                    <a href="" data-aos="fade-right" data-aos-delay="200"  data-aos-offset="300" data-aos-duration="2000">
                        <i class="fa-regular fa-envelope"></i>
                        <span>inotu@tubankec.go.id</span>
                    </a>
                    <div class="linekontak"></div>
                    <a href="" data-aos="fade-right" data-aos-delay="250"  data-aos-offset="300" data-aos-duration="2000">
                        <i class="fa-brands fa-youtube"></i>
                        <span>Tuban Makmur</span>
                    </a>
                    <div class="linekontak"></div>
                    <a href="" data-aos="fade-right" data-aos-delay="300"  data-aos-offset="300" data-aos-duration="2000">
                        <i class="fa fa-earth-americas"></i>
                        <span>http://tubankec.go.id/</span>
                    </a>
                    <div class="linekontak"></div>
                
                </div>
            </div>
            <div class="col-md-6 text-center">
                <h2 class="mt-5"  data-aos="fade-down" data-aos-delay="150" data-aos-offset="300" data-aos-duration="2000">Lokasi Peta</h2>
                <div class="cp-mps" data-aos="fade-left" data-aos-delay="500" data-aos-offset="300" data-aos-duration="2000">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29120.91103674397!2d112.02134183909907!3d-6.892576224838664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e77a2ae672ed041%3A0x9e63fa6f5cfc08d1!2sKec.%20Tuban%2C%20Kabupaten%20Tuban%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1683899210511!5m2!1sid!2sid"
                        width="90%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>