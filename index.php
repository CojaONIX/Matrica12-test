<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrica12</title>

    <style>
        p {
            width: 30px;
            height: 30px;
            margin: 5px;
            padding: 5px;
            border: 2px solid black;
            display: inline-block;
        }
    </style>
</head>

<body>
    <?php
        $n = rand(2, 11);
        $martica = array();
        for($i=0; $i<$n; $i++) {
            for($j=0; $j<$n; $j++) {
                $val = $j - $i < 0 ? 0 : $j - $i + 1;
                $martica[$i][$j] = $val;
            }
        }

        for($i=0; $i<$n; $i++) {
            for($j=0; $j<$n; $j++) {
                echo "<p>{$martica[$i][$j]}</p>";
            }
            echo "<br>";
        }
    ?>
</body>
</html>