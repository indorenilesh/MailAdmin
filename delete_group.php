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
		$grpName=$_GET["grpName"];
		$sql="delete from mxaliases where alias='$grpName'";
		if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error($con)); } else { echo "<br><br><br><br><br><br><br><br><h1 align='center'>".$grpName ." group has been deleted.</h1>"; }
		?>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>