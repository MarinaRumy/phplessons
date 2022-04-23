<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 27</title>
</head>

<body>

    <?php
    /*
    $_COOKIE to save non dangerous information from a user
    $_SESSION to remember user when they log in to a web
    */
    setcookie("name","Daniel", time() - 86400);

    $_SESSION['name'] = "12";
    /*
    setcookie("name","Daniel", time() - 1);
    to destroy the cookie right away, change the + to -
    + 86400 the cookie will destroy within a day
    */
    ?>
</body>
</html>