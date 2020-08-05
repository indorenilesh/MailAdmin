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
				$groupName=strtolower($_GET["grpName"]);
				// To maintain group enable/disable status
				$status_query="select status from mxaliases where alias='$groupName'";
				$result=mysqli_query($con,$status_query);
				$status=mysqli_fetch_assoc($result);
				
				$del_sql = "delete from mxaliases where alias='$groupName'";
				if (!mysqli_query($con,$del_sql)) { die('Error: ' . mysqli_error($con)); }
				foreach ($_GET['group_member'] as $groupMember) {
					$qry = "select * from mxaliases where alias='$groupName' and forw_addr='$groupMember'";
					$res = mysqli_query($con,$qry);
					$num_rows = mysqli_num_rows($res);
						if ($num_rows >= 1 ) { continue; }
						else {	
							$sql = "INSERT INTO `itkida_com`.`mxaliases` (`alias`,`forw_addr`,`status`) VALUES ('$groupName','$groupMember','$status[status]');";
								if (!mysqli_query($con,$sql)) { die('Error: ' . mysqli_error($con)); }
							}
											
										}
		echo "<br><br><br><br><br><br>";
		echo "<h1 align='center'>$groupName group has been modified.</h1>";
		?>
		</div>
		<div id='footer'>
	</div>
</div>
</body>
</html>