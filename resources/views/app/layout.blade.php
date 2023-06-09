<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Kecamatan Tuban | Prontal resmi</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo_con.png') }}">
    <link rel="stylesheet" href="{{ asset('NavTop/navTop.css') }}">
    <link rel="stylesheet" href="{{ asset('Gallery/style.css') }}">
    <style>
        ul .nav-link:hover {
            background: RGB(173, 191, 195, 0.1);
            background-image: url('{{ asset('img/bg.png') }}');
        }
    </style>

</head>

<body>

    @section('nav')
        @include('app.nav')
    @show

    @yield('conten')

    <!-- js digrama --->


    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>



    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/e88adbb80f.js" crossorigin="anonymous"></script>


    <script src="{{ asset('Gallery/light.js') }}"></script>

    <script src="{{ asset('NavTop/mySwiperHome.js') }}"></script>
    <script src="{{ asset('NavTop/mySwiper.js') }}"></script>
    <script src="{{ asset('NavTop/play.js') }}"></script>
    <script src="{{ asset('NavTop/logo-scropl.js') }}"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawVisualization);

        function drawVisualization() {
            // Some raw data (not necessarily accurate)
            var data = google.visualization.arrayToDataTable([
                ['Month', '', '', ''],
                ['01', 165, 938, 450, ],
                ['02', 135, 1120, 1288, ],
                ['03', 157, 1167, 397, ],
                ['04', 139, 1110, 215, ],
                ['05', 136, 691, 1366, ],
                ['06', 165, 938, 450, ],
                ['07', 135, 1120, 1288, ],
                ['08', 157, 1167, 397, ],
                ['09', 139, 1110, 215, ],
                ['10', 136, 691, 1366, ],
                ['11', 157, 1167, 397, ],
                ['12', 139, 1110, 215, ],
            ]);

            var options = {
                title: 'Laporan Perbulanan',
                vAxis: {
                    title: 'Jumplah'
                },
                hAxis: {
                    title: 'Bulan'
                },
                seriesType: 'bars',
                series: {
                    3: {
                        type: 'line'
                    }
                },
                backgroundColor: 'transparent'
            };

            var chart = new google.visualization.ComboChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Kehadiran', 80],
                ['Sakit', 10],
                ['Izin', 5],

            ]);

            var options = {
                title: 'Daftar Hardir',
                is3D: true,
                backgroundColor: 'transparent',
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</body>

</html>
