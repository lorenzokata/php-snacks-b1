<?php

$calendario=[
    [
        'Home' => 'Milano',
        'Visitors' => 'Bologna',
        'Home pt' => 77,
        'Visitors pt' => 83
    ],
    [
        'Home' => 'Venezia',
        'Visitors' => 'Bologna',
        'Home pt' => 80,
        'Visitors pt' => 95
    ],
    [
        'Home' => 'Brindisi',
        'Visitors' => 'Sassari',
        'Home pt' => 95,
        'Visitors pt' => 84
    ],
    [
        'Home' => 'Trieste',
        'Visitors' => 'Bologna',
        'Home pt' => 96,
        'Visitors pt' => 105
    ],
]

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
    <h2>Calendario partite Serie A basket 2020/2021</h2>
    <ul>
        <?php for ($i=0; $i < count($calendario); $i++) { ?>

            <li><?php echo $calendario[$i]['Home'] ?> - <?php echo $calendario[$i]['Visitors'] ?> | <?php echo $calendario[$i]['Home pt'] ?>-<?php echo $calendario[$i]['Visitors pt'] ?></li>

        <?php } ?>
    </ul>
</body>
</html>