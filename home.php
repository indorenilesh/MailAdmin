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
</head>
<frameset cols="15%,70%" border=2>
  <frame src="menu.php" name="right">
  <frame src="welcome.php" name="left">
</frameset>
</html>
