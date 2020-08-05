<?php
$username=$_POST["username"];
$password=$_POST["password"];
$num_rows = 0;

$con=mysqli_connect("localhost","root","root","mailadmin");

if(! $con)
{
die('Connection Failed'.mysqli_connect_error());
}

$result=mysqli_query($con,"select username,password from user where username='$username' ");

$num_rows = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($row["username"]==$username && $row["password"]==md5($password) && $num_rows > 0)
{
session_start();
$_SESSION['login'] = "1";
header("Location:home.php"); 
}
else {
session_start();
$_SESSION['login'] = '';
include ('index.php');
echo "<table align=center><tr><td><font color=#FF0000><b>Login Failed</b></font></td></tr><table>";
}
?>
