<?php
    session_start();
    if (isset($_SESSION['login']))
    {
        header("location: index.php");
        exit;
    }
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <header>
        <h1>Selamat Datang di SBL Library</h1>
        <h3>Silahkan Login Untuk Melanjutkan</h3>
    </header>


    <?php 
        if (isset($_GET['ket']))
            if ($_GET['ket'] == 'failed') :?>
                <p style="color: red;font-style:italic;">proses autentikasi salah</p>
    <?php endif; ?>


    <form action="proses_login.php" method="POST">
        <p>
            <label for="username">Username : </label>
            <input type="text" id="username" name="username">
        </p>

        <p>
            <label for="password">Password : </label>
            <input type="password" id="password" name="password">
        </p>
        <p>
            <button type="submit" value="login" name="login">Login</button>
        </p>
    </form>
    <footer>@Copyright SBL 2021</footer>
</body>
</html>