<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memberDeposit - jonLogin</title>
</head>
<body>

<?php

    require '../config/config.php';
    require '../navbar.php';

    $id = $_GET['id'];

    $getUser = $link->query("SELECT * FROM users WHERE status = 0 AND id = '$id'");
    $userRow = $getUser->fetch_assoc();
?>

    <table border="1">
        <tr>
            <th>帳號</th>
            <th>姓名</th>
            <th>目前點數</th>
        </tr>

        <tr>
            <td><?=$userRow['username']?></td>
            <td><?=$userRow['firstname']?></td>
            <td><?=$userRow['point']?></td>
        </tr>

    </table><br />

    <form action="<?=$base_url?>member/depositHandle.php?id=<?=$userRow['id']?>" method="POST">
        <input type="number" placeholder="欲加值點數" name="point"> <input type="submit" value="加值">
    </form>

</body>
</html>