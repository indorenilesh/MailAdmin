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
		include('connect.php');
		$alias=$_GET['grpName'];
		$status_query="select status from mxaliases where alias='$alias'";
		$result=mysqli_query($con,$status_query);
		$status=mysqli_fetch_assoc($result);
		if ($status['status'] == '0')
		{	$disable_query="update mxaliases set status='1' where alias='$alias'"; 
			mysqli_query($con,$disable_query);
			echo '<br><br><br><br><br><br>'; 
			echo "<h1 align='center'>$alias has been disabled.</h1>";
			}
		else	{	$disable_query="update mxaliases set status='0' where alias='$alias'"; 	
		mysqli_query($con,$disable_query);
		echo '<br><br><br><br><br><br>'; 
		echo "<h1 align='center'>$alias has been enabled.</h1>";
			}
			?>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>