<?php
	//session_start();
	// session er moddhe session start kora jay na!
	// include korle basically duita session eksathe start howar moto kisu ekta hoy
	if(empty($_SESSION["logInHoise"]) || !$_SESSION["logInHoise"])
	{
		header("location:".hrefThis("public","loginPage.php"));
	}
	if(empty($_SESSION["curUser"]) || $_SESSION["curUser"]["role"] != "customer")
	{
		header("location:".hrefThis("public","loginPage.php"));
	}
?>