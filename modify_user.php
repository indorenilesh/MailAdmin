<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.php");

}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\mystyle.css">
</head>
<body>
<div id="main">
	<div id="header">

	</div>
		<div id="center">
		<?php
		$fname=ucfirst(strtolower($_POST["fname"]));
		$lname=ucfirst(strtolower($_POST["lname"]));
		$pass=$_POST["pass"];
		$quota=$_POST["quota"];
		$username=$_POST["username"];
		include('connect.php');
		//$sql = "INSERT INTO `itkida_com`.`user` (`fname`,`lname`,`password`,`quota`) VALUES ('$fname','$lname','$uname', MD5('$pass'),'$quota');";
		$sql = "update user SET fname='$fname', lname='$lname', quota='$quota', password=md5('$pass') where username='$username';";
		if (!mysqli_query($con,$sql)) {
		  die('Error: ' . mysqli_error($con));
		}
		else	{ echo "<br><br><br><br><br><br><br><br><h1 align='center'>".$username ." user has been modified.</h1>"; }
		?>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>