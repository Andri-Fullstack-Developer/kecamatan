<style>
    .footer {
        background: #002060;
        color: #d1eefc;
        margin-top: 2rem;
        box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.5);
        border-radius: .3rem;
    }

    .my-footer {
        opacity: 0;
    }
 

    .footer-list {
        padding: 3rem;
    }

    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(100%);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .my-footer {
        animation: fadeInUp 2s ease-out forwards;
    }

    /* .my-h5,
    .my-h5f,
    .my-p {
        opacity: 0;
    }

    .my-h5.active,
    .my-h5f.active,
    .my-p.active {
        opacity: 3;
    } */



    @media screen and (max-width: 600px) {

        .footer-list h5,
        p {
            font-size: .8rem;
        }
    }
</style>
<div class="footer">
    <div class="container">
        <div class="footer-list text-center ">
            <h5 class="my-h5"  data-aos="fade-down" data-aos-delay="600" data-aos-duration="2000">PORTAL RESMI</h5>
            <h5 class="my-h5f" data-aos="fade-down" data-aos-delay="300" data-aos-duration="2000">Kec. Tuban, Kab. Tuban, Jawa Timur 35015</h5>
            <p class="my-p" data-aos="fade-down" data-aos-delay="100" data-aos-duration="2000" data-aos-offset="-100">&copy; 2022 Kota resmi </p>
        </div>
    </div>
</div>



