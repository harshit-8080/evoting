<?php
 session_start();
 if(isset($_SESSION['username3']))
{ 
  $uname=$_SESSION["username3"];
  $pass= $_SESSION["password3"];

}
$con=mysqli_connect("localhost","root");
mysqli_select_db($con,"voting");
$q="delete from valid where username='$uname' && password=$pass";
if(mysqli_query($con,$q))
{
header('location:http://localhost/evoting/afterlogout.html');
}
mysql_close();
session_destroy();
?>