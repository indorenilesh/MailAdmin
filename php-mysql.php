<?php
require 'db_detail.php';
// Create connection
//$con=mysqli_connect("localhost","root","root","mailadmin");
//db_connect();
$result=mysqli_query($con,"select username,password from user where username='$username' ");
$row = mysqli_fetch_array($result);
echo "$row["username]";
echo "$row["password]";
?> 