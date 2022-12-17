<!doctype html>

<html><head>
<title>Assigment</title>

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
	.open-button {
  background-color:black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 40px;
  right: 58px;
  width: 260px;}
	.btncancel {
  background-color:red;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;}
	.playlist-popup {
  display: none;
  position: fixed;
  bottom: 2%;
  right: 15px;
  border: 3px solid black;
	}
.playlist-container .btn:hover, .open-button:hover {
  opacity: 1;}
	.playlist-container {
  max-width: 300px;
  padding: 10px;
}
.playlist-container .cancel {
  background-color: red;}
	p{
	color: white;
	font-size: 5;
	top: 20%;}
    k{color:black;}
.dropdown {
  float: left;
  overflow: hidden;}
	.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}	
	.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
	
</style>
</head>
<body>
<?php session_start(); ?>
<div class="bg-img">
	<div class="container">
		<div class="bar">
			<a class="active" href="#home"><i class="fa fa-fw fa-home"></i>Home</a>
			<a href="2mv.php"><i class="fa fa-fw fa-youtube"></i> Music</a>
			<a href="2concert.php"><i class="fa fa-fw fa-ticket"></i>Concert</a>
				<a href="logout.php" style="float:right; color :red;" ><i class="fa fa-fw fa-sign-out"></i>Log out</a>
	         <a href="dprouser.php"><i class="fa fa-fw fa-user-circle"></i> &nbsp;<?php echo $_SESSION["username"]?> Profile</a>
		</div></div>
		<button class="open-button" onclick="openplaylist()"><i class="fa fa-spotify"></i>  Open Keshi Playlist</button>
	<div  class="playlist-popup" id="myplaylist">
		<div  class="playlist-container">
<iframe src="https://open.spotify.com/embed/artist/3pc0bOVB5whxmD50W79wwO" width="300" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media" ></iframe>
<button type="button" class="btncancel" onclick="closeplaylist()">Close</button></div></div>
		<br><br><br><br>	<br><br><br><br>	<br><br><br><br>
	<h2><font size  = "+6"><p style="text-align:center;"><k class="fa fa-fw fa-music"></k>Keshi Concert<k class="fa fa-fw fa-music"></k></p></font></h2>
	<br><br><br><br>
	<h3><font size  = "+2"><p style="text-align:center;"><c style= "color :black">Keshi</c>  is a American singer known for his unique singging style.  </p></font></h3>
	<h3><font size  = "+2"><p style="text-align:center;">The reason this page exist is to introduce you to his music and the concert.  </p></font></h3></div>

	
	
	

	
	
	
	
	
	
	
	
	

<script>
function openplaylist() { document.getElementById("myplaylist").style.display = "block";}
function closeplaylist() {document.getElementById("myplaylist").style.display = "none";}
</script>

</body>
</html>
