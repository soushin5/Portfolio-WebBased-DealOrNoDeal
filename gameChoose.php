<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    $cases = array("1"=>"1c","2"=>"1","3"=>"5","4"=>"10","5"=>"25","6"=>"50","7"=>"75","8"=>"100","9"=>"200","10"=>"300",
	               "11"=>"400","12"=>"500","13"=>"750","14"=>"1000","15"=>"5000","16"=>"10000","17"=>"25000",
				   "18"=>"50000","19"=>"75000","20"=>"100000","21"=>"200000","22"=>"300000","23"=>"400000",
				   "24"=>"500000","25"=>"750000","26"=>"1000000");
    shuffle($cases);
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
        <h1 class="title">Choose a case:</h1>
        <form action="gamePlay.php" method="post">
            <?php
                foreach($cases as $key=>$value)
                {
                    echo '<label id="case"><input type="radio" name="case" value="'.$key.'">
					      <img alt="case" src="./caseFronts/'.$key.'.png"/></label>';
                }
            ?>
            <br />
            <input class="myChoice" type="submit" value="I've Chosen My Case!"/>
        </form>
    </body>
</html>