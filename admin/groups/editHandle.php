<?php 

    require '../../config/config.php';
    require '../../config/middleware.php';

    // 取得群組 id
    $id = $_GET['id'];

    $title          = $_POST['title'];
    $manager        = $_POST['manager'];
    $member         = $_POST['member'];
    $game_server    = $_POST['game_server'];
    $firewall       = $_POST['firewall'];
    $finance        = $_POST['finance'];
    $server_auth    = $_POST['server_auth'];

    // 編輯群組
    $link->query(
        "UPDATE 
            groups 
        SET 
            title       = '$title', 
            manager     = '$manager', 
            member      = '$member', 
            game_server = '$game_server', 
            firewall    = '$firewall', 
            finance     = '$finance', 
            server_auth = '$server_auth' 
        WHERE 
            id = '$id'"
    );

    // 是否操作成功
    echo ( $link->affected_rows == 1 ) 
    ? 
        header("location:" .$base_url. "admin/groups/lists.php")
    : 
        'Failed update groups.';
