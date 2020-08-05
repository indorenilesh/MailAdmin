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
		  echo "Group Name can not be empty.";
		  exit;
		  }
		  if (empty($data[1]))
		  		  {
		  		  echo "Group Member can not be empty.";
		  		  exit;
		  		  }
		  if (empty($data[2]))
		  		  {
		  		  $data[2]='0';
		  		  }		  		   
		  $sql = "INSERT INTO `itkida_com`.`mxaliases` (`alias`,`forw_addr`,`status`) VALUES ('$data[0]','$data[1]','$data[2]');";
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