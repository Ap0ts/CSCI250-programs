<html>

<form method= "post">
<input type = "text" name = "guess_number" >
<label>Guess the secret</label>

<input type = "submit" value = "guess"  >


</form>

</html>


<?php
session_start();
if(!isset($_SESSION["count"]))
{
$_SESSION["count"] = 5;

}

else{
    if($_SESSION["count"]== 0)

        echo("you have tried 5 times.");
        exit;
    }



else {

    $_SESSION["count"] = $_SESSION["count"] - 1;
    $secret = 17;

    $guess = $_POST["guess_number"];


    if(isset($guess)) {

    if ($guess > $secret) {
        echo("Too large, try again");


    }

    else if ($guess < $secret)   {

        echo("too small, try again");  
    }

    else ($guess = $secret)   {

            echo("perf, good job");
    }
}

