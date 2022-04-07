<?php

// perulangan pada array
// for / foreach
$angka = [3, 4, 45, 23, 245, 9823, 997, 879, 8786, 6554];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i=0; $i< count($angka); $i++) { ?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $nomer) {?>
        <div class="kotak"><?php echo $nomer; ?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $nomer) : ?>
        <div class="kotak"><?php echo $nomer; ?></div>
    <?php endforeach; ?>

    
</body>
</html>