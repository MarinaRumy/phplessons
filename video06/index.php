<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo strlen("Hi Marina");
    //    counting letter
        echo str_word_count("Hi Marina");
    //    counting words
        echo strrev("Hi Marina");
    // reverse sentence
        echo strpos("Hi Marina","Marina");
    // position
    echo str_replace("Marina","Jason","Hi Marina");
    // replace words

    ?>
</body>
</html