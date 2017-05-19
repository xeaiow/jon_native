<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>editGroups - jonLogin</title>
</head>
<body>
    
    <?php 

        require '../../config/config.php';
        require '../../navbar.php';


        // 取得使用這 id
        $id = $_GET['id'];

        // 取得該群組資料
        $getGroups   = $link->query("SELECT * FROM groups WHERE id = '$id'");

        // 取得所有群組功能
        $getFunction = $link->query("SELECT * FROM function");

        $groupsRow   = $getGroups->fetch_assoc();
        
        // 宣告 functionArray 作為 function 儲存容器
        $functionArray = array();

        // 將功能名稱存入 functionArray 陣列
        while ($functionRow = $getFunction->fetch_row()) {
            $functionArray[] = $functionRow[1];
        }
    ?>

    <form action="<?=$base_url?>admin/groups/editHandle.php?id=<?=$groupsRow['id']?>" method="POST">

        群組名稱：<input type="text" name="title" value="<?=$groupsRow['title']?>"><br/>

        功能：
        
        <input type="checkbox" name="manager" value="1" <?=($groupsRow['manager'] == 1 ) ? 'checked' : ''?>> <?=$functionArray[0]?>
        <input type="checkbox" name="member" value="1" <?=($groupsRow['member'] == 1 ) ? 'checked' : ''?>> <?=$functionArray[1]?>
        <input type="checkbox" name="game_server" value="1" <?=($groupsRow['game_server'] == 1 ) ? 'checked' : ''?>> <?=$functionArray[2]?>
        <input type="checkbox" name="firewall" value="1" <?=($groupsRow['firewall'] == 1 ) ? 'checked' : ''?>> <?=$functionArray[3]?>
        <input type="checkbox" name="finance" value="1" <?=($groupsRow['finance'] == 1 ) ? 'checked' : ''?>> <?=$functionArray[4]?>
        <input type="checkbox" name="server_auth" value="1" <?=($groupsRow['server_auth'] == 1 ) ? 'checked' : ''?>> <?=$functionArray[5]?>

        <br />

        <input type="submit" value="更改"><br />

    </form>

</body>
</html>