<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video 43</title>
</head>
<body>
    
    <?php
        // echo "test123";
        // echo "<br>";
        // echo password_hash("test123", PASSWORD_DEFAULT);
    
        $input = "test123";
        $hashedPedInDb = password_hash("test123", PASSWORD_DEFAULT);

        echo password_verify($input, $hashedPedInDb);
    ?>

</body>
</html>