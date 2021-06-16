<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    $cases = $_SESSION['cases'];
    $chosenCase = $_SESSION['chosenCase'];
    $chosenCaseValue = $_SESSION['chosenCaseValue'];
    $openedCase = $_POST["case"];
    $openedCaseValue = $cases[$openedCase];
    unset($cases[$openedCase]);
    $_SESSION['cases']=$cases;
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
	   <div>
          <h2>That Case's Value Was...<h2>
	   </div>
	   <div>
          <form action="gameContinue.php">
             <?php
                echo '<img alt="case" src="./caseBacks/'.$openedCaseValue.'.png" />';
             ?>
             <br>
             <input class="OG" type="submit" value="Wow!" />
          </form>
	   </div>
    </body>
</html>