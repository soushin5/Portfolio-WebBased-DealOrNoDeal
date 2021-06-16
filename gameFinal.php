<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    $cases = $_SESSION['cases'];
    $chosenCase = $_SESSION['chosenCase'];
    $chosenCaseValue = $_SESSION['chosenCaseValue'];
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" type="text/css" href="StyleSheet.css">
        <link rel="icon" type="image/png" href="case.png" />
        <title>Deal or No Deal</title>
    </head>
    <body>
	   <audio autoplay>
	      <source src="applause.mp3" type="audio/mpeg">
	   </audio>
        <form action="leaderboard.php" method="post">
            <?php
                echo "You won $".$_POST['finalValue']."!";
            ?>
            <input type="hidden" name="finalValue" value="<?php echo $_POST['finalValue']; ?>">
            <br />
            <input class="OG" type="submit" value="Huzzah!" />
        </form>
    </body>
</html>