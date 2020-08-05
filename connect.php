<?php
DEFINE ('DB_USER', 'root');
DEFINE ('DB_PASSWORD', 'root');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'itkida_com');
$con = mysqli_connect (DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if(! $con)
{
die('Connection Failed'.mysql_connect_error());
}
?>
