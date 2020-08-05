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
		<form action="buadd.php" method="post" enctype="multipart/form-data">
		<label for="file">Note : 1) File should be a CSV format file.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) There should be 5 column.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3) User First name in first column.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4) User Last Name in second column.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5) Username in third column.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6) Password in fourth column.</label><br>
		<label for="file">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7) User's quota detail in fifth column.</label><br>
		<br><br><br><br>
		<input type="file" name="file" id="file" size="50" width="100px" height="30px"><br><br><br>
		<input type="submit" name="submit" value="Add Users">
		</form>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>