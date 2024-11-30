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
        if(isset($_POST["level"])) {
            $level = $_SESSION['level'] = $_POST["level"];
            $game = $_SESSION['game'] = $_POST["game"];
            $victory = $_SESSION['victory'] = $_POST["victory"];
        } else {
            $level = $_SESSION['level'];
            $game = $_SESSION['game'];
            $victory = $_SESSION['victory'];
        }

        if(isset($_POST["choise"])) {
            $rand = rand(0, 1);
            $_SESSION['game'] = ++$game;
            echo "games $game <br>";
            $choise = $_POST['choise'];
            if($choise == $rand) {
                $_SESSION['victory'] = ++$victory;
                echo "win $victory <br>";
            } else {
                echo "you lose";
            }
        }


    ?>
    <form action="
        <?php
            if($game < 10) {
                echo "game.php";
            } else {
                echo "result.php";
            }
        ?>
    " method="post">

            <?php
                if($game < 10) {
                    echo '
                        <label>
                            <input type="submit" name="choise" value="0">orel
                        </label>
                        <label>
                            <input type="submit" name="choise" value="1">reshka
                        </label>
                    ';
                } else {
                    echo '
                        <button type="submit">show results</button>
                    ';
                }
            ?>

    </form>
</body>
</html>