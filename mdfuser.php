<html>
<BODY>
 <FORM ACTION="listCustomer.php" METHOD="POST"/>

 <?php
 include('connect.php');

 $query = "SELECT username FROM user";
 $result = mysqli_query($con,$query);
 echo "<select name=select_user value=''>Select</option>";
 while($r=mysqli_fetch_array($result))
 {
 echo "<option value=".$r['username'].">".$r['username']."</option>"; 
 }
 echo "</select>";
 ?>

 <BR>
 <INPUT TYPE="SUBMIT" Value="Modify"/>
 </FORM>
 </BODY>
 </HTML>
