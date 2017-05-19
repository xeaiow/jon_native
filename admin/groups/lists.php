<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>groupslist - jonLogin</title>
</head>
<body>
    
    <?php
        require '../../config/config.php';
        require '../../navbar.php';
    ?>

    <table border="1">
        <tr>
            <th>id</th>
            <th>群組名稱</th>
            <th>權限值</th>
            <th>使用者管理</th>
            <th>玩家使用者管理</th>
            <th>遊戲伺服器設定</th>
            <th>防火牆管理</th>
            <th>財務報表</th>
            <th>伺服器授權管理</th>
            <th>編輯</th>
        </tr>

    <?php
        $getGroups = $link->query("SELECT * FROM groups");

        while ($row = $getGroups->fetch_assoc()) { ?>

            <tr>
                <td><?=$row['id']?></td>
                <td><?=$row['title']?></td>
                <td><?=$row['auth']?></td>
                <td><?=( $row['manager'] == 1 ) ? '✔' : ''?></td>
                <td><?=( $row['member'] == 1 ) ? '✔' : ''?></td>
                <td><?=( $row['game_server'] == 1 ) ? '✔' : ''?></td>
                <td><?=( $row['firewall'] == 1 ) ? '✔' : ''?></td>
                <td><?=( $row['finance'] == 1 ) ? '✔' : ''?></td>
                <td><?=( $row['server_auth'] == 1 ) ? '✔' : ''?></td>
                <td>
                    <button type="button" onclick="location.href='<?=$base_url?>admin/groups/edit.php?id=<?=$row['id']?>'">編輯</button>
                    <button type="button" onclick="location.href='<?=$base_url?>admin/groups/remove.php?id=<?=$row['id']?>'">刪除</button>
                </td>
            </tr>

    <?php } ?>
    </table>

</body>
</html>