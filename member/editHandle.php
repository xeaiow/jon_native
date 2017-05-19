<?php 

    require '../config/config.php';

    // 取得使用者 id
    $id = $_GET['id'];

    $username   = $_POST['username'];
    $firstname  = $_POST['firstname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $qq_id      = $_POST['qq_id'];
    $wechat_id  = $_POST['wechat_id'];
    $line_id    = $_POST['line_id'];
    $point      = $_POST['point'];

    $link->query("UPDATE users SET username = '$username', firstname = '$firstname', email = '$email', phone = '$phone', qq_id = '$qq_id', wechat_id = '$wechat_id', line_id = '$line_id', point = '$point' WHERE id = '$id'");

    // 是否成功操作
    if ($link->affected_rows > 0) {

        echo '<meta http-equiv="refresh" content="0;url='.$base_url.'member/lists.php">';
    }
    else {
        
        echo "Failed update user.";
    }
