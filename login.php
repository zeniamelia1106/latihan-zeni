<?php
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "admin" && $password == "admin") {
        header("Location: admin.php");
        exit;
    } else {
        $error = "Username atau Password salah!!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        
        .container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: center;
            box-shadow: 0 0 10px #ddd;
        }
        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 8px;
            margin: 5px 0;
        }
        .error {
            color: red;
            font-size: 14px;
        }
        .title {
            font-size: 20px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="title">Login</div>
    <form method="post" action="">
        <div>
            Username<br>
            <input type="text" name="username" required>
        </div>
        <div>
            Password<br>
            <input type="password" name="password" required>
        </div>
        <br>
        <input type="submit" value="Log In">
        <?php if ($error): ?>
            <p class="error"><?= $error ?></p>
        <?php endif; ?>
    </form>
</div>

</body>
</html>
