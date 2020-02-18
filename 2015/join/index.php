<!doctype html>
<html>

<head>
  <title>Join us | ION Racing</title>
  <link rel="icon" type="image/png" href="../images/favicon.png">

  <link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,300,600,400' rel='stylesheet' type='text/css'>
  <link href="../bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <script type="text/javascript" src="../fancybox/lib/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="../fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
  <script src="../Cycle2/jquery.cycle2.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" />
  <link rel="stylesheet" href="joinstyle.css">

</head>

<body style="overflow: hidden;">

  <?php
    $page = "join";
    include("../layout/header.php");
  ?>

  <iframe id="join-frame" src="https://docs.google.com/forms/d/1IHZmC3SxLV7PNpVbykzFCGHyhHgEBktduMQs7MwLoHA/viewform?embedded=true" style="width: 100%; height: 100%;" frameborder="0" marginheight="0" marginwidth="0">Loading ...</iframe>

  <?php
    include("../layout/analytics.php");
  ?>

  <script  type="text/javascript" src="joinapp.js"></script>

</body>
</html>
