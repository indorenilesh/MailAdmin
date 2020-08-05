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
		<?php
		include('connect.php');
		
		$file = fopen($_FILES["file"]["tmp_name"],"r");
		
		while(! feof($file))
		  {
		  $data = fgetcsv($file);
		  if (empty($data[0]))
		  {
		  echo "Username can not be empty.";
		  exit;
		  }
		  $sql = "INSERT INTO `itkida_com`.`user` (`fname`,`lname`,`username`, `password`,`quota`) VALUES ('$data[0]','$data[1]','$data[2]', MD5('$data[3]'),'$data[4]');";
		  		  if (!mysqli_query($con,$sql)) {
		  		  		  die('Error: ' . mysqli_error($con));
		  		  		} 
		  }
		
		fclose($file);
		?>	
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>