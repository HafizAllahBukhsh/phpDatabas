<?php 
	
	$db_name = "phpclass";
	$db_user = "root"; 
	$db_pass = "root"; 
	$db_host = "localhost"; 
	
	$connect = new mysqli ($db_host, $db_user, $db_pass, $db_name ); 
	
	if($connect->connect_error ) {
		echo "connection error"; 
		
	}else {
		
		echo ""; 
	}
?> 