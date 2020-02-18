<!doctype html>
<html>

<head>
  <title>Blog | ION Racing</title>
  <link rel="icon" type="image/png" href="../images/favicon.png">

  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,600,400' rel='stylesheet' type='text/css'>
  <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
  <script src="../Cycle2/jquery.cycle2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
  <link rel="stylesheet" href="blogstyle.css">

</head>

<body style="overflow: hidden;">

  <?php
    $page = "blog";
    include("../layout/header.php");
  ?>

  <iframe id="blog-frame" src ="http://www.ionracing.blogspot.com/" style=" width: 100%; border: none;">
    <p>(An error occured.)</p>
  </iframe>

  <?php
    include("../layout/analytics.php");
  ?>

  <script  type="text/javascript" src="blogapp.js"></script>

</body>
</html>
