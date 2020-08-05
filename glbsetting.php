<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.php");

}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\mystyle.css">
<script>
function myFunction()
{
var x = document.getElementById("OrgName").disabled;
if ( x == false ) 
	{ 	document.getElementById("OrgName").setAttribute('disabled',"true");
		document.getElementById("DomainName").setAttribute('disabled',"true");
		document.getElementById("PmID").setAttribute('disabled',"true");
		document.getElementById("MsgSize").setAttribute('disabled',"true");
		document.getElementById("AttSize").setAttribute('disabled',"true");
		document.getElementById("RlHost").setAttribute('disabled',"true");
		document.getElementById("Quota").setAttribute('disabled',"true");
		document.getElementById("IPList").setAttribute('disabled',"true");

	}
else	{ 	document.getElementById("OrgName").removeAttribute('disabled'); 
		document.getElementById("OrgName").removeAttribute('disabled');
		document.getElementById("DomainName").removeAttribute('disabled');
		document.getElementById("PmID").removeAttribute('disabled');
		document.getElementById("MsgSize").removeAttribute('disabled');
		document.getElementById("AttSize").removeAttribute('disabled');
		document.getElementById("RlHost").removeAttribute('disabled');
		document.getElementById("Quota").removeAttribute('disabled');
		document.getElementById("IPList").removeAttribute('disabled');
	}
}
</script>


</head>
<body class=top-margin>
<div id="main">
	<div id="header">
	</div>
<div id="center">
<form>
<table>
<tr>
	<td>Organisation Name</td>
	<td colspan=3><input type=text id="OrgName" size=97 disabled></td>

</tr>
<tr>
	<td>Domain Name</td>
	<td><input type=text id="DomainName" disabled></td>
	<td>Postmaster ID</td>
	<td><input type=text id="PmID" disabled></td>
</tr>
<tr>
	<td>Max Message Size</td>
	<td><input type=text id="MsgSize" disabled></td>
	<td>Max Attachment Size</td>
	<td><input type=text id="AttSize" disabled></td>
</tr>
<tr>
	<td>Relayhost</td>
	<td><input type=text id="RlHost" disabled></td>
	<td>Quota</td>
	<td><input type=text id="Quota" disabled></td>
</tr>
<tr>
	<td>Secure IP/Network</td>
	<td colspan=3><textarea rows="3" cols="73" id="IPList" disabled></textarea></td>
</tr>
</table>
</form>
<table align=center>
<tr>
<td>
<button onClick="myFunction()">Modify</button>
</td></tr>
</table align=center>
		</div>
		
	<div id='footer'>
	
	</div>
</body>
</html>