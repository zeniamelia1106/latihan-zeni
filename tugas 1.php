<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 3. modul 4</title>
</head>
<body>
    
    <fieldset>
        <legend>Pengulangan untuk mencari kategori bilangan : </legend>
        <ul>
            <?php

            function isPrima($n) {
                if ($n <=1) return false;
                for ($i =2; $i <= sqrt($n); $i++) {
                    if ($n % $i == 0) return false;
                }
                return true;
            }
            for ($i = 1; $i <=20; $i++) {
                $jenis = ($i % 2 == 0) ? "genap" : "ganjil";
                $prima = isPrima($i)? "dan sekaligus bilangan prima": "";

                echo "<li>angka $i adalah bilangan $jenis$prima</li>";
            }
            ?>
        </ul>
    </fieldset>
</body>
</html>    