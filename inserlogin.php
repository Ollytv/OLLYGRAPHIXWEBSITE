<?php 
//Create connection
$db=mysqli_connect("localhost","root","","codeworld");

//If login button is clicked
if(isset($_POST['LOGIN'])){


$un=$_POST['username'];

$psd=$_POST['password'];
//Query to to display data from database and compare them with data entered
$insert="select * from web where username='$un' and password='$psd'";
//Query execution 
$query=mysqli_query($db,$insert);
//Checking for rows available in database
$page=mysqli_num_rows($query);
//Condition
if(!$page){
	//Html codes for displaying login form when query is not executed
	echo'

<!DOCTYPE html>
<html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"content="width=device-width, initial-scale=1.0">
	<title>login form</title>
	<link rel="stylesheet"href="sign.css">
</head>
<body>
	<div id="form-wrap">
<div class="container">
	<div id="form">
		<div class="brand_sign"><img src="codeworld logo.png"></div>
		<center>
		<h3 class="header">Login</h3>
	<form method="POST"action="inserlogin.php">
	 <input type="text" name="username"placeholder="Username"id="username"><br><br>


	
	<input type="password" name="password"placeholder="Password"id="password"><br><br>
	<button class="button"type="submit"name="LOGIN">LOGIN</button>





	';
	//Messge for incorrect password and username when the username and password doesn't match


echo"<p style='color:red;'>Incorrect username or password</p>";
//Other html codes after displaying message for incorrect username or password

echo'




    <nav>
	<li><a href="regesterform.html">Register</a></li>
	<li><a href="help.html">Help?</a></li>

	
</nav>
	</form>
</center>
</div>
</div>
</div>
</body>
</html>




';

}else{
	//The home page after creating account or login in account correct username and password

include('page1.html');

}

}

//End of the php file

?>