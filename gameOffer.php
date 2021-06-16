<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    $cases = $_SESSION['cases'];
    $chosenCase = $_SESSION['chosenCase'];
    $chosenCaseValue = $_SESSION['chosenCaseValue'];
    $offers = $_SESSION['offers'] + 1;
    $_SESSION['offers'] = $offers;
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
		   <audio autoplay>
		      <source src="phone.mp3" type="audio/mpeg">
		   </audio>
           The banker has an offer.
        <br />
        <?php
            $average=0;
            foreach($cases as $key=>$value)
            {
                if($cases[$key]=="1c")
                    {$average+=.01;}
                else
                    {$average+=intval($cases[$key]);}
            }
            if($chosenCaseValue=="1c")
                {$average+=.01;}
            else
                {$average+=$chosenCaseValue;}
            $average = $average/(sizeof($cases)+1);
            $average = number_format((float)$average, 2, '.', '');
            echo "The Banker is willing to pay $".$average." for your case.";
        ?>
        <form action="gameFinal.php" method="post">
            <input type="hidden" name="finalValue" value="<?php echo $average; ?>">
            <input type="submit" value="DEAL!" />
        </form>
        <form action="gameContinue.php">
            <input type="submit" value="NO DEAL!" />
        </form>
        </div>
        <div id="board">
            <table>
                <?php
                echo "<tr>";
                    if(in_array("1c",$cases) or $chosenCaseValue=="1c")
                        {echo '<td>$.01</td>';}
                    else
                        {echo '<td id="out">$.01</td>';}
                    if(in_array("1000",$cases) or $chosenCaseValue=="1000")
                        {echo '<td>$1000</td>';}
                    else
                        {echo '<td id="out">$1000</td>';}
                echo "</tr>";
                echo '<tr>';
                    if(in_array("1",$cases) or $chosenCaseValue=="1")
                        {echo '<td>$1</td>';}
                    else
                        {echo '<td id="out">$1</td>';}
                    if(in_array("5000",$cases) or $chosenCaseValue=="5000")
                        {echo '<td>$5000</td>';}
                    else
                        {echo '<td id="out">$5000</td>';}
                echo '</tr>';
                echo '<tr>';
                    if(in_array("5",$cases) or $chosenCaseValue=="5")
                        {echo '<td>$5</td>';}
                    else
                        {echo '<td id="out">$5</td>';}
                    if(in_array("10000",$cases) or $chosenCaseValue=="10000")
                        {echo '<td>$10000</td>';}
                    else
                        {echo '<td id="out">$10000</td>';}
                echo '</tr>';
                echo '<tr>';
                    if(in_array("10",$cases) or $chosenCaseValue=="10")
                        {echo '<td>$10</td>';}
                    else
                        {echo '<td id="out">$10</td>';}
                    if(in_array("25000",$cases) or $chosenCaseValue=="25000")
                        {echo '<td>$25000</td>';}
                    else
                        {echo '<td id="out">$25000</td>';}
                echo "</tr>";
                echo '<tr>';
                    if(in_array("25",$cases) or $chosenCaseValue=="25")
                        {echo '<td>$25</td>';}
                    else
                        {echo '<td id="out">$25</td>';}
                    if(in_array("50000",$cases) or $chosenCaseValue=="50000")
                        {echo '<td>$50000</td>';}
                    else
                        {echo '<td id="out">$50000</td>';}
                echo "</tr>";
                echo '<tr>';
                    if(in_array("50",$cases) or $chosenCaseValue=="50")
                        {echo '<td>$50</td>';}
                    else
                        {echo '<td id="out">$50</td>';}
                    if(in_array("75000",$cases) or $chosenCaseValue=="75000")
                        {echo '<td>$75000</td>';}
                    else
                        {echo '<td id="out">$75000</td>';}
                echo "</tr>";
                echo '<tr>';
                     if(in_array("75",$cases) or $chosenCaseValue=="75")
                        {echo '<td>$75</td>';}
                    else
                        {echo '<td id="out">$75</td>';}
                     if(in_array("100000",$cases) or $chosenCaseValue=="100000")
                        {echo '<td>$100000</td>';}
                    else
                        {echo '<td id="out">$100000</td>';}
                echo "</tr>";
                echo '<tr>';
                     if(in_array("100",$cases) or $chosenCaseValue=="100")
                        {echo '<td>$100</td>';}
                    else
                        {echo '<td id="out">$100</td>';}
                    if(in_array("200000",$cases) or $chosenCaseValue=="200000")
                        {echo '<td>$200000</td>';}
                    else
                        {echo '<td id="out">$200000</td>';}
                echo "</tr>";
                echo '<tr>';
                    if(in_array("200",$cases) or $chosenCaseValue=="200")
                        {echo '<td>$200</td>';}
                    else
                        {echo '<td id="out">$200</td>';}
                    if(in_array("300000",$cases) or $chosenCaseValue=="300000")
                        {echo '<td>$300000</td>';}
                    else
                        {echo '<td id="out">$300000</td>';}
                echo "</tr>";
                echo '<tr>';
                    if(in_array("300",$cases) or $chosenCaseValue=="300")
                        {echo '<td>$300</td>';}
                    else
                        {echo '<td id="out">$300</td>';}
                    if(in_array("400000",$cases) or $chosenCaseValue=="400000")
                        {echo '<td>$400000</td>';}
                    else
                        {echo '<td id="out">$400000</td>';}
                echo "</tr>";
                echo '<tr>';
                    if(in_array("400",$cases) or $chosenCaseValue=="400")
                        {echo '<td>$400</td>';}
                    else
                        {echo '<td id="out">$400</td>';}
                    if(in_array("500000",$cases) or $chosenCaseValue=="500000")
                        {echo '<td>$500000</td>';}
                    else
                        {echo '<td id="out">$500000</td>';}
                echo "</tr>";
                echo '<tr>';
                    if(in_array("500",$cases) or $chosenCaseValue=="500")
                        {echo '<td>$500</td>';}
                    else
                        {echo '<td id="out">$500</td>';}
                    if(in_array("750000",$cases) or $chosenCaseValue=="750000")
                        {echo '<td>$750000</td>';}
                    else
                        {echo '<td id="out">$750000</td>';}
                echo "</tr>";
                echo '<tr>';
                    if(in_array("750",$cases) or $chosenCaseValue=="750")
                        {echo '<td>$750</td>';}
                    else
                        {echo '<td id="out">$750</td>';}
                    if(in_array("1000000",$cases) or $chosenCaseValue=="1000000")
                        {echo '<td>$1000000</td>';}
                    else
                        {echo '<td id="out">$1000000</td>';}
                echo "</tr>";
                ?>
            </table>
        </div>
    </body>
</html>