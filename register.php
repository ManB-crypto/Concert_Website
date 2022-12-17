<?php


$con = mysqli_connect("localhost","root","", "keshi") or die("Unable to connect...");
	
$user = @$_POST["username"];
$pass = @$_POST["password"];
$em = @$_POST["email"];
$no = @$_POST["number"];
$add = @$_POST["address"];


$insert_sql="INSERT INTO user VALUES(null,'$em','$no','$add','$user','$pass')";

$sql_result =mysqli_query($con,$insert_sql) or die("Error".mysql_error()); 

header("Location:login ks.html");
?>
