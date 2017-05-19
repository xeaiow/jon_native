<?php 

    require '../../config/config.php';

    // 取得群組 id
    $id = $_GET['id'];

    // 將使用者的 status 狀態更改為 1
    $link->query("DELETE FROM groups WHERE auth = '$id'");

    if ($link->affected_rows == 1) {

        echo '<meta http-equiv="refresh" content="0;url='.$base_url.'admin/groups/lists.php">';
    }
    else {
        
        echo "Failed remove groups.";
    }