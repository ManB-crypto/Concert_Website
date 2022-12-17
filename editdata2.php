<?php


$con = mysqli_connect("localhost","root","", "keshi") or die("Unable to connect...");
	
$user = @$_POST["username"];
$pass = @$_POST["password"];
$em = @$_POST["email"];
$no = @$_POST["number"];
$add = @$_POST["address"];
$ID =  @$_POST["id"];

$update_sql="UPDATE user SET Npass ='$pass', Nuser = '$user', address = '$add' ,number = '$no', email = '$em' WHERE
id ='$ID'";


$sql_result=mysqli_query($con,$update_sql);
if($sql_result)
 header("Location:Idtables.php");
else
 echo "Error in updating the data";
?>

