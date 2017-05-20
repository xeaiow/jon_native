<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sessions - jonLogin</title>
</head>
<body>
    
    <?php
        require 'config/config.php';
        require 'navbar.php';
        
        // 取得最新的 500 筆 sessions 資料
        $getSessions = $link->query("SELECT DISTINCT username, id, updated_at FROM sessions GROUP BY username ORDER BY id DESC LIMIT 500");
    ?>

<table border="1">
    <tr>
        <th>id</th>
        <th>帳號</th>
        <th>登入時間</th>
    </tr>

    <?php

        while ($sessionsRow = $getSessions->fetch_assoc()) { ?>

            <tr>
                <td><?=$sessionsRow['id']?></td>
                <td><?=$sessionsRow['username']?></td>
                <td><?=$sessionsRow['updated_at']?></td>
            </tr>

    <?php } ?>
    
</table>


</body>
</html>