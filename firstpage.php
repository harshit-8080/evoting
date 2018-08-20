<?php
session_start();
if(isset($_SESSION['username']))
{
  $username1=$_SESSION["username"];
  $password1=$_SESSION["password"];
  $_SESSION["username2"]=$username1;
  $_SESSION["password2"]=$password1;
}
?>
<html>
<head>
	<TITLE>VOTING</TITLE>
	<style>
	#d1{
		display: block;
		position: absolute;
    height: 285px;
    #op:290px;
    margin: 0;
    width: 100%;
    background-color: powderblue;
}
#d2{
	display: block;
	position: absolute;
    height: 285px;
    top:380px;
  height:150%;
    width: 100%;
    background-color: powderblue;
}
#d4{
	position: absolute;
	top:91px;
	left:301px;
}
#d6{
	position: absolute;
	top:91px;
	left:602px;
}
#d7{
	position: absolute;
	top:91px;
	left:920px;
}
a:hover {
    background-color: yellow;
}
</style>

</head>
<body margin: 0;>
	<div id="d1">
		<img src="national.jpg" width="100%">
</div>
	<div id="d2">
		<h1 style="text-align: center">WELCOME TO THIS ONLINE PORTAL</h1>
		<hr>
		<div id="d3">
			<a href="congress.php"><img src="congress.jpg" width="305px" height="300px"></a>
		</div>
		<div id="d4">
			<a href="bjp.php"><img src="bjp.jpg" width="315px" height="300px"></a>
		</div>
		<div id="d6">
			<a href="sapa.php"><img src="sapa.jpg" width="330px" height="300px"></a>
		</div>
		<div id="d7">
			<a href="jdu.php"><img src="jdu.jpg" width="325px" height="300px"></a>
		</div>
		<h2>1.SELECT ANY ONE OF YOUR CHOICE.</h2>
		<H2>2.AFTER SELECTING ANY OF ONE YOU ARE LOGOUT.</H2>
		<img src="indianvoting.jpg" width="100%" height="70%">

	</div>	
</body>
</html>