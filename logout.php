<?php
session_start();

if(isset($_SESSION["username"])){
	session_destroy();
    header("Location:assigment1.html");
}
else 
	echo "no session exist, please log in";
?>