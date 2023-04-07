<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Numbers</title>
</head>
<body>
    <?php

    echo "<h1><p> Welcome to Even Number Count </h1></p>";

    $currentNum = 1;

    while ($currentNum <= 100) {
        if ($currentNum % 2 == 0){
            echo "<h2>" . $currentNum . "</h2><br>";
        }
        $currentNum++;
    }

    ?>
</body>
</html>