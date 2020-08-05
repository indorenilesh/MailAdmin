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
		include ('connect.php');
		$fName=$_GET["fName"];
		$sql="delete from user where username='$fName'";
		if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error($con)); } else { echo "<br><br><br><br><br><br><br><br><h1 align='center'>".$fName ." user has been deleted.</h1>"; }
		?>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>