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
    $point      = $_POST['point'];

    // 新增使用者
    $link->query(
        "INSERT INTO 
            users 
                (username, password, firstname, email, phone, qq_id, wechat_id, line_id, point) 
            VALUES 
                ('$username', '$password', '$firstname', '$email', '$phone', '$qq_id', '$wechat_id', '$line_id', '$point')"
    );

    // 是否成功操作
    echo ( $link->affected_rows > 0 ) 
    ? 
        header("location:" .$base_url. "member/lists.php")
    : 
        'Failed create user or email, username, repeat.';
