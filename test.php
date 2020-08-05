<?php
include('connect.php');
$result = mysqli_query($con,"SELECT * FROM mxaliases");

while($row = mysqli_fetch_array($result))
  {
  echo $row['alias'] . " " . $row['forw_addr'] . " " . $row['status'];
  echo "<br>";
  }

mysqli_close($con);
?>
