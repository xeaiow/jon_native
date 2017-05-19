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
    $groups      = $_POST['groups'];

    $updateMember = $link->query("UPDATE member SET username = '$username', firstname = '$firstname', email = '$email', phone = '$phone', qq_id = '$qq_id', wechat_id = '$wechat_id', line_id = '$line_id', groups = '$groups' WHERE id = '$id'");

    if ($link->affected_rows > 0) {

        echo '<meta http-equiv="refresh" content="0;url='.$base_url.'">';
    }
    else {
        
        echo "Failed update member.";
    }
