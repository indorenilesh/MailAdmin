<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.php");

}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\menu.css">
</head>
<body>
<div id="main-menu">

	<div id="main-menu-image" align=center>
	<table align=center>
	<tr>
	<th><img src="image\user.png" width="100" height="100" align="center" /></th>
	</tr>
	</table> 
	</div>
	
	<div id=main-menu-item>
	<table class="menutable" cellpadding="5" cellspacing="5" align=center>
	<tr>
	<td> <a href="glbsetting.php" target="left">Global Setting</a></td>
	</tr>
	<tr>
	<td> <a href="mngdomains.php" target="left">Manage Domains</a></td>
	</tr>
	<tr>
	<td> <a href="mngusers.php" target="left">Manage Users</a></td>
	</tr>
	<tr>
	<td> <a href="mnggroups.php" target="left">Manage Groups</a></td>
	</tr>
	<tr>
	<td><a href="lognreport.php" target="left">Logs & Reports</a></td>
	</tr>
	<tr>
	<td><a href="div-test.php" target="left">Test</a></td>
	</tr>
	<tr>
	<td>Logout</td>
	</tr>
	</table> 
	</div>
</div>
</body>
</html>