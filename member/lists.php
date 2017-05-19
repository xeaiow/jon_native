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
        // 取得使用者列表 *過濾 status = 1 之使用者
        $getUser = $link->query("SELECT * FROM users WHERE status = 0");

        while ($row = $getUser->fetch_assoc()) { ?>

        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['username']?></td>
            <td><?=$row['firstname']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['phone']?></td>
            <td><?=$row['qq_id']?></td>
            <td><?=$row['wechat_id']?></td>
            <td><?=$row['line_id']?></td>
            <td><?=$row['created_at']?></td>
            <td><?=$row['point']?></td>
            <td>
                <button type="button" onclick="location.href='<?=$base_url?>member/edit.php?id=<?=$row['id']?>'">編輯</button>
                <button type="button" onclick="location.href='<?=$base_url?>member/deposit.php?id=<?=$row['id']?>'">加值</button>
                <button type="button" onclick="location.href='<?=$base_url?>member/remove.php?id=<?=$row['id']?>'">刪除</button>
            </td>
        </tr>

    <?php } ?>

    </table>

    
</body>
</html>