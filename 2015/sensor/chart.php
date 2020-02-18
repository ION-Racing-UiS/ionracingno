<script src="//www.chartjs.org/assets/Chart.min.js"></script>
<canvas id="updating-chart"></canvas>

<script>

  var canvas = document.getElementById('updating-chart'),
        ctx = canvas.getContext('2d'),
        startingData = {
          labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10],
          datasets: [
              {
                fillColor: "rgba(0,0,0,0)",
                strokeColor: "rgba(0,0,220,0.5)",
                pointColor: "rgba(0,0,220,0.5)",
                pointStrokeColor: "#fff",
                data: sArr
              },
              {
                fillColor: "rgba(0,0,0,0)",
                strokeColor: "rgba(0,220,0,0.5)",
                pointColor: "rgba(0,220,0,0.5)",
                pointStrokeColor: "#fff",
                data: socArr
              },
              {
                fillColor: "rgba(0,0,0,0)",
                strokeColor: "rgba(220,0,0,0.5)",
                pointColor: "rgba(220,0,0,0.5)",
                pointStrokeColor: "#fff",
                data: cmArr
              },
              {
                fillColor: "rgba(0,0,0,0)",
                strokeColor: "rgba(220,0,220,0.5)",
                pointColor: "rgba(220,0,220,0.5)",
                pointStrokeColor: "#fff",
                data: vmArr
              },
              {
                fillColor: "rgba(0,0,0,0)",
                strokeColor: "rgba(0,220,220,0.5)",
                pointColor: "rgba(0,220,220,0.5)",
                pointStrokeColor: "#fff",
                data: vm2Arr
              }
          ]
        },
        latestLabel = startingData.labels[9];

  var myLiveChart = new Chart(ctx).Line(startingData, { animation: false,  scaleGridLineColor : "rgba(0,0,0,0.1)"});

  setInterval(function () {
    myLiveChart.addData([s, soc, cm, vm, vm2], ++latestLabel);
    myLiveChart.removeData();
  }, reloadDataMs);
</script>