<?php
    session_start();
    if (!isset($_SESSION['login']))
        header('location: ../login.php');
    include("../config.php");
    $anggota = query("SELECT * FROM anggota");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota</title>
</head>
<body>
    <nav>
        <a href="../anggota/anggota.php">Daftar Anggota</a>
        <a href="../buku/buku.php">Daftar Buku</a>
        <a href="../pinjam/datapinjam.php">Data Peminjaman</a>
        <a href="../denda/denda.php">Daftar Denda</a>
    </nav>
    <header>
        <h1>Daftar Anggota</h1>
    </header>
    <nav>
        <a href="form_insert_anggota.php">Tambah</a>
    </nav>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID Anggota</th>
                <th>Nama</th>
                <th>Peran</th>
                <th>Nomor_Telepon</th>
                <th>Password</th>
                <th>Tindakan</th>
            </tr>
        </thead>
    
        <?php foreach($anggota as $record) :?>
        <tbody>
            <tr>
                <td><?= $record["id_anggota"];?></td>
                <td><?= $record["nama"];?></td>
                <td><?= $record["peran"];?></td>
                <td><?= $record["nomor_telepon"];?></td>
                <td><?= $record["passw"];?></td>
                <td>
                    <a href="form_edit_anggota.php?id_anggota=<?= $record["id_anggota"]; ?>">Edit</a> ||
                    <a href="delete_anggota.php?id_anggota=<?= $record["id_anggota"]; ?>">Hapus</a>
                </td>
            </tr>
        </tbody>
    <?php endforeach; ?>
    </table>

    <?php
        if (isset($_GET['condt']))
        {
            $condt = $_GET['condt'];
            if ($_GET['condt'] == 'sukses')
            {
                echo 'Penambahan data '.$condt;
            }
            else echo 'Penambahan data '.$condt;
        }

        if (isset($_GET['cek']))
            if ($_GET['cek'] == 'gagal')
                echo 'Proses Query Edit Gagal';
        
        if (isset($_GET['aksi']))
        {
            $aksi = $_GET['aksi'];
            if (isset($_GET['edit']))
            {
                $edit = $_GET['edit'];
                echo $edit." data ".$aksi;
            }
            else
            {
                $hapus = $_GET['hapus'];
                echo $hapus." data ".$aksi;
            }
        }
    ?>
    <br>
    <br>
    <a href="../index.php">Kembali Ke Dashboard</a>

    <br>
    <br>
    <p>
        <a href="../logout.php">Logout</a>
    </p>
</body>
</html>