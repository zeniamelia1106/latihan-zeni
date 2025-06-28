<?php

$nama = $_GET["nama"]; 
$email = $_GET["email"];
$prodi = $_GET["prodi"];
$gambar = $_GET["gambar"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <style>
        .profil {
            width: 350px;
            margin: 30px auto;
            padding: 20px;
            border: 1px solid #aaa;
            border-radius: 12px;
            text-align: center;
        }
        img {
            border-radius: 50%;
            width: 120px;
            height: 120px;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>

<h2 align="center">Profil Mahasiswa</h2>

<div class="profil">
    <img src="img/<?= htmlspecialchars($gambar); ?>" alt="<?= htmlspecialchars($nama); ?>">
    <h3><?= htmlspecialchars($nama); ?></h3>
    <p><?= htmlspecialchars($email); ?></p>
    <p><?= htmlspecialchars($prodi); ?></p>
    <a href="Latihan 5b.php">Kembali ke Daftar</a>
</div>

</body>
</html>
