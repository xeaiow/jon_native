<?php 

    require '../config/config.php';
    require '../config/middleware.php';

    $username   = $_POST['username'];
    $password   = sha1($_POST['password']); 
    $firstname  = $_POST['firstname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $qq_id      = $_POST['qq_id'];
    $wechat_id  = $_POST['wechat_id'];
    $line_id    = $_POST['line_id'];
    $groups     = $_POST['groups'];

    // 新增管理員
    $link->query(
        "INSERT INTO 
            member 
                (username, password, firstname, email, phone, qq_id, wechat_id, line_id, groups) 
            VALUES 
                ('$username', '$password', '$firstname', '$email', '$phone', '$qq_id', '$wechat_id', '$line_id', '$groups')"
    );

    // 是否操作成功
    echo ( $link->affected_rows == 1 ) 
    ? 
        header("location:" .$base_url. "lists.php")
    : 
        'Failed create member.';
