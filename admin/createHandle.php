<?php 

    require '../config/config.php';

    $username   = $_POST['username'];
    $password   = sha1($_POST['password']); 
    $firstname  = $_POST['firstname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $qq_id      = $_POST['qq_id'];
    $wechat_id  = $_POST['wechat_id'];
    $line_id    = $_POST['line_id'];
    $groups     = $_POST['groups'];
    $now        = date("Y-m-d H:i:s");

    $link->query("INSERT INTO member (username, password, firstname, email, phone, qq_id, wechat_id, line_id, groups) VALUES ('$username', '$password', '$firstname', '$email', '$phone', '$qq_id', '$wechat_id', '$line_id', '$groups')");

    // 是否成功操作
    if ($link->affected_rows > 0) {

        echo '<meta http-equiv="refresh" content="0;url='.$base_url.'">';
    }
    else {
        
        echo "Failed create member.";
    }
