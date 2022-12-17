<!doctype html>
<html><head>
<title>Assigment</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body{ margin: 0;font-family: Arial;}
	
	
.bg-img {
	background-image: url("image/keshi bgaas.png");
	min-height: 1000px;
	background-position: center;
	background-size: cover;
	position: relative;}
	.container{
		position: right;
		margin: 0px;
		width: auto;
	
	}
		
.bar  {
  overflow: hidden;		}
.bar a {
  float: left;
  color: white;
 
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;}
.bar :hover {opacity: 1.5;}

.bar a:hover {
  background-color: black;
  color: red
  opacity: 1.5;
}

.bar a.active {
  background-color: black;
  color: white;
	opacity: 1.6;
}
	.button {
  background-color:black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 40px;
  right: 58px;
  width: 20%; 
overflow: hidden;
transition: all 0.1s;

}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: 20%;
  transition: 0.1s;
}
	button:hover{background-color: black;
	color :white;}
.button:hover span {
  padding-right: 25px;
 opacity: 1.5;
	}

.button:hover span:after {
  opacity: 1;
	right: 0;
	}
	.ayy {border: 3px solid black;
     
	    margin: auto;
       width: 30%;
padding: 30px;
	color :white;
	text-align: center;}

</style>
</head>
<body>

<?php
	$con=mysqli_connect("localhost", "root", "", "keshi") or die ("Unable to connect to server");
	session_start(); 
	$userl =$_SESSION["username"];
	$sql="SELECT * FROM user WHERE Nuser = '$userl'";
	
	$result=mysqli_query($con,$sql) or die ("Cannot execute sql");
	
	$row=mysqli_fetch_array($result, MYSQLI_BOTH);
	?>
<div class="bg-img">
	<div class="container">
		<div class="bar">
					<a href="2assigment1.php"><i class="fa fa-fw fa-home"></i>Home</a>
		<a href="logout.php" style="float:right; color :red;" ><i class="fa fa-fw fa-sign-out"></i>Log out</a>
		
			<a  href="2mv.php"><i class="fa fa-fw fa-youtube"></i> Music </a>
			<a href="2concert.php"><i class="fa fa-fw fa-ticket"></i>Concert</a>
			<a class="active"><i class="fa fa-fw fa-user-circle"></i> &nbsp;<?php echo $_SESSION["username"]?> Profile</a>
						
			
		
		</div></div>
		<br><br><br><br><br><br><br><br>
	<div class = "ayy"><b>Username : </b>
		<span>&nbsp;&nbsp;<?php echo "$row[4]"; ?></span>
	<br><br>
	<b>ID : </b>
		<span>&nbsp;&nbsp;<?php echo "$row[0]"; ?>
				<br><br>
	<b>Email : </b>
		<span>&nbsp;&nbsp;<?php echo "$row[1]"; ?>
			<br><br>
			<b>Phone Number : </b>
			
		<span>&nbsp;&nbsp;<?php echo "$row[2]";?>
			<br><br>
	<b>Address : </b>
		<span>&nbsp;&nbsp;<?php echo "$row[3]"; ?>

			</div>


</div>


</body>
</html>
