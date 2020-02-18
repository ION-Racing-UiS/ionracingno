<?php
  $servername = "ionracing.mysql.domeneshop.no";
  $username = "ionracing";
  $password = "jgLAqdJrxaJ8LRh";
  $dbname = "ionracing";

  $s = $_GET["s"];
  $soc = $_GET["soc"];
  $cm = $_GET["cm"];
  $vm = $_GET["vm"];
  $vm2 = $_GET["vm2"];
  $bt = $_GET["bt"];
  $ct = $_GET["ct"];
  $lat = $_GET["lat"];
  $long = $_GET["long"];

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "INSERT INTO SD (s, soc, cm, vm, vm2, bt, ct, `lat`, `long`) VALUES ('$s', '$soc', '$cm', '$vm', '$vm2', '$bt', '$ct', '$lat', '$long')";

  if (mysqli_query($conn, $sql)) {
      echo "Success!";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
?>