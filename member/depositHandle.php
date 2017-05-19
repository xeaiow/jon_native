<?php 

    require '../config/config.php';

    // 取得使用者 id
    $id     = $_GET['id'];
    $point  = $_POST['point'];

    // 更改使用者的點數
    $link->query("UPDATE users SET point = point + '$point' WHERE id = '$id'");

    if ($link->affected_rows == 1) {

        echo '<meta http-equiv="refresh" content="0;url='.$base_url.'member/lists.php">';
    }
    else {
        
        echo "Failed remove member.";
    }