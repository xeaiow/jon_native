<?php
    if( !isset($_SESSION) ) { 
        
		session_start(); 
    }

	// 判斷是否登入
	if ( !isset($_SESSION['username']) || !isset($_SESSION['email']) || !isset($_SESSION['firstname']) ) {

		header("location:" . $base_url);
		exit();
	}
?>

<ul>
    <li><a href="<?=$base_url?>admin/create.php">新增管理員</a></li>
    <li><a href="<?=$base_url?>lists.php">管理員列表</a></li>
    <li><a href="<?=$base_url?>admin/groups/lists.php">群組列表</a></li>
    <li><a href="<?=$base_url?>admin/groups/create.php">新增群組</a></li>
    <li><a href="<?=$base_url?>member/create.php">新增使用者</a></li>
    <li><a href="<?=$base_url?>member/lists.php">使用者列表</a></li>
    <li><a href="<?=$base_url?>sessions.php">登入清單</a></li>
    <li><a href="<?=$base_url?>logout.php">登出 <?=$_SESSION['username']?></a></li>
</ul>