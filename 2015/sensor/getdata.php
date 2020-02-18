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

  $sql = "SELECT `s`, `soc`, `cm`, `vm`, `vm2`, `bt`, `ct`, `lat`, `long`, `id` FROM `SD` ORDER BY `id` DESC LIMIT 10";
  $result = mysqli_query($conn, $sql);

  $sArr = array();
  $socArr = array();
  $cmArr = array();
  $vmArr = array();
  $vm2Arr = array();
  $btArr = array();
  $ctArr = array();
  $latArr = array();
  $longArr = array();

  if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
          array_push($sArr, $row["s"]);
          array_push($socArr, $row["soc"]);
          array_push($cmArr, $row["cm"]);
          array_push($vmArr, $row["vm"]);
          array_push($vm2Arr, $row["vm2"]);
          array_push($btArr, $row["bt"]);
          array_push($ctArr, $row["ct"]);
          array_push($latArr, $row["lat"]);
          array_push($longArr, $row["long"]);
      }
      echo "<script> var sArr = [" . $sArr[9]. ", " . $sArr[8]. ", " . $sArr[7]. ", " . $sArr[6]. ", " . $sArr[5]. ", " . $sArr[4]. ", " . $sArr[3]. ", " . $sArr[2]. ", " . $sArr[1]. ", " . $sArr[0]. "]; </script>";
      echo "<script> var socArr = [" . $socArr[9]. ", " . $socArr[8]. ", " . $socArr[7]. ", " . $socArr[6]. ", " . $socArr[5]. ", " . $socArr[4]. ", " . $socArr[3]. ", " . $socArr[2]. ", " . $socArr[1]. ", " . $socArr[0]. "]; </script>";
      echo "<script> var cmArr = [" . $cmArr[9]. ", " . $cmArr[8]. ", " . $cmArr[7]. ", " . $cmArr[6]. ", " . $cmArr[5]. ", " . $cmArr[4]. ", " . $cmArr[3]. ", " . $cmArr[2]. ", " . $cmArr[1]. ", " . $cmArr[0]. "]; </script>";
      echo "<script> var vmArr = [" . $vmArr[9]. ", " . $vmArr[8]. ", " . $vmArr[7]. ", " . $vmArr[6]. ", " . $vmArr[5]. ", " . $vmArr[4]. ", " . $vmArr[3]. ", " . $vmArr[2]. ", " . $vmArr[1]. ", " . $vmArr[0]. "]; </script>";
      echo "<script> var vm2Arr = [" . $vm2Arr[9]. ", " . $vm2Arr[8]. ", " . $vm2Arr[7]. ", " . $vm2Arr[6]. ", " . $vm2Arr[5]. ", " . $vm2Arr[4]. ", " . $vm2Arr[3]. ", " . $vm2Arr[2]. ", " . $vm2Arr[1]. ", " . $vm2Arr[0]. "]; </script>";
      echo "<script> var btArr = [" . $btArr[9]. ", " . $btArr[8]. ", " . $btArr[7]. ", " . $btArr[6]. ", " . $btArr[5]. ", " . $btArr[4]. ", " . $btArr[3]. ", " . $btArr[2]. ", " . $btArr[1]. ", " . $btArr[0]. "]; </script>";
      echo "<script> var ctArr = [" . $ctArr[9]. ", " . $ctArr[8]. ", " . $ctArr[7]. ", " . $ctArr[6]. ", " . $ctArr[5]. ", " . $ctArr[4]. ", " . $ctArr[3]. ", " . $ctArr[2]. ", " . $ctArr[1]. ", " . $ctArr[0]. "]; </script>";
      echo "<script> var lat = decify('" . $latArr[0]. "'); </script>";
      echo "<script> var long = decify('" . $longArr[0]. "'); </script>";
  } else {
      echo "0 results";
  }

  mysqli_close($conn);
?>