<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>createGroups - jonLogin</title>
</head>
<body>
    
    <?php 

        require '../../config/config.php';
        require '../../navbar.php';

    ?>

    <form action="<?=$base_url?>admin/groups/createHandle.php" method="POST">

        群組名稱：<input type="text" name="title"><br/>

        群組權限值：<input type="number" name="auth"><br/>

        功能：

        <?php
            $getFunction = $link->query("SELECT * FROM function");
            while ($row = $getFunction->fetch_assoc()) {

                echo '<input type="checkbox" name="func_'.$row['id'].'" value="1">'.$row['title'].''; 
            }
        ?>
        
        <br />

        <input type="submit" value="新增"><br />

    </form>


</body>
</html>