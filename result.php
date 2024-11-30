<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $level = $_SESSION['level'];
        $globalLevel = $_SESSION['globalLevel'];
        $victory = $_SESSION['victory'];
        if($victory <= 5) {
            if($level == 'easy' && $globalLevel == 0 || $level == medium && $globalLevel == 1) {
                $_SESSION['globalLevel'] = ++$globalLevel;
            }
        }
    ?>
</body>
</html>