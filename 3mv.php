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
	.open-button {
  background-color:red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 40px;
  right: 58px;
  width: 260px;}
	iframe{border: 1px solid red;}
</style>
</head>
<body>
<?php session_start(); ?>
<div class="bg-img">
	<div class="container">
		<div class="bar">
					<a href="3assigment1.php"><i class="fa fa-fw fa-home"></i>Home</a>
		<a href="logout.php" style="float:right; color :red;" ><i class="fa fa-fw fa-sign-out"></i>Log out</a>
		
			<a class="active" href="#home"><i class="fa fa-fw fa-youtube"></i> Music </a>
			<a href="3concert.php"><i class="fa fa-fw fa-ticket"></i>Concert</a>
									 <a href="Idtables.php" ><i class="fa fa-fw fa-edit"></i> &nbsp;Update data</a>
			<a ><i class="fa fa-hand-spock-o"></i>&nbsp;Hello <?php echo $_SESSION["username"]?> </a>
			
		
		</div></div>
	<br><br><br><br>
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>	
<span><iframe  width="500" height="315" src="https://www.youtube.com/embed/T6kUPg_4k7w" frameborder="3"  allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>	
<span><iframe width="500" height="315" src="https://www.youtube.com/embed/o3zVtbw0VDM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
	<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<span><iframe  width="500" height="315" src="https://www.youtube.com/embed/8ulR00x-B1I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>	</span>
	<br><br><br><br>
	<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>	
<span><iframe   width="500" height="315" src="https://www.youtube.com/embed/qEWFxJlmqlg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
	<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
<iframe width="500" height="315" src="https://www.youtube.com/embed/GBUAez6w5ec" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<iframe width="500" height="315" src="https://www.youtube.com/embed/JqZgy6nNRCI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<a href = "https://www.youtube.com/channel/UCX40ZEqeYqCXyiAzrSUiPOg"><button class ="open-button">MORE KESHI SONGS...</button>	</a>
</div>


</body>
</html>
