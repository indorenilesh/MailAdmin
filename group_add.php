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
		$groupName=strtolower($_GET["gname"]);
				
		foreach ($_GET['group_member'] as $groupMember)
		{
				  $sql = "INSERT INTO `itkida_com`.`mxaliases` (`alias`,`forw_addr`,`status`) VALUES ('$groupName','$groupMember','enable');";
		if (!mysqli_query($con,$sql)) {
		  die('Error: ' . mysqli_error($con));
		}
		}
		echo "<br><br><br>";
		echo "<h1 align='center'>$groupName group has been created.</h1>";
		?>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>