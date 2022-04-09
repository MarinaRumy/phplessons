<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 16</title>
    <link rel="stylesheet" type="text/css" href="style.css";>
</head>
<body>
    <?php
    $date = date("w");
    // echo $date
    switch ($date) {
        case 1 :
            echo "It is Monday!";
            break;
        case 2 :
            echo "It is Tuesday!";
            break;
        case 3 :
            echo "It is Wednesday!";
            break;
        case 4 :
            echo "It is Thursday!";
            break;
        case 5 :
            echo "It is Friday!";
            break;
        case 6 :
            echo "<p>It is Saturday!</p>";
            break;
        case 0 :
            echo "It is Sunday!";
            break;
        
    }
    ?>
</body>
</html>