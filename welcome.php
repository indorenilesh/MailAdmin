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
<div id="main"> <h1> Welcome main</h1>
	<div id="header">
	<h1> Welcome header</h1>
	</div>
		<div id="center">
		<h1> Welcome center</h1>
		</div>
		
	<div id='footer'>
		<h1> Welcome footer</h1>
	</div>
</div>
</body>
</html>