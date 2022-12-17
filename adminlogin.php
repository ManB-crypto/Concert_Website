<?php


$con = mysqli_connect("localhost","root","", "keshi") or die("Unable to connect...");

$auser = @$_POST["username"];
$apass = @$_POST["password"];	


$sql = "SELECT * from admin where adminuser = '$auser'";
$result = mysqli_query($con,$sql);


if(mysqli_num_rows($result)==0){

	header("Location:erroruserad.php");
}
	
    
else{
	$row = mysqli_fetch_array($result,MYSQLI_BOTH);
	if($row["adminpass"] == $apass){
		session_start();
		$_SESSION["username"]=$auser;
		header("Location:3assigment1.php");
	}
	else 
		header("Location:errorpasad.php");
}

?>