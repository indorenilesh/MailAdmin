<?php

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
	<form method="POST" action="view_user.php">
	<table align=center  bgcolor="#b0c4de"> 
	<tr>
	<td align=center><input type=text size="20" style="height:25px; width: 150px;" name="uname"></td>
	<td align=center><input type="submit" value="Search User"></td>
	<td align=center><a href="auser.php"><input type="button" value="Add User"></a></td>
	<td align=center><a href="culk_add.php"><input type="button" value="Bulk Add"></a></td>
	</tr>
	</table>
	</form>
	</div>
		<div id="center">
		<?php
		include('connect.php');
		$uname=$_POST["uname"];
		$sql="select distinct username from user where fname like '%$uname%'";
		$user_list=mysqli_query($con,$sql);
		echo "<form method='GET' action='view_user.php'>";
		echo "<table align=center>";
		echo "<tr><th>User Name</th><th>Edit</th><th>Disable</th><th>Delete</th></tr>";
		while($row=mysqli_fetch_assoc($user_list)) {
		           echo " <tr>";
		           echo "<td class='center'><lable for='fName'>".$row["username"]."</lable></td>";
			   echo "<td class='center'><a href=view_user.php?fName=".$row["username"]." ><img src=image\/edit.png width=30 height=30 /></a></td>";		  
			   echo "<td class='center'><a href=view_user.php?fName=".$row["username"]." ><img src=image\disable.png width=30 height=30 /></a></td>";	
			   echo "<td class='center'><a href=delete_user.php?fName=".$row["username"]." ><img src=image\delete2.png width=30 height=30 /></a></td>";	
		           echo " </tr>";
		};
		echo "</table>";
		?>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>