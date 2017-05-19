<?php 

    require '../../config/config.php';

    // 取得群組 id
    $id = $_GET['id'];

    $title          = $_POST['title'];
    $manager        = $_POST['manager'];
    $member         = $_POST['member'];
    $game_server    = $_POST['game_server'];
    $firewall       = $_POST['firewall'];
    $finance        = $_POST['finance'];
    $server_auth    = $_POST['server_auth'];

    $link->query("UPDATE groups SET title = '$title', manager = '$manager', member = '$member', game_server = '$game_server', firewall = '$firewall', finance = '$finance', server_auth = '$server_auth' WHERE auth = '$id'");

    // 是否成功操作
    if ($link->affected_rows > 0) {

        echo '<meta http-equiv="refresh" content="0;url='.$base_url.'admin/groups/lists.php">';
    }
    else {
        
        echo "Failed update groups.";
    }
