<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    $user = $_SESSION['user'];
    $userScore = $_POST['finalValue'];
    $scoreArray=$_SESSION['scoreArray']; //this is initialized in index, so if you don't go through the index it doesn't exist, also if you go back to index it'll murder this array
    $scoreArray[$user] = $userScore;
    $_SESSION['scoreArray']=$scoreArray;
    arsort($scoreArray);
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
        <h1>Leader Board</h1>
		<div class="rules">
           <ol>
            <?php
                foreach($scoreArray as $name=>$score)
                {
                    echo '<li>'.$name.' $'.$score.'</li>';
                }
            ?>
           </ol>
		   <p>
		      <a class="rPage" href="login.php">play again?</a> <!--IT IS VERY IMPORTANT THAT YOU DO NOT GO BACK TO INDEX.PHP-->
		   </p>
		</div>
    </body>
</html>