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
<h1 align="center">This is Manage Domain Page.</h1>
</html>