<!DOCTYPE html>
<html>
<head>
    <title>Input Warna Balon</title>
</head>
<body>

<h2>Masukkan 4 Warna Balon:</h2>
<form method="post">
    Warna 1: <input type="text" name="warna[]"><br>
    Warna 2: <input type="text" name="warna[]"><br>
    Warna 3: <input type="text" name="warna[]"><br>
    Warna 4: <input type="text" name="warna[]"><br>
    <input type="submit" value="Tampilkan Lagu">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $warna = $_POST["warna"];

    if (count($warna) == 4 && !in_array("", $warna)) {
        echo "<h3>Hasil Lagu:</h3>";
        echo "Balonku ada lima.<br>";
        echo "Rupa-rupa warnanya<br>";
        echo "$warna[0], $warna[1], $warna[2], $warna[3], dan biru<br>";
        echo "Meletus balon $warna[0] DOR!!!<br>";
        echo "Hatiku sangat kacau.";
    } else {
        echo "<p style='color:red;'>Harap isi keempat warna!</p>";
    }
}
?>

</body>
</html>
