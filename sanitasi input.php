<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sanitasi input</title>
</head>
<body>
    
    <form action="selamat_datang.php" method="post">
        nama anda: <input type="text" name="nama">
        <input type="submit" value="kirim">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = htmlspecialchars($_POST ["nama"]);
        echo "<h2>Welcome to the jungle, $nama!</h2>";
    }
    ?>

</body>
</html>