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
	    opacity: 0.7;}
	 
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

		bottom: 5%;
		
	}
</style>
</head>
<body>

<h2 style="color:white; text-align:right ;padding-right: 15px">LIST OF USERS</h2>

<?php
	$con=mysqli_connect("localhost", "root", "", "keshi") or die ("Unable to connect to server");
	
	$id=@$_POST["id"];
	$sql="SELECT * FROM user WHERE ID = '$id'";
	
	$result=mysqli_query($con,$sql) or die ("Cannot execute sql");
	
	$row=mysqli_fetch_array($result, MYSQLI_BOTH);
	?>
	
	
	<form action="editdata2.php" method="post">
	<br><br><br><br>
	<div class = "forum">
		<div class ="container">
		<label><b> EDIT ID</b></label>
					<td><input name="id" type="text" value="<?php echo "$row[0]"; ?>" size="50">
				<br><br>
		<label><b> EDIT EMAIL</b></label>
					<td><input name="email" type="text" value="<?php echo "$row[1]"; ?>" size="50">
				<br><br>
								<label><b>EDIT NUMBER PHONE</b></label>
					<td><input name="number" type="text" value="<?php echo "$row[2]"; ?>" size="50">
				<br><br>
								<label><b>EDIT ADDRESS</b></label>
					<td><input name="address" type="text" value="<?php echo "$row[3]"; ?>" size="50">
				<br><br>
								<label><b>EDIT USERNAME</b></label>
					<td><input name="username" type="text" value="<?php echo "$row[4]"; ?>" size="50">
				<br><br>
								<label><b>EDIT PASSWORD</b></label>
					<td><input name="password" type="text" value="<?php echo "$row[5]"; ?>" size="50">
				<br><br>

			<button type="submit" >EDIT DATA</button>
				
			<a href = "Idtables.php"><button class = "cancel" >RETURN</button></a>
		</div></div></form>
	
		
		
		
		



</body>

</html>