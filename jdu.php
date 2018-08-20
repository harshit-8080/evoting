<?php
session_start();
if(isset($_SESSION['username2']))
{
  $username2=$_SESSION["username2"];
  $password2=$_SESSION["password2"];
  $_SESSION["username3"]=$username2;
  $_SESSION["password3"]=$password2;
}
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'voting');
$q="insert into jdu(votername)values('unknown')";
if(mysqli_query($con,$q)){
	header('location:http://localhost/evoting/logout.php');
}
mysqli_close($con);
?>