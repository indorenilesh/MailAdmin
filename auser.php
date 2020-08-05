<?PHP
session_start();
if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
header ("Location: index.php");
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css\mystyle.css">
<script>
function validateForm()
{

var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";
for (var i = 0; i < document.forms["adduser"]["fname"].value.length; i++) {
    if (iChars.indexOf(document.forms["adduser"]["fname"].value.charAt(i)) != -1) {
    alert ("The First Name has special characters. \nThese are not allowed.\n");
	
            }
	}
for (var i = 0; i < document.forms["adduser"]["lname"].value.length; i++) {
    if (iChars.indexOf(document.forms["adduser"]["lname"].value.charAt(i)) != -1) {
    alert ("The Last Name has special characters. \nThese are not allowed.\n");
	
            }
	}

var uname=document.forms["adduser"]["uname"].value;
if (uname==null || uname=="")
  {
  alert("Username name must be filled out");
  document.forms["adduser"]["uname"].focus();
  return false;
  }

var pass=document.forms["adduser"]["pass"].value;
if (pass==null || pass=="")
  {
  alert("Password must be provide");
  document.forms["adduser"]["pass"].focus();
	return false;
 }

var rpass=document.forms["adduser"]["rpass"].value;
		if (rpass==null || rpass=="")
		  {
		  alert("Retype the password.");
		  document.forms["adduser"]["rpass"].focus();
		  return false;
		  }
if (pass!=rpass)
{
alert("Password are not same.");
document.forms["adduser"]["rpass"].value='';
document.forms["adduser"]["rpass"].focus();
return false;
}
     var numbers = /^[0-9]+$/;
     var quota=document.forms["adduser"]["quota"].value;  
      if(quota==null || quota=="" || quota.match(numbers))  
      {  
      return true;  
      }  
      else  
      {  
      alert('Please input numeric characters only');
      document.adduser.quota.value='';
      document.adduser.quota.focus();  
      return false;  
      }  
}
</script>
</head>
<body>
<div id="main">
	<div id="header">

	</div>
		<div id="center">
		<form name="adduser" onsubmit="return validateForm()" method="POST" action="adduser.php">
		<table>
		<tr>
			<td>First Name</td>
			<td><input type=text size="20" style="height:25px; width: 150px;" name="fname"></td>
			<td>Last Name</td>
			<td><input type=text size="20" style="height:25px; width: 150px;" name="lname"></td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type=text size="20" style="height:25px; width: 150px;" name="uname"></td>
			<td>Quota</td>
			<td><input type=text size="20" style="height:25px; width: 150px;" name="quota"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type=password size="20" style="height:25px; width: 150px;" name="pass"></td>
			<td>Re-Password</td>
			<td><input type=password size="20" style="height:25px; width: 150px;" name="rpass"></td>
		</tr>
		<tr>
		<td></td>
		<td><button type="reset" value="Reset" size="20" style="height:25px; width: 150px;">Reset</button>
		<td></td>
		<td><button type="submit" value="Submit" size="20" style="height:25px; width: 150px;">Submit</button>
		</tr>
		</table>
		</form>
		</div>
		
	<div id='footer'>
	
	</div>
</div>
</body>
</html>