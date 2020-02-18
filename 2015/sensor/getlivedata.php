<?php
  $servername = "ionracing.mysql.domeneshop.no";
  $username = "ionracing";
  $password = "jgLAqdJrxaJ8LRh";
  $dbname = "ionracing";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT `s`, `soc`, `cm`, `vm`, `vm2`, `bt`, `ct`, `lat`, `long` FROM `SD` ORDER BY `id` DESC LIMIT 1";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
      // output data of the row
      while($row = mysqli_fetch_assoc($result)) {
          echo "<script> var s = " . $row["s"]. "; </script>";
          echo "<script> var soc = " . $row["soc"]. "; </script>";
          echo "<script> var cm = " . $row["cm"]. "; </script>";
          echo "<script> var vm = " . $row["vm"]. "; </script>";
          echo "<script> var vm2 = " . $row["vm2"]. "; </script>";
          echo "<script> var bt = " . $row["bt"]. "; </script>";
          echo "<script> var ct = " . $row["ct"]. "; </script>";
          echo "<script> var badlat = '" . $row["lat"]. "'; </script>";
          echo "<script> var badlong = '" . $row["long"]. "'; </script>";
      }
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
?>