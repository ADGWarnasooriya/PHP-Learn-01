<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 3</title>
</head>

<body>
    <p>Date of Birth</p>
    <select>
        <?php

        for ($i = 1980; $i <= 2022; $i++) {
            echo "<option>" . $i . "</option>";
        }

        ?>
    </select>
</body>


</html>