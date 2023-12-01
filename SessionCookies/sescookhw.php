<?php
session_start();

$correctuser = "student";
$correctpass = "1941abcd";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (!isset($_SESSION["login_attempts"])) {
        $_SESSION["login_attempts"] = 5;
    } else {
        if ($_SESSION["login_attempts"] > 0) {
            $_SESSION["login_attempts"] = $_SESSION["login_attempts"] - 1;
        }
    }

    $user = $_POST["username"];
    $pass = $_POST["password"];

    if ($user == $correctuser && $pass == $correctpass) {

        $_SESSION["login_attempts"] = 5;

        header("Location: welcometocsci.php");
        exit();
    } else {
        if ($_SESSION["login_attempts"] <= 0) {
            echo '<script>
                    setTimeout(function() {
                        window.location.href = "maxattempts.php";
                    }, 2000); // 2000 milliseconds (2 seconds) delay
                  </script>';
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<body>

<form action="" method="post">
    <h1>Login</h1>
    <label>Attempts remaining: <?php echo ($_SESSION["login_attempts"] > 0) ? ($_SESSION["login_attempts"]) : 0; ?></label><br>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br>

    <input type="submit" name="mybutton" value="Login"><br>
</form>
</body>
</html>


