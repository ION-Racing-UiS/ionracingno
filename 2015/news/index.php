<!doctype html>
<html>

<head>
  <title>News | ION Racing</title>
  <link rel="icon" type="image/png" href="../images/favicon.png">

  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,600,400' rel='stylesheet' type='text/css'>
  <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
  <script src="../scrollReveal.js-master/dist/scrollReveal.min.js"></script>
  <link rel="stylesheet" href="newsstyle.css">

</head>

<body>
  <div id="fb-root"></div>
  <script>    
    (function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    } (document, 'script', 'facebook-jssdk'));
  </script>

  <?php
    $page = "news";
    include("../layout/header.php");
  ?>

  <div class="jumbotron">
    <div class="jumbo" style="background-image: url('jumbo/news.jpg');">
      <div class="container">
        <h1 data-sr="wait 0.2s enter right hustle 100px" class="da hideme">Newsletters</h1>
      </div>
    </div>
  </div>

  <div class="content">

    <div class="news">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="post">
              <h3>2016, January - Newsletter #1</h3>
              <div data-configid="11521529/32876664" style="width: 100%; height:500px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>
            <div class="post">
              <h3>2015, July - Newsletter #6 - Silverstone</h3>
              <div data-configid="11521529/14097142" style="width: 100%; height:500px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>
            <div class="post">
              <h3>2015, May - Newsletter #5</h3>
              <div data-configid="11521529/13224705" style="width: 100%; height:500px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>
            <div class="post">
              <h3>2015, April - Newsletter #4</h3>
              <div data-configid="11521529/12434165" style="width: 100%; height:500px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>
            <div class="post" data-sr>
              <h3>2015, March - Newsletter #3</h3>
              <div data-configid="11521529/11879193" style="width: 100%; height:500px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>
            <div class="post" data-sr>
              <h3>2015, February - Newsletter #2</h3>
              <div data-configid="11521529/12673940" style="width: 100%; height:500px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>
            <div class="post" data-sr>
              <h3>2015, January - Newsletter #1</h3>
              <div data-configid="11521529/10980321" style="width: 100%; height:500px;" class="issuuembed"></div><script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>
            </div>
          </div>
          <div class="col-md-4">
            <?php
              include("../layout/side-cards.php");
            ?>
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
    window.sr = new scrollReveal();
  </script>

  <?php
    include("../layout/analytics.php");
  ?>

  <script  type="text/javascript" src="newsapp.js"></script>

</body>
</html>