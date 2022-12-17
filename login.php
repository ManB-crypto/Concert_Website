
<?php


$con = mysqli_connect("localhost","root","", "keshi") or die("Unable to connect...");

$user = @$_POST["username"];
$pass = @$_POST["password"];	



$sql = "SELECT * from user where Nuser = '$user'";
$result = mysqli_query($con,$sql);


if(mysqli_num_rows($result)==0){
	header("Location:erroruser.php");
    }
else{
	$row = mysqli_fetch_array($result,MYSQLI_BOTH);
	if($row["Npass"] == $pass){
		session_start();
		$_SESSION["username"]=$user;
		header("Location:2assigment1.php");
	}
	else 
	
	header("Location:errorpas.php");
}

?>