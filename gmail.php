
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
		$username='indorenilesh';
		$password='Mayura!1';
		$imap = imap_open($mailboxPath, $username, $password);
		$folder = imap_list($imap, "{imap.gmail.com:993/imap/ssl}", "*");
		echo "<ul>";
		foreach ($folders as $folder) {
		    $folders = str_replace("{imap.gmail.com:993/imap/ssl}", "", imap_utf7_decode($folder));
		    echo "<li><a href='mail.php?folder=' . $folder . '&func=view'>' . $folder . '</a></li>";
		}
		echo "</ul>";
		?>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>