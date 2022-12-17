<html>
<head>
<style>
	body{
		background-image: url("image/purple (5).jpg");
	min-height: 1000px;
	background-position: center;
	background-size: cover;
	font-family: Arial, Helvetica, sans-serif;}
table {
	
	  margin: auto;
  width: 70%;
  border: 3px solid blue;
  padding: 10px;
	right: 10%;
	background-color: mediumpurple;
	font-size : 20px;
	
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
	  padding: 15px;
  text-align: center;

}
th, td {
  padding: 15px;

}
#table tr:nth-child(even) {
  background-color: rebeccapurple;
}
#ta tr:nth-child(odd) {
 background-color: rebeccapurple;
}
#table th {
  background-color: purple;
  color: white;
}
	button{
		background-color:green;
		color: black;
		padding: 14px 20px;
        margin: 12px 0px;
        border: 3px blue;
		cursor: pointer;
		width: 100%;
	    color: white;
	    opacity: 0.5;}
	 
button:hover{ opacity: 1.5;}

.forum {
 margin: auto;
 border: 3px solid #73AD21;

 width: 20%;
  padding: 10px;
	left: 40px;
	background-color: mediumpurple;
	font-size : 20px;}
	
	input[type=text], input[type=password]{
		width: 100%;
		padding: 10px ;
		display: inline-block;
		border: 2px solid black;
		box-sizing: border-box;}
	.container{
		padding: 10px ;
	    font-family:"Times New Roman", Times, serif;}
	input[type=text]{
		width: 100%;
		padding: 10px ;
		display: inline-block;
		border: 2px solid black;
		box-sizing: border-box;}
	.cancel{
		background-color:red;
		color: black;
        margin: 12px 0px;
        border: 3px blue;
	    color: white;
		position: fixed;
		bottom: 5%;
		
	}
</style>
</head>
<body>

<h2 style="color:white; text-align:center ;">LIST OF USERS</h2>

<?php

$con = mysqli_connect("localhost","root","", "keshi") or die("Unable to connect...");
		
$sql = "SELECT * FROM user ORDER BY ID asc";
$result = mysqli_query($con,$sql);

 

echo "<table id='table'>

<tr>
<th>ID</th>
<th>Name</th>
<th>Password</th>
<th>Email</th>
<th>Number</th>
<th>Address</th>

</tr>";


 

while($row = mysqli_fetch_array($result))

  {

  echo "<tr>";
  echo "<td>" . $row["ID"] . "</td>";
  echo "<td>" . $row["Nuser"] . "</td>";
  echo "<td>" . $row["Npass"] . "</td>";
  echo "<td>" . $row["email"] . "</td>";
  echo "<td>" . $row["number"] . "</td>";
  echo "<td>" . $row["address"] . "</td>";


  echo "</tr>";

  }

echo "</table>";

 

mysqli_close($con);

?>   
	<form action="editdata.php" method="post">
	<br><br><br><br>
	<div class = "forum">
		<div class ="container">
		<label><b>ID</b></label>
		<input type="text" placeholder="The Person ID" name ="id">
				<br><br>

			</div><button type="submit" >CONTINUE</button>
		</div></form>
	
		
		
		
		
	
		<button class = "cancel" style onclick="document.location='3assigment1.php'">CANCEL</button>
	<!-button to link ->


</body>

</html>