<?php 

    require '../config/config.php';

    // 取得使用者 id
    $id = $_GET['id'];

    // 將使用者的 status 狀態更改為 1
    $link->query("UPDATE member SET status = 1 WHERE id = '$id'");

    if ($link->affected_rows == 1) {

        echo '<meta http-equiv="refresh" content="0;url='.$base_url.'">';
    }
    else {
        
        echo "Failed remove member.";
    }