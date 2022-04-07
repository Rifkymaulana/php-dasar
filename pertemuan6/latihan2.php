<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: green;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(180deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>

<?php
    $numbers = [
        [1,2,3,4,5,6,7,8,9,10],
        [11,22,33,44,55,66,77,88,99,100],
        [111,222,333,444,555,666,777,888,999,1000]
    ];
?>

    <?php foreach($numbers as $a) : ?>
        <?php foreach($a as $number) : ?>
            <div class="kotak"><?php echo $number; ?></div>
        <?php endforeach; ?>
        <div class="clear"></div>
    <?php endforeach; ?>

    <!-- <?= $numbers[2][5]; ?> -->
    
</body>
</html>