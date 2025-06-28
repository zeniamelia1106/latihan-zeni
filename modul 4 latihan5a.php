<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 5a</title>
    <style>
        body {
            font-family: monospace;
            padding: 20px;
        }
        .output {
            white-space: pre;
            font-size: 16px;
        }
    </style>
</head>
<body>

<h2>Deret Angka Berurut</h2>

<form method="get" action="">
    <label for="angka">Masukkan angka: </label>
    <input type="number" id="angka" name="angka" required>
    <button type="submit">Tampilkan</button>
</form>

<div class="output">
<?php
if (isset($_GET['angka'])) {
    $n = intval($_GET['angka']);
    for ($i = $n; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "\n";
    }
}
?>
</div>

</body>
</html>
