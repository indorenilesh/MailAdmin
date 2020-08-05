<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.php");

}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\mystyle.css">
<script>
function AddGroupMember()
{

var x = document.getElementById("select_user").selectedIndex;
var y = document.getElementById("select_user").options;
var z = y[x].text;
var p = document.getElementById("group_member");
var option = document.createElement("option");
option.text = z;
option.value = z;
option.selected = true;
p.add(option);
document.getElementById("select_user").remove(x);
}
function RemoveGroupMember()
{
var a = document.getElementById("group_member").selectedIndex;
var b = document.getElementById("group_member").options;
var c = b[a].text;
var d = document.getElementById("select_user");
var opt = document.createElement("option");
opt.text = c;
d.add(opt);
document.getElementById("group_member").remove(a);
var sel = document.getElementById("group_member");  
for(var i=0; i<sel.options.length; i++){  
  sel.options[i].selected = true;  	
} 
}
function validateName()	{
var groupNameValue = document.getElementById("gname").value;
if (groupNameValue==null || groupNameValue=="")
	  {
	  alert("Group Name must be provide");
	  document.getElementById("gname").focus();
		return false;
		}
var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";
for (var i = 0; i < groupNameValue.length; i++) {
    if (iChars.indexOf(groupNameValue.charAt(i)) != -1) {
    alert ("The Group Name has special characters. \nThese are not allowed.\n");
	document.getElementById["gname"].focus();
		return false;	
            }
	}
}

</script>
</head>
<body>
<div id="main">
<div id="header">
</div>

<div id='center'>
<form name="group" onsubmit="return validateName()" method="GET" action="modify_group.php">
<table align='center'>
<tr align='center'>  
<td align='right'>
		<lable>Group Name :&nbsp;&nbsp;&nbsp;&nbsp;</lable>
</td>
<td style='width:40px; height=40px; vertical-align:bottom'></td>
	<td align='left'>
	<?php
	$grpName=$_GET["grpName"];
	echo "<input type='text' id='grpName' name='grpName' style='width:150px;' value='$grpName'>";
	?>
	</td>
	
</tr>


</table>
<table align='center'> 
<tr align='center'>
	<td  rowspan="2" align='right'> 
	<?php
	include('connect.php');
	$query = "SELECT username FROM user";
	$result = mysqli_query($con,$query);
	echo "<select multiple name='select_user' id='select_user' size=20 style='height:200px; width:150px'>";
	
	while($r=mysqli_fetch_array($result))
	{
	echo "<option value=".$r['username']." >".$r['username']."</option>";
	}
	echo "</select>";
	
	echo "</td>";
	echo "<td style='width:40px; height=40px; vertical-align:bottom'>";
		echo "<img src=image/right-arrow.png width='40px'  onClick='AddGroupMember();'>";
		echo "</td>";
	echo "<td rowspan='2' align='left'>";
	$query = "SELECT forw_addr FROM mxaliases where alias='$grpName'";
	$result1 = mysqli_query($con,$query);
	echo "<select multiple name='group_member[]' id='group_member' size=20 style='height:200px; width:150px' selectAll>";
		while($r1=mysqli_fetch_array($result1))
		{
		echo "<option value=".$r1['forw_addr']." selected>".$r1['forw_addr']."</option>";
		}
	echo "</select>";
	echo "</td>";
echo "</tr>";
echo "<tr><td style='width:40px; height=40px; vertical-align:top'><img src=image/left-arrow.png width='40px' onClick='RemoveGroupMember();'></td></tr>";
?>
<tr align='center'>
	<td colspan='2' align='left'></td>
	<td align='left'>
			<input type='submit' value='Modify Group' style='width:150px';>
	</td>
</tr>
</table>
</form>

</div>

</div>
</body>
</html>