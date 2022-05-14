<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 42 | Error handler tutorial!</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Signup</h2>
    <form action="signup.inc.php" method="POST">
        <?php
            if (isset($_GET['first'])) {
                $first = $_GET['first'];
                echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
            }
            else {
                echo '<input type="text" name="first" placeholder="Firstname">';
            }
        ?>
    <br>
        <?php
            if (isset($_GET['last'])) {
                $last = $_GET['last'];
                echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'">';
            }
            else {
                echo '<input type="text" name="last" placeholder="Lastname">';
            }
        ?>
    <br>
        <input type="text" name="email" placeholder="E-mail">
    <br>
        <?php
            if (isset($_GET['uid'])) {
                $uid = $_GET['uid'];
                echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
            }
            else {
                echo '<input type="text" name="uid" placeholder="Username">';
            }
        ?>
    <br>
        <input type="password" name="pwd" placeholder="Password">
    <br>
        <button type="submit" name="submit">Sign Up</button>
    </form>
<?php

    // $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

    // if (strpos($fullUrl, "signup=empty") == true) {
    //     echo "<p class='error'>You did not fill in all the fields!</p>";
    //     exit();
    // }
    // elseif (strpos($fullUrl, "signup=char") == true) {
    //     echo "<p class='error'>You used invalid characters!</p>";
    //     exit();
    // }
    // elseif (strpos($fullUrl, "signup=email") == true) {
    //     echo "<p class='error'>You used an invalid e-mail!</p>";
    //     exit();
    // }
    // elseif (strpos($fullUrl, "signup=success") == true) {
    //     echo "<p class='error'>You have been signed up!</p>";
    //     exit();
    // }
        if (!isset($_GET['signup'])) {
            exit();
        }
        else {
            $signupCheck = $_GET['signup'];

            if ($signupCheck == "empty") {
                echo "<p class='error'>You did not fill in all the fields!</p>";
                exit();
            }
            elseif ($signupCheck == "char") {
                echo "<p class = 'error'>You used invalid characters!</p>";
                exit();
            }
            elseif ($signupCheck == "email") {
                echo "<p class = 'error'>You used an invalid e-mail!</p>";
                exit();
            }
            elseif ($signupCheck == "success") {
                echo "<p class = 'success'>You have been signed up!</p>";
                exit();
            }
        } 
        
?>

</body>
</html>