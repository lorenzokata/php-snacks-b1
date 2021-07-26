<?php

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php
        if (strlen($name) > 3 && strpos($email, '.') && strpos($email, '@') && is_numeric($age)) {
            ?> <h1><?php echo 'Accesso riuscito' ?></h1><?php
        } else {
            ?> <h1><?php echo 'Accesso negato' ?></h1><?php
        }
    ?>
</body>
</html>


<!-- ?name=Giovanni&email=pincopallo@gmail.com&age=26 -->