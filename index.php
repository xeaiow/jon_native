<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jonLogin</title>
</head>
<body>
    
    <?php
        require 'config/config.php';
        require 'navbar.php';
    ?>

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
            <th>群組</th>
            <th>加入時間</th>
            <th>編輯</th>
        </tr>
        <?php
            // 取得管理員列表 *過濾 status = 1 之使用者
            $getMember = $link->query("SELECT member.*, groups.title FROM member, groups WHERE status = 0 AND member.groups = groups.auth");

            while ($row = $getMember->fetch_assoc()) { ?>

                <tr>
                    <td><?=$row['id']?></td>
                    <td><?=$row['username']?></td>
                    <td><?=$row['firstname']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['phone']?></td>
                    <td><?=$row['qq_id']?></td>
                    <td><?=$row['wechat_id']?></td>
                    <td><?=$row['line_id']?></td>
                    <td><?=$row['title']?></td>
                    <td><?=$row['created_at']?></td>
                    <td>
                        <button type="button" onclick="window.location='<?=$base_url?>admin/edit.php?id=<?=$row['id']?>'">編輯</button>
                        <button type="button" onclick="window.location='<?=$base_url?>admin/remove.php?id=<?=$row['id']?>'">刪除</button>
                    </td>
                </tr>
    <?php } ?>
    </table>

</body>
</html>