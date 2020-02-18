<!doctype html>
<html>
<head>
  <title>Sensor | ION Racing</title>
  <link rel="icon" type="image/png" href="../images/favicon.png">

  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,600,400' rel='stylesheet' type='text/css'>
  <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
  <script src="../Cycle2/jquery.cycle2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
  <link rel="stylesheet" href="sensorstyle.css">
  <script data-pace-options='{ "restartOnRequestAfter": false }' src='../layout/scripts/pace.min.js'></script>
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="SlidingMarker/jquery.easing.1.3.js"></script>
  <script src="SlidingMarker/markerAnimate.js"></script>
  <script src="SlidingMarker/SlidingMarker.min.js"></script>

  <script>
    
    var decify = function (shit) {
      shit = shit.replace('N', '').replace('E', '').replace('S', '-').replace('W', '-');
      console.log(shit);
      var thisShit = shit.split(' ');
      if (thisShit.length < 2) {
        var goodShit = parseFloat(thisShit[0]);
        return goodShit;
      }
      console.log(thisShit);
      if (parseFloat(thisShit[0]) < 0) {
        var goodShit = parseFloat(thisShit[0]) - (parseFloat(thisShit[1]) / 60);
      } else {
        var goodShit = parseFloat(thisShit[0]) + (parseFloat(thisShit[1]) / 60);
      }

      return goodShit;
    };

  </script>

</head>

<body>
  <?php
    $page = "sensor";
    include("../layout/header.php");
  ?>

  <script>
    var reloadDataMs = 1000;
  </script>
  
  <div id="sensorDataLive" style="height: 0; margin: 0; padding: 0;">
    <?php
      include("getlivedata.php")
    ?>
  </div>

  <div class="container">
    <div id="sensorData" style="height: 0; margin: 0; padding: 0;">
      <?php
        include("getdata.php")
      ?>
    </div>
  </div>

  <div class="container map-live">
    <div id="map-canvas" class="jumbotron">
    </div>
  </div>

  <div id="chart">
    <div class="container">
      <?php
        include("chart.php")
      ?>
    </div>
  </div>

  <div id="gaugeFill"></div>
  <div id="gauges">
    <?php
      include("gauges.php");
    ?>
  </div>

  <script  type="text/javascript" src="sensorapp.js"></script>
</body>
</html>