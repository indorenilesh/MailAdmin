<?php
$db_host="localhost";
$db_name="itkida_com";
$db_user"root";
$db_pass="root"

function db_connect($db_host,$db_user,$db_pass,$db_name)
{
global $con=mysqli_connect("$db_host","$db_user","$db_pass","$db_name");

if(! $con)
{
die('Connection Failed'.mysqli_connect_error());
}
}

?>
