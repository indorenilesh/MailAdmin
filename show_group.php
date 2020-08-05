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
	<form method="POST" action="show_group.php">
	<table align=center  bgcolor="#b0c4de"> 
	<tr>
	<td align=center><input type=text size="20" style="height:25px; width: 150px;" name="gname"></td>
	<td align=center><input type="submit" value="Search Group"></td>
	<td align=center><a href="gadd.php"><input type="button" value="Add Group"></a></td>
	<td align=center><a href=""><input type="button" value="Bulk Add"></a></td>
	</tr>
	</table>
	</form>
	</div>
		<div id="center">
		<?php
		include('connect.php');
		$gname=$_POST["gname"];
		$sql="select distinct alias from mxaliases where alias like '%$gname%'";
		$group_list=mysqli_query($con,$sql);
		echo "<form method='GET' action='view_group.php'>";
		echo "<table align=center>";
		echo "<tr><th>Group Name</th><th>Edit</th><th>Disable</th><th>Delete</th></tr>";
		while($row=mysqli_fetch_assoc($group_list)) {
		           echo " <tr>";
		           echo "<td class='center'><lable for='grpName'>".$row["alias"]."</lable></td>";
			   echo "<td class='center'><a href=view_group.php?grpName=".$row["alias"]." ><img src=image\/edit.png width=30 height=30 /></a></td>";		  
			   echo "<td class='center'><a href=view_group.php?grpName=".$row["alias"]." ><img src=image\disable.png width=30 height=30 /></a></td>";	
			   echo "<td class='center'><a href=delete_group.php?grpName=".$row["alias"]." ><img src=image\delete2.png width=30 height=30 /></a></td>";	
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