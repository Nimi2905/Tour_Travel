<?php
	session_start();
	$_SESSION["pcode"]=$_POST["hid1"];
	$_SESSION["nt"]=$_POST["nt"];
	$_SESSION["tp"]=$_POST["tp"];
	if(isset($_SESSION["u_email"])){
		header("location:hotel.php");
	}
	else{
		header("location:login_page.php");
	}
?>