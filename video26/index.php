<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 26</title>
</head>
<body>
    <?php
     // $GLOBALS
    // $_POST
    // $_GET

    echo $_POST['name'];
    
    ?>

    <form method="POST">
        <input type="hidden" name="name" value="Daniel">
        <button type="submit">PRESS ME!</button>
    </form>
</body>
</html>