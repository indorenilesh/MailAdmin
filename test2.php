<html>
<body>
<?php
include('connect.php');
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from=($page-1) * 20;
$sql="SELECT username FROM user ORDER BY username ASC LIMIT $start_from, 20";
$rs_result=mysqli_query($con,$sql);


echo "<table align=center>";
echo "<tr><td>Username</td></tr>";

//while ($row = mysql_fetch_assoc($rs_result)) {
while($row=mysqli_fetch_assoc($rs_result)) {
           echo " <tr>";
           echo "<td>".$row["username"]."</td>";
           echo " </tr>";
};
echo "</table>";
$sql = "SELECT COUNT(username) FROM user";
$rs_result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);

for ($i=1; $i<=$total_pages; $i++) {
            echo "<a href='test2.php?page=".$i."'>".$i."</a> ";
};
?>
</body>
</html>
