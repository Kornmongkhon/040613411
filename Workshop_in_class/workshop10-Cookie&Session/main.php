<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
</head>

<body>
    <?php if($_COOKIE['lang'] == 'en'):?>
        <h1>Welcome</h1>
    <?php elseif($_COOKIE['lang'] == 'th'): ?>
        <h1>ยินดีต้อนรับ</h1>
    <?php endif;?>
</body>

</html>