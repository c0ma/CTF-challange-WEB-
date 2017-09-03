<?php
	include_once("secret.php");	
	
	if($_GET['sec'] == $adm){
		echo"<center><h1>Hi admin<br><br>Secret:<br><br></h1>";
		echo bin2hex(base64_encode(strrev(base64_encode($flag))));
		highlight_file(__FILE__);
	
	}
	else
		die("Only for admin");


?>	
