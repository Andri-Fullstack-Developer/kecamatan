<style>
    /* .full-cover-Li{
        margin-top: 2rem;
        background:  RGB(173, 191, 195, 0.5);
    } */
    .cover-lingkaran {
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

    #chartdiv {
        width: 100%;
        height: 500px;
    }
    @media screen and (max-width: 600px) {
      
      #chartdiv {
          width: 100%;
          height: 300px;
       
      }
  }
</style>
<div class="full-cover-Li">
    <div class="container cover-lingkaran">
        <h2 class="text-center p-3 line">Laporan Kehadiran</h2>
        <div id="chartdiv"></div>
    </div>
</div>


<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>



<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv");

        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);

        // Create chart
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
        var chart = root.container.children.push(
            am5percent.PieChart.new(root, {
                endAngle: 270
            })
        );

        // Create series
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
        var series = chart.series.push(
            am5percent.PieSeries.new(root, {
                valueField: "value",
                categoryField: "category",
                endAngle: 270
            })
        );

        series.states.create("hidden", {
            endAngle: -90
        });

        // Set data
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
        series.data.setAll([{
            category: "Kehadiran",
            value: 450.9
        }, {
            category: "Sakit",
            value: 100.9
        }, {
            category: "Izin",
            value: 90.1
        }]);

        series.appear(1000, 100);

    }); // end am5.ready()
</script>
