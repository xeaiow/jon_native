<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>createUser - jonLogin</title>
</head>
<body>
    
    <?php 

        require '../config/config.php';
        require '../navbar.php';

    ?>

    <form action="<?=$base_url?>member/createHandle.php" method="POST">

        帳號：<input type="text" name="username"><br />
        密碼：<input type="password" name="password"><br />
        姓名：<input type="text" name="firstname"><br />
        信箱：<input type="text" name="email"><br />
        手機：<input type="text" name="phone"><br />
        QQ：<input type="text" name="qq_id"><br />
        微信：<input type="text" name="wechat_id"><br />
        LINE：<input type="text" name="line_id"><br />
        點數：<input type="number" name="point"><br />
        
        <input type="submit" value="新增">

    </form>


</body>
</html>