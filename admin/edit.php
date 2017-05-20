<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit - jonLogin</title>
</head>
<body>
    
    <?php 

        require '../config/config.php';
        require '../navbar.php';


        // 取得使用者 id
        $id = $_GET['id'];

        // 取得該使用者資料
        $getMember = $link->query("SELECT member.*, groups.title FROM member, groups  WHERE member.groups = groups.auth AND member.id = '$id'");
        
        // 取得所有群組資料
        $getGroups = $link->query("SELECT * FROM groups");
        
        $memberRow = $getMember->fetch_assoc();

    ?>

    <form action="<?=$base_url?>admin/editHandle.php?id=<?=$memberRow['id']?>" method="POST">

        帳號：<input type="text" name="username" value="<?=$memberRow['username']?>"><br />
        姓名：<input type="text" name="firstname" value="<?=$memberRow['firstname']?>"><br />
        信箱：<input type="text" name="email" value="<?=$memberRow['email']?>"><br />
        手機：<input type="text" name="phone" value="<?=$memberRow['phone']?>"><br />
        QQ：<input type="text" name="qq_id" value="<?=$memberRow['qq_id']?>"><br />
        微信：<input type="text" name="wechat_id" value="<?=$memberRow['wechat_id']?>"><br />
        LINE：<input type="text" name="line_id" value="<?=$memberRow['line_id']?>"><br />
        群組：
        <select name="groups">
        <?php while ($groupsRow = $getGroups->fetch_assoc()) {
                
                // 將當前群組設為 selected
                if ($memberRow['groups'] === $groupsRow['auth']) { ?>

                    <option value="<?=$groupsRow['auth']?>" selected><?=$groupsRow['title']?></option>
            
            <?php }

                else { ?>

                    <option value="<?=$groupsRow['auth']?>"><?=$groupsRow['title']?></option>
            
            <?php } ?>
     
        <?php } ?>

        </select><br />
    
        加入時間：<?=$memberRow['created_at']?><br />
        
        <input type="submit" value="更改">
    </form>

</body>
</html>