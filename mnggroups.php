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
<form method="POST" action="show_group.php">
<table align=center  bgcolor="#b0c4de"> 
<tr>
<td align=center><input type=text size="20" style="height:25px; width: 150px;" name="gname"></td>
<td align=center><input type="submit" value="Search Group"></td>
<td align=center><a href="gadd.php"><input type="button" value="Add Group"></a></td>
<td align=center><a href="bulk_add_group.php"><input type="button" value="Bulk Add"></a></td>
</tr>
</table>
</form>
</div>
<div id="center">
<?php
include('connect.php');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from=($page-1) * 20;
$sql="SELECT distinct alias FROM mxaliases ORDER BY alias ASC LIMIT $start_from, 10";
$rs_result=mysqli_query($con,$sql);


$row_no=mysqli_num_rows($rs_result);
if ( $row_no == 0 )
{
echo "<br><br><br><br><br><br>";
echo "<h1 align='center'>There is no group exist.</h1>";
}
else
{

echo "<form method='GET' action='view_group.php'>";
echo "<table align=center>";
echo "<tr><th>Group Name</th><th>Edit</th><th>Disable</th><th>Delete</th></tr>";
//while ($row = mysql_fetch_assoc($rs_result)) {
while($row=mysqli_fetch_assoc($rs_result)) {
           echo " <tr>";
           echo "<td class='center'><lable for='grpName'>".$row["alias"]."</lable></td>";
	   echo "<td class='center'><a href=view_group.php?grpName=".$row["alias"]." ><img src=image\/edit.png width=30 height=30 /></a></td>";	
	   $grp_en_query="select status from mxaliases where alias='$row[alias]'";
	   	  	   $result=mysqli_query($con,$grp_en_query);
	   	  	   $grp_en = mysqli_fetch_assoc($result);
	   	  	   if ($grp_en["status"] == 0)
	   	  	   {
	   	  	   $grp_image='enable.png';
	   	  	   } elseif ($grp_en['status'] == 1)
	   	  	   {
	   	  	   $grp_image='disable.png';
	   	  	   }	  
	   echo "<td class='center'><a href=group_disable.php?grpName=".$row["alias"]." ><img src=image/$grp_image width=30 height=30 /></a></td>";	
	   echo "<td class='center'><a href=delete_group.php?grpName=".$row["alias"]." ><img src=image\delete2.png width=30 height=30 /></a></td>";	
           echo " </tr>";
};
echo "</table>";
echo "</form>";
echo "</div>";
echo "<div id='footer'>";
$sql = "SELECT COUNT(username) FROM user";
$rs_result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 10);
echo "<table align=center><tr>";
for ($i=1; $i<=$total_pages; $i++) {
            echo "<td><a href='mngusers.php?page=".$i."'>".$i."</a></td>";
};
echo "</tr></table></form>";
}
?>
</div>
</div>
</body>
</html>