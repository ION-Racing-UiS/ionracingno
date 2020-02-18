<!doctype html>

<?php
  include("contactform/formhead.php");
?>

<html>

<head>
  <title>Contact us | ION Racing</title>
  <link rel="icon" type="image/png" href="../images/favicon.png">

  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,600,400' rel='stylesheet' type='text/css'>
  <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
  <script src="../scrollReveal.js-master/dist/scrollReveal.min.js"></script>
  <link rel="stylesheet" href="contactstyle.css">

  <script src="https://maps.googleapis.com/maps/api/js"></script>

</head>

<body>

  <?php
    $page = "contact";
    include("../layout/header.php");
  ?>

  <div id="map-canvas" class="jumbotron">
  </div>

  <div class="content">

    <div class="contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-2"></div>

          <div class="col-md-8">
            <h2 style="margin: 10px; text-align: center;" class="hideme da" data-sr="wait 0.2s">Send us a message!</h2>
            <?php
              include("contactform/form.php");
            ?>

          </div>

          <div class="col-md-2"></div>
        </div>

        <hr style="border-color: #bfbfbf; margin: 5px;">

        <div class="row">
          <div class="col-md-3">
            <div class="member">
              <div class="circle-img" style="background-image: url('images/dummy1.jpg')">
                <a href="mailto:e.vassoy@ionracing.no"><div class="img-overlay" style="background-image: url('images/mailicon.png');"></div></a>
              </div>
              <h4><b>Erik Vass&oslash;y Olsen</b></h4>
              <h5>Team Leader & CEO</h5>
              <a style="color: #00b8de;" href="mailto:e.vassoy@ionracing.no"><i class="fa fa-envelope"></i> e.vassoy@ionracing.no</a>
              <p><i class="fa fa-phone"></i> 95 76 40 45</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="member">
              <div class="circle-img" style="background-image: url('images/dummy1.jpg')">
                <a href="mailto:j.andresen@ionracing.no"><div class="img-overlay" style="background-image: url('images/mailicon.png');"></div></a>
              </div>
              <h4><b>J&oslash;rgen Andresen</b></h4>
              <h5>VP & Technical Leader</h5>
              <a style="color: #00b8de;" href="mailto:j.andresen@ionracing.no"><i class="fa fa-envelope"></i> j.andresen@ionracing.no</a>
              <p><i class="fa fa-phone"></i> 47 81 64 22</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="member">
              <div class="circle-img" style="background-image: url('images/dummy1.jpg')">
                <a href="mailto:f.mellemstrand@ionracing.no"><div class="img-overlay" style="background-image: url('images/mailicon.png');"></div></a>
              </div>
              <h4><b>Fredrik Mellemstrand</b></h4>
              <h5>Technical Leader (Electronics)</h5>
              <a style="color: #00b8de;" href="mailto:f.mellemstrand@ionracing.no"><i class="fa fa-envelope"></i> f.mellemstrand@ionracing.no</a>
              <p><i class="fa fa-phone"></i> 48 03 27 65</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="member">
              <div class="circle-img" style="background-image: url('images/dummy1.jpg')">
                <a href="mailto:eliasmoland@ionracing.no"><div class="img-overlay" style="background-image: url('images/mailicon.png');"></div></a>
              </div>
              <h4><b>Elias Moland</b></h4>
              <h5>Head of Marketing</h5>
              <a style="color: #00b8de;" href="mailto:eliasmoland@ionracing.no"><i class="fa fa-envelope"></i> eliasmoland@ionracing.no</a>
              <p><i class="fa fa-phone"></i> 95 88 49 69</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3">
            <div class="member">
              <div class="circle-img" style="background-image: url('images/dummy1.jpg')">
                <a href="mailto:t.berge@ionracing.no"><div class="img-overlay" style="background-image: url('images/mailicon.png');"></div></a>
              </div>
              <h4><b>Tor Inge Berge</b></h4>
              <h5>Suspension & Steering</h5>
              <a style="color: #00b8de;" href="mailto:t.berge@ionracing.no"><i class="fa fa-envelope"></i> t.berge@ionracing.no</a>
              <p><i class="fa fa-phone"></i> 47 65 55 47</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="member">
              <div class="circle-img" style="background-image: url('images/dummy1.jpg')">
                <a href="mailto:e.ostebo@ionracing.no"><div class="img-overlay" style="background-image: url('images/mailicon.png');"></div></a>
              </div>
              <h4><b>Elizabeth Ramirez &Oslash;steb&oslash;</b></h4>
              <h5>Chief Financial Officer</h5>
              <a style="color: #00b8de;" href="mailto:e.ostebo@ionracing.no"><i class="fa fa-envelope"></i> e.ostebo@ionracing.no</a>
              <p><i class="fa fa-phone"></i> 98 10 35 05</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="member">
              <div class="circle-img" style="background-image: url('images/dummy1.jpg')">
                <a href="mailto:i.haavik@ionracing.no"><div class="img-overlay" style="background-image: url('images/mailicon.png');"></div></a>
              </div>
              <h4><b>Inger Lill Haavik</b></h4>
              <h5>Sponsor Manager</h5>
              <a style="color: #00b8de;" href="mailto:i.haavik@ionracing.no"><i class="fa fa-envelope"></i> i.haavik@ionracing.no</a>
              <p><i class="fa fa-phone"></i> 92 69 16 04</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="member">
              <div class="circle-img" style="background-image: url('images/dummy1.jpg')">
                <a href="mailto:o.kaldestad@ionracing.no"><div class="img-overlay" style="background-image: url('images/mailicon.png');"></div></a>
              </div>
              <h4><b>Ola N&aelig;ss Kaldestad</b></h4>
              <h5>Web Developer</h5>
              <a style="color: #00b8de;" href="mailto:o.kaldestad@ionracing.no"><i class="fa fa-envelope"></i> o.kaldestad@ionracing.no</a>
              <br><a style="color: #00b8de;" href="http://okal.no" target="_blank"><i class="fa fa-external-link"></i> My Website</a>
              <p><i class="fa fa-phone"></i> 99 32 67 78</p>
            </div>
          </div>
        </div>

      </div>
    </div>

    <?php
      include("../layout/sponsors.php");
    ?>

  </div>

  <?php
    include("../layout/scrollhome.php");
  ?>

  <?php
    include("../layout/footer.php");
  ?>

  <script>
    $('.da').removeClass('hideme');
    window.sr = new scrollReveal()
  </script>

  <?php
    include("../layout/analytics.php");
  ?>

  <script  type="text/javascript" src="contactapp.js"></script>

</body>
</html>