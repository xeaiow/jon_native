<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>memberLists - jonLogin</title>
</head>
<body>

<?php

    require '../config/config.php';
    require '../navbar.php';
    
    $keywords = $_POST['keywords'];

    $searchUser = $link->query("SELECT * FROM users WHERE status = 0 AND id LIKE '%$keywords%' OR firstname LIKE '%$keywords%' OR email LIKE '%$keywords%'");
    $userCounts = $searchUser->num_rows;

    // 判斷是否存在搜尋的使用者
    if ($userCounts == 0) {

        echo 'not found <button onclick="history.back(-1)">back</button>';
        exit();
    }

?>

    <form action="<?=$base_url?>member/search.php" method="post">    
        搜尋使用者：<input type="text" placeholder="輸入編號、帳號、信箱搜尋" name="keywords">
        <input type="submit" value="搜尋">
    </form><br/>

    <table border="1">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>firstname</th>
            <th>email</th>
            <th>phone</th>
            <th>QQ</th>
            <th>Wechat</th>
            <th>LINE</th>
            <th>加入時間</th>
            <th>點數</th>
            <th>編輯</th>
        </tr>

<?php
        while ($userRow = $searchUser->fetch_assoc()) { ?>

        <tr>
            <td><?=$userRow['id']?></td>
            <td><?=$userRow['username']?></td>
            <td><?=$userRow['firstname']?></td>
            <td><?=$userRow['email']?></td>
            <td><?=$userRow['phone']?></td>
            <td><?=$userRow['qq_id']?></td>
            <td><?=$userRow['wechat_id']?></td>
            <td><?=$userRow['line_id']?></td>
            <td><?=$userRow['created_at']?></td>
            <td><?=$userRow['point']?></td>
            <td>
                <button type="button" onclick="location.href='<?=$base_url?>member/edit.php?id=<?=$userRow['id']?>'">編輯</button>
                <button type="button" onclick="location.href='<?=$base_url?>member/deposit.php?id=<?=$userRow['id']?>'">加值</button>
                <button type="button" onclick="location.href='<?=$base_url?>member/remove.php?id=<?=$userRow['id']?>'">刪除</button>
            </td>
        </tr>
        
    <?php } ?>

    </table>

</body>
</html>