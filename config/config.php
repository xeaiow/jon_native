<?php
	
	$host 		= "localhost";
	$username 	= "root";
	$password 	= "123456";
	$db_name 	= "jon";

	$link = new mysqli($host, $username, $password, $db_name);
    
	@mysqli_set_charset($link,"utf8");
	date_default_timezone_set("Asia/Taipei");

	$base_url = "//localhost/jon_native/";

	
