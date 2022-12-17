<html>
<body>
<?php

$con = mysqli_connect("localhost","root","", "keshi") or die("Unable to connect...");
	
$nid=$_POST["id"];	
$nuser=$_POST["cuser"];
$npass=$_POST["cpass"];


if(empty($nuser))	
   $update_sql_pass="UPDATE user SET Npass ='$npass' WHERE ID = '$nid'";
else
   $update_sql_user="UPDATE user SET Nuser = '$nuser' WHERE ID = '$nid'";
	


	
	
	
$sql_result=mysqli_query($con,$update_sql_user,$update_sql_pass);
		
if($sql_result)
 echo "Succesfully update the data.";
else
 echo "Error in updating the data";
?>
</body>
</html>
