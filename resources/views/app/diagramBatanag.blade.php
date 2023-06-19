<style>
    .cover-batang {
        margin-top: 2rem;
        background: #D1EEFC;
        box-shadow: 0px 8px 10px -5px rgba(0, 0, 0, 0.5);
        border-radius: .3rem;
    }

    .line::after {
        content: "";
        margin-top: .5rem;
        display: block;
        border-bottom: 5px solid #002060;
        border-radius: .3rem;
    }

    #chartdivBa {
        width: 100%;
        height: 500px;

    }

    @media screen and (max-width: 600px) {

        #chartdivBa {
            width: 100%;
            height: 300px;

        }
    }
</style>

<div class="container cover-batang">
    <h2 class="text-center p-3 line">Laporan Bulan</h2>
    <div id="chartdivBa">
    </div>
</div>

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdivBa");


        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);


        // Create chart
        // https://www.amcharts.com/docs/v5/charts/xy-chart/
        var chart = root.container.children.push(am5xy.XYChart.new(root, {
            panX: false,
            panY: false,
            wheelX: "panX",
            wheelY: "zoomX",
            layout: root.verticalLayout
        }));


        // Add legend
        // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
        var legend = chart.children.push(
            am5.Legend.new(root, {
                centerX: am5.p50,
                x: am5.p50
            })
        );

        var data = [{
            "year": "01",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},

        }, {
            "year": "02",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},

        }, {
            "year": "03",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},

        }, {
            "year": "04",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }, {
            "year": "05",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }, {
            "year": "06",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }, {
            "year": "07",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }, {
            "year": "08",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }, {
            "year": "09",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }, {
            "year": "10",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }, {
            "year": "11",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }, {
            "year": "12	",
            "Kinerja": {{ $jumlahJiwa }},
            "Dana": {{ $jumlahKK }},
            "Desa":  {{ $jumlahJiwa }},
        }]


        // Create axes
        // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
        var xRenderer = am5xy.AxisRendererX.new(root, {
            cellStartLocation: 0.1,
            cellEndLocation: 0.9
        })

        var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
            categoryField: "year",
            renderer: xRenderer,
            tooltip: am5.Tooltip.new(root, {})
        }));

        xRenderer.grid.template.setAll({
            location: 1
        })

        xAxis.data.setAll(data);

        var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
            renderer: am5xy.AxisRendererY.new(root, {
                strokeOpacity: 0.1
            })
        }));


        // Add series
        // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
        function makeSeries(name, fieldName) {
            var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                name: name,
                xAxis: xAxis,
                yAxis: yAxis,
                valueYField: fieldName,
                categoryXField: "year"
            }));

            series.columns.template.setAll({
                tooltipText: "{name}, {categoryX}:{valueY}",
                width: am5.percent(90),
                tooltipY: 0,
                strokeOpacity: 0
            });

            series.data.setAll(data);

            // Make stuff animate on load
            // https://www.amcharts.com/docs/v5/concepts/animations/
            series.appear();

            series.bullets.push(function() {
                return am5.Bullet.new(root, {
                    locationY: 0,
                    sprite: am5.Label.new(root, {
                        text: "{valueY}",
                        fill: root.interfaceColors.get("alternativeText"),
                        centerY: 0,
                        centerX: am5.p50,
                        populateText: true
                    })
                });
            });

            legend.data.push(series);
        }

        makeSeries("Kinerja", "Kinerja");
        makeSeries("Jumplah Pengeluaran Dana", "Dana");
        makeSeries("Jumplah Penduduk Desa", "Desa");
        // makeSeries("Latin America", "lamerica");
        // makeSeries("Middle East", "meast");
        // makeSeries("Africa", "africa");


        // Make stuff animate on load
        // https://www.amcharts.com/docs/v5/concepts/animations/
        chart.appear(1000, 100);

    }); // end am5.ready()
</script>
