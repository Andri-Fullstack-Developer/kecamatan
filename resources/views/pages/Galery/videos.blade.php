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
            <h1 class="h2">Galery Video</h1>
            <ul class="agenda-li">
                <li>
                    <a href="">Beranda</a>
                </li>
                <li>
                    <a href="">Halaman</a>
                </li>
                <li>
                    <a href="">Galery Video</a>
                </li>
            </ul>
        </div>
    </div>

    <style>
        .cover-video {
            margin-top: 2rem;
            padding: .5rem .5rem .5rem 1rem;
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .cover-auto {
            padding: .2rem 0 0 .2rem;
            background: rgb(0, 0, 0);
            border-radius: .2rem
        }

        /* .covergaleri {
                    width: 100%;
                    padding: 1rem;
                    margin-top: 2rem;
                } */

        /* .galeriVideo {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                } */


        .cover-judul_video {
            background: rgb(0, 0, 0);
            border-radius: .2rem;
        }

        .video-jam {
            margin-left: 15rem;
            margin-right:
        }

        .cover-text {
            font-weight: 600;
            font-size: .9rem;
            padding: .5rem .8rem 1rem 1rem;
        }

        div.no-auto {
            padding: 0rem .5rem 1rem .5rem;
            background: rgb(255, 255, 255);
            background: linear-gradient(180deg, rgba(255, 255, 255, .1) 0%, rgba(209, 238, 252, 1) 100%);
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        }

        .cover-non_auto {
            margin-top: 2rem;
            margin-left: -1.49rem;
        }

        h6.jam-dete {
            margin-right: .6rem;
            text-align: right;
            font-size: .8rem;
            color: white;

        }
    </style>


    <div class="container ">
        {{-- <div class="row"> --}}
        <div class="cover-video">
            <div class="row">
                <div class="col-md-8 cover-auto">
                    <video width="738" height="400" class="auto" controls autoplay muted>
                        <source src="{{ asset('videos/video4.mp4') }}" type="video/mp4">
                    </video>
                    <div class="cover-jdljam">
                        <div class="row">
                            <div class="col">
                                <a href="">
                                    <h6 class="ms-2">Kecamatan Tuban dan sekitarnya</h6>
                                </a>
                            </div>
                            <div class="col">
                                <h6 class="jam-dete">2023-06-01 01:06:33</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4  cover-text">
                    <p id="typing-drama"></p>
                </div>
            </div>
        </div>
        <!-- cover non auto --->

        <div class=" no-auto mt-3">
            <div class="row">
                @foreach ($video as $item)
                    <div class="col-md-6">
                        <div class="cover-judul_video mt-3">
                            <video id="myVideo" class="non-auto" width="100%" height="300" controls>
                                <source src="{{ url('videos') . '/' . $item->video }}" type="video/mp4">
                            </video>
                            <div class="cover-jdljam">
                                <div class="row">
                                    <div class="col">
                                        <a href="">
                                            <h6 class="ms-2">{{ $item->judul }}</h6>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <h6 class="jam-dete">{{ $item->dateTim }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="mt-5 container">
                    {{$video->links()}}
                </div>
            </div>
        </div>
    </div>

    @include('app.footer')
@endsection


<script>
    var video = document.getElementById("myVideo");

    video.addEventListener("play", function() {
        video2.pause();
    });

    var video2 = document.createElement("video");
    video2.src = "{{ url('storage/videos') . '/' . $item->video }}";

    video2.addEventListener("play", function() {
        video.pause();
    });
</script>

<script>
    window.onload = function() {
        var textElement = document.getElementById("typing-drama");
        var text =
            "Kepada masyarakat di kecamatan Tuban, mari kita bersatu dan bekerja sama untuk menciptakan sebuah komunitas yang berkembang dan harmonis. Dengan semangat kerja keras, kreativitas, dan inovasi, kita dapat meraih kesuksesan dan memajukan kecamatan ini ke arah yang lebih baik. Mari kita jaga kebersihan lingkungan kita, peduli terhadap kesehatan, dan menjaga kelestarian alam. Melalui kebersamaan dalam keanekaragaman budaya, kita bisa membangun toleransi dan menghormati satu sama lain. Dengan semangat optimisme, kita percaya bahwa masa depan kecamatan Tuban akan cerah, memberikan peluang dan kehidupan yang lebih baik bagi kita semua. Bersama, kita bisa mewujudkan kecamatan Tuban yang mandiri, harmonis, dan sejahtera.";
        var speed = 100; // Kecepatan mengetik (dalam milidetik)

        var index = 0;

        function typeText() {
            if (index < text.length) {
                textElement.innerHTML += text.charAt(index);
                index++;
                setTimeout(typeText, speed);
            }
        }

        typeText();
    };
</script>
