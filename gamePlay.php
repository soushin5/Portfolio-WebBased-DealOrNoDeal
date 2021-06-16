<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    $cases = $_SESSION['cases'];
    $chosenCase = $_POST["case"];
    $chosenCaseValue = $cases[$chosenCase];
    unset($cases[$chosenCase]);
    $offers = 0;
    $_SESSION['offers']=$offers;
    $_SESSION['cases']=$cases;
    $_SESSION['chosenCase'] = $chosenCase;
    $_SESSION['chosenCaseValue'] = $chosenCaseValue;
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
        <div id="caseDiv">
            <h1>Open a Case:</h1>
            <form action="gameOpen.php" method="post">
                <?php
                    foreach($cases as $key=>$value)
                        {
                            echo '<label id="case"><input type="radio" name="case" value="'.$key.'"><img alt="case" src="./caseFronts/'.$key.'.png"/></label>';
                        }
                ?>
                <br />
                <input class="myChoice" type="submit" value="Open This Case!"/>
            </form>
        </div>
        <div id="board">
            <table>
                <tr>
                    <td>$.01</td>
                    <td>$1000</td>
                </tr>
                <tr>
                    <td>$1</td>
                    <td>$5000</td>
                </tr>
                <tr>
                    <td>$5</td>
                    <td>$10000</td>
                </tr>
                <tr>
                    <td>$10</td>
                    <td>$25000</td>
                </tr>
                <tr>
                    <td>$25</td>
                    <td>$50000</td>
                </tr>
                <tr>
                    <td>$50</td>
                    <td>$75000</td>
                </tr>
                <tr>
                    <td>$75</td>
                    <td>$100000</td>
                </tr>
                <tr>
                    <td>$100</td>
                    <td>$200000</td>
                </tr>
                <tr>
                    <td>$200</td>
                    <td>$300000</td>
                </tr>
                <tr>
                    <td>$300</td>
                    <td>$400000</td>
                </tr>
                <tr>
                    <td>$400</td>
                    <td>$500000</td>
                </tr>
                <tr>
                    <td>$500</td>
                    <td>$750000</td>
                </tr>
                <tr>
                    <td>$750</td>
                    <td>$1000000</td>
                </tr>
            </table>
        </div>
    </body>
</html>