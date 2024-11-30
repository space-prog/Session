<?php
    session_start();
    // session_destroy(); //видалення сесії
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="game.php" method="post">
        <label><input type="radio" name="level" value="easy"> Easy</label>
        <label>
            <input type="radio" name="level" value="medium"
                <?php
                    if(isset($_SESSION['globalLevel'])) {
                        $globalLevel = $_SESSION['globalLevel'];
                    } else {
                        $globalLevel = $_SESSION['globalLevel'] = 0;
                    }
                    if($globalLevel == 0) {
                        echo "disabled";
                    }
                ?>
            > Medium
        </label>
        <label>
            <input type="radio" name="level" value="hard"
                    <?php
                        if($globalLevel!== 2) {
                            echo "disabled";
                        }
                    ?>
            > Hard
        </label>
        <input type="hidden" name="game" value="0">
        <input type="hidden" name="victory" value="0">
        <input type="submit">
    </form>
</body>
</html>