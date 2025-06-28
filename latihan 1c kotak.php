<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kotak 3. modul 3</title>
    <style>
        .kotak {
            width: 40px;
            height: 40px;
            border: 1px solid black;
            text-align: center;
            line-height: 40px;
            float: left;
            margin: 2px;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
</body>
    <?php
    $huruf = ['A', 'B', 'C'];
    $jumlahBaris = 3;
        for ($baris =1; $baris <= $jumlahBaris; $baris++) {
            for ($kolom =1; $kolom <= $baris; $kolom++) {
             if (isset($huruf[$kolom -1])) {
                echo "<div class='kotak'>{$huruf[$kolom - 1]}</div>";
            }
        }
        echo "<div class= 'clear'></div>";
    }
    ?>
</body>
</html>