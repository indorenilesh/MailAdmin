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
<form method="POST" action="muser.php">
<table align=center  bgcolor="#b0c4de"> 
<tr>
<td align=center>
 <?php
include('connect.php');
$query = "SELECT username FROM user";
$result = mysqli_query($con,$query);
echo "<select name='select_muser' style='height:25px; width: 150px;'></option>";
while($r=mysqli_fetch_array($result))
{
echo "<option value=".$r['username'].">".$r['username']."</option>";
}
echo "</select>";
?>
</td>
<td align=center><input type="submit" value="Modify User"></td>
<td align=center><a href="auser.php"><input type=button value="Add User"></a></td>
<td align=center><a href="bulk_add.php"><input type=button value="Bulk Add"></a></td>
</tr>
</table>
</form>
</div>
<div id="center">
<?php
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from=($page-1) * 20;
$sql="SELECT username FROM user ORDER BY username ASC LIMIT $start_from, 10";
$rs_result=mysqli_query($con,$sql);
echo "<table align=center>";
echo "<tr><th>Username</th><th>Edit</th><th>Disable</th><th>Delete</th></tr>";

//while ($row = mysql_fetch_assoc($rs_result)) {
while($row=mysqli_fetch_assoc($rs_result)) {
           echo " <tr>";
           echo "<td class='center'>".$row["username"]."</td>";
	   echo "<td class='center'><img src=image\/edit.png width=30 height=30 /></td>";	
	   echo "<td class='center'><img src=image\disable.png width=30 height=30 /></td>";	
	   echo "<td class='center'><img src=image\delete2.png width=30 height=30 /></td>";	
           echo " </tr>";
};
echo "</table>";
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
echo "</tr></table>";
?>
</div>
</div>
</body>
</html>