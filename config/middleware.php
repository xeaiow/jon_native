<?php

    if( !isset($_SESSION) ) { 
        
		session_start(); 
    }

	// 判斷是否登入
	if ( !isset($_SESSION['username']) || !isset($_SESSION['email']) || !isset($_SESSION['firstname']) ) {

		header("location:" . $base_url);
		exit();
	}