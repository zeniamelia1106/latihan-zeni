<?php

$nilai1 = "";
$nilai2 = 0;
$nilai3 = "Belajar PHP";


echo "Hasil isset: <br>";
echo "nilai1: " . (isset($nilai1) ? "ada<br>": "tidak ada<br>");
echo "nilai2: " . (isset($nilai2) ? "ada<br>": "tidak ada<br>");
echo "nilai3: " . (isset($nilai3) ? "ada<br>": "tidak ada<br>");


echo "<br>Hasil empty:<br>";
echo "nilai1: " . (empty($nilai1) ? "kosong<br>" : "tidak kosong<br>");
echo "nilai2: " . (empty($nilai2) ? "kosong<br>" : "tidak kosong<br>");
echo "nilai3: " . (empty($nilai3) ? "kosong<br>" : "tidak kosong <br>");

?>