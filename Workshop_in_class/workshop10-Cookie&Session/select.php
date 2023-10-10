<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>workshop1</title>
</head>
<body>
    
    
    <?php 
        if(empty($_COOKIE['lang'])){
            setcookie('lang',0,time() + 3600 * 24);
        }
    ?>
    <?php if(!isset($_COOKIE['lang'])):?>
        <h3>Don't have any cookie!</h3>
    <?php elseif(isset($_COOKIE['lang'])):?>
        <a href="select.php?lang=en">en</a>
        <a href="select.php?lang=th">th</a>
        <?php if($_GET['lang']):?>
            <?php
                $lang = $_GET['lang'];
                setcookie('lang',$lang,time() + 3600 *24);
            ?>
        <?php endif;?>
    <?php endif;?>
</body>
</html>