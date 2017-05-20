<?php 

    require '../../config/config.php';
    require '../../config/middleware.php';

    // 取得群組 id
    $id = $_GET['id'];

    // 將使用者的 status 狀態更改為 1
    $link->query("DELETE FROM groups WHERE id = '$id'");

    // 是否操作成功
    echo ( $link->affected_rows == 1 ) 
    ? 
        header("location:" .$base_url. "admin/groups/lists.php")
    : 
        'Failed remove groups.';