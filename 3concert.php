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
.imagebox{
		
		background-image: url("image/concert.jpg");
	    background-size: cover;
	    position: relative;
	    margin: auto;
       width: 60%;
       border: 3px solid black;
       padding: 40px;}
	
	.button {
  display: inline-block;
  border-radius: 4px;
  opacity:  0.4;
  border: none;
 overflow: hidden;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 300px;
  transition: all 0.1s;
  cursor: pointer;
  margin: 5px;

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
	</style>
</head>

<body>
<?php session_start(); ?>
<div class="bg-img">
	<div class="container">
		<div class="bar">
					<a href="3assigment1.php"><i class="fa fa-fw fa-home"></i>Home</a>
						<a href="3mv.php"><i class="fa fa-fw fa-youtube"></i> Music</a>
			
			<a class= "active"><i class="fa fa-fw fa-ticket"></i>concert</a>
			   
						 <a href="Idtables.php" ><i class="fa fa-fw fa-edit"></i> &nbsp;Update data</a>
			<a ><i class="fa fa-hand-spock-o"></i>&nbsp;Hello <?php echo $_SESSION["username"]?> </a>
			<a href="logout.php" style="float:right; color :red;" ><i class="fa fa-fw fa-sign-out"></i>Log out</a>
</div></div>
	<br><br><br><br>
<div class = "imagebox">
<h1><font size  = "+3"><p style="text-align:center;"><b style="color: white;"> All Keshi Live Concert in Malaysia </b></p></font></h1>
	<h1><font size  = "+1"><p style="text-align:center;"><b style="color: white;"> Plus Reviews & Interviews from Around the Globe </b></p></font></h1>
	
	
	<br><br><br><br>
	<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<button class="button" ><span>Keshi Calender </span></button>
	<button class="button" ><span>Revies and interview</span></button>
	<br><br><br><br>
	<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<button class="button" style="background-color: green; opacity: 1.0" ><span>BUY TICKETS</span></button></div>
	</div></body>		
</html>
