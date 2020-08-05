<?PHP
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: index.php");
}
$fname=ucfirst(strtolower($_POST["fname"]));
$lname=ucfirst(strtolower($_POST["lname"]));
$uname=strtolower($_POST["uname"]);
$pass=$_POST["pass"];
$quota=$_POST["quota"];

 include('connect.php');
/*$con=mysqli_connect("localhost","root","root","itkida_com");

if(! $con)
{
die('Connection Failed'.mysqli_connect_error());
}*/
$sql = "INSERT INTO `itkida_com`.`user` (`fname`,`lname`,`username`, `password`,`quota`) VALUES ('$fname','$lname','$uname', MD5('$pass'),'$quota');";
if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}

//include ('auser.php');

mysqli_close($con);

echo "<div id='main'><div id='header'></div>";
echo "<div id='center'>";
echo "";
echo "<table align=center><tr><td><br><br><br></td></tr><tr><td><br><br><br></td></tr><tr><td><br><br><br></td></tr><tr><td><h1>$uname user has been created successfully</h1></td></tr><table>";	
echo "</div>";
		
echo "<div id='footer'></div></div>";
?>
