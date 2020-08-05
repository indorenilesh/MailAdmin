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
		<form action="bgadd.php" method="post" enctype="multipart/form-data">
		<label for="file">Note : 1) File should be a CSV format file.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) There is 3 column.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) Enter group name in first column.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) Enter group Member Name in second column.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5) Third column is optional.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6) In third column only 0 or 1 value is allowed.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7) Third column is used to enable disable group. By default it is 0 means enable.</label><br>
		<br><br><br><br>
		<input type="file" name="file" id="file" size="50" width="100px" height="30px"><br><br><br>
		<input type="submit" name="submit" value="Add Groups">
		</form>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>