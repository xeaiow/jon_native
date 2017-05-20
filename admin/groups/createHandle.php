<?php 

    require '../../config/config.php';
    require '../../config/middleware.php';

    $title       = $_POST['title'];
    $auth        = $_POST['auth'];
    $manager     = ( $_POST['func_1'] == 1 ? 1:0);
    $member      = ( $_POST['func_2'] == 1 ? 1:0);
    $game_server = ( $_POST['func_3'] == 1 ? 1:0);
    $firewall    = ( $_POST['func_4'] == 1 ? 1:0);
    $finance     = ( $_POST['func_5'] == 1 ? 1:0);
    $server_auth = ( $_POST['func_6'] == 1 ? 1:0);


    $link->query(
        "INSERT INTO 
            groups 
                ( title, auth, manager, member, game_server, firewall, finance, server_auth ) 
            VALUES 
                ( '$title', '$auth', '$manager', '$member', '$game_server', '$firewall', '$finance', '$server_auth' )"
    );

    // 是否操作成功
    echo ( $link->affected_rows == 1 ) 
    ? 
        header("location:" .$base_url. "admin/groups/lists.php")
    : 
        'Failed create groups.';