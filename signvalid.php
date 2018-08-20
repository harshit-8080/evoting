<?php
$username=$_POST['name'];
$password=$_POST['psw'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'voting');
$q="insert into valid(username,password)values('$username',$password)";
if(mysqli_query($con,$q)){
header('location:http://localhost/evoting/login.php');
}
else{
	echo("error");
}
mysqli_close($con);
?>