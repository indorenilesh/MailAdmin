<?PHP

session_start();

if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {

header ("Location: index.php");

}
echo "<html><head>";
echo "<link rel='stylesheet' type='text/css' href='css\mystyle.css'>";
echo "</head><body>";
echo "<div id='main'>	<div id='header'>	</div>";

$muser=$_GET['fName'];	
include('connect.php');
$query = "SELECT fname,lname,quota,username,password FROM user where username='$muser'";
$result = mysqli_query($con,$query);

while($r=mysqli_fetch_assoc($result)) {
    		echo "<div id='center'>";
       		echo "<form name='modifyuser' onsubmit='return validateForm()' method='POST' action='modify_user.php'>";
       		echo "<table><tr>";
       		echo "<td>First Name</td>";
       		echo "<td><input type=text size='20' style='height:25px; width: 150px;' name='fname' value=".$r['fname']."></td>";
       		echo "<td>Last Name</td>";
       		echo "<td><input type=text size='20' style='height:25px; width: 150px;' name='lname' value=".$r['lname']."></td>";
       		echo "</tr><tr>";
       		echo "<td>Username</td>";
       		echo "<td><input type=text size='20' style='height:25px; width: 150px;' name='uname' value=".$r['username']." disabled></td>";
       		echo "<td>Quota</td>";
       		echo "<td><input type=text size='20' style='height:25px; width: 150px;' name='quota' value=".$r['quota']."></td>";
       		echo "</tr><tr>";
       		echo "<td>Password</td>";
       		echo "<td><input type=password size='20' style='height:25px; width: 150px;' name='pass' value=".$r['password']."></td>";
       		echo "<td>Re-Password</td>";
       		echo "<td><input type=password size='20' style='height:25px; width: 150px;' name='rpass' value=".$r['password']."></td>";
       		echo "</tr><tr><td></td>";
       		echo "<td><button type='reset' value='Reset' size='20' style='height:25px; width: 150px;'>Reset</button>";
       		echo "<td></td>";
       		echo "<td><button type='submit' value='Modify' size='20' style='height:25px; width: 150px;'>Modify</button>";
       		echo "</tr></table><input type='hidden' name='username' value=".$r['username']."></form></div>";
};
echo "<div id='footer'></div></div></body></html>";
?>




		
