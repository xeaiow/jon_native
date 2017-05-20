<?php session_start(); ?>
<?php

    require 'config/config.php';
    
    $username = $_POST['username'];
    $password = sha1($_POST['password']);

    $trylogin = $link->query("SELECT * FROM member WHERE username = '$username' AND password = '$password' LIMIT 1");

    // 登入失敗
    if ($trylogin->num_rows == 0) {

        echo 'not accounts <button onclick="history.back(-1)">back</button>';
        exit();
    }

    // 取得使用者資訊
    $loginRow = $trylogin->fetch_assoc();

    // 注入 sessions
    $_SESSION['username']  = $loginRow['username'];
    $_SESSION['email']     = $loginRow['email'];
    $_SESSION['firstname'] = $loginRow['firstname'];

    // TODO:判斷如果已有舊更新，否則新增
    // 新增登入記錄到 sessions 
    $link->query("INSERT INTO sessions (username) VALUES ('$username') ON DUPLICATE KEY UPDATE updated_at = NOW()");

    header("location:" .$base_url. "lists.php");