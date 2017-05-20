<?php 

    require '../config/config.php';
    require '../config/middleware.php';

    // 取得使用者 id
    $id = $_GET['id'];

    $username   = $_POST['username'];
    $firstname  = $_POST['firstname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $qq_id      = $_POST['qq_id'];
    $wechat_id  = $_POST['wechat_id'];
    $line_id    = $_POST['line_id'];
    $groups     = $_POST['groups'];

    // 編輯管理員
    $link->query(
        "UPDATE 
            member 
        SET 
            username    = '$username', 
            firstname   = '$firstname', 
            email       = '$email', 
            phone       = '$phone', 
            qq_id       = '$qq_id', 
            wechat_id   = '$wechat_id', 
            line_id     = '$line_id', 
            groups      = '$groups' 
        WHERE 
            id = '$id'"
    );

    // 是否成功操作
    echo ( $link->affected_rows == 1 ) 
    ? 
        header("location:" .$base_url. "lists.php")
    : 
        'Failed update member or not change fields.';