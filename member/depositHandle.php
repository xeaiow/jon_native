<?php 

    require '../config/config.php';
    require '../config/middleware.php';

    // 取得使用者 id
    $id     = $_GET['id'];
    $point  = $_POST['point'];

    // 更改使用者的點數
    $link->query("UPDATE users SET point = point + '$point' WHERE id = '$id'");

    // 是否成功操作
    echo ( $link->affected_rows == 1 ) 
    ? 
        header("location:" .$base_url. "member/lists.php")
    : 
        'Failed remove member.';