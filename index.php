<?php
    session_start();
    if (!isset($_SESSION['login']))
        header('location: login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <h3>Dashboard</h3>
        <h1>SBL Project</h1>
    </header>

    
    <?php 
        if (isset($_SESSION['account']))
        {
            $akun = $_SESSION['account'];
            echo "Selamat Datang Kembali ".$akun." !!";
        }
    ?>


    <h4>Menu</h4>

    <nav>
        <ul>
            <li><a href="anggota/anggota.php">Daftar Anggota</a></li>
            <li><a href="buku/buku.php">Daftar Buku</a></li>
            <li><a href="pinjam/datapinjam.php">Data Peminjaman</a></li>
            <li><a href="denda/denda.php">Daftar Denda</a></li></li>
        </ul>
    </nav>

    <br>
    <br>
    <p>
        <a href="logout.php">Logout</a>
    </p>
</body>
</html>