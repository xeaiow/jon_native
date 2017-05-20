<?php 

    require '../config/config.php';
    require '../config/middleware.php';

    // 取得使用者 id
    $id = $_GET['id'];

    // 將使用者的 status 狀態更改為 1
    $link->query("UPDATE users SET status = 1 WHERE id = '$id'");

    // 是否成功操作
    echo ( $link->affected_rows == 1 ) 
    ? 
        header("location:" .$base_url. "member/lists.php")
    : 
        'Failed remove user.';