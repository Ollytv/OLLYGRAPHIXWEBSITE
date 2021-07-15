<?php 
$db=mysqli_connect("localhost","root","","codeworld");
if(isset($_POST['reg'])){
$fn=$_POST['fname'];
$ln=$_POST['lname'];
$un=$_POST['username'];
$em=$_POST['email'];
$psd=$_POST['password'];
$psd2=$_POST['password2'];
$insert="insert into web(firstname,lastname,username,email,password,password1)
values('$fn','$ln','$un','$em','$psd','$psd2')";
$exc=mysqli_query($db,$insert);
if($exc){

include('login.php');



}else{
	echo"No data inserted";

}






}










?>