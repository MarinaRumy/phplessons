<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 24</title>
</head>
<body>
    <?php
    $x = 5;

    function something(){
        $y = 10;
    }
    echo $y;

    // the code is error because we 
    // cannot figure out where is variable Y at
    // so if we want to use  variable inside our code 
    // and we want to use it outside of function we need to make
    // sure it is inside the global scope and not inside of
    // local scobe
    ?>
</body>
</html>