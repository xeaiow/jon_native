<?php 

    require '../config/config.php';
    require '../config/middleware.php';

    // 取得使用者 id
    $id = $_GET['id'];

    // 將使用者的 status 狀態更改為 1
    $link->query("UPDATE member SET status = 1 WHERE id = '$id'");

    // 是否操作成功
    echo ( $link->affected_rows == 1 ) 
    ? 
        header("location:" .$base_url. "lists.php")
    : 
        'Failed remove member.';