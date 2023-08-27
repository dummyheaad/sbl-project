<?php
    session_start();
    if (!isset($_SESSION['login']))
        header('location: ../login.php');
    include("../config.php");
    $buku = query("SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
</head>
<body>
    <nav>
        <a href="../anggota/anggota.php">Daftar Anggota</a>
        <a href="../buku/buku.php">Daftar Buku</a>
        <a href="../pinjam/datapinjam.php">Data Peminjaman</a>
        <a href="../denda/denda.php">Daftar Denda</a>
    </nav>
    <header>
        <h1>Data Buku</h1>
    </header>
    <nav>
        <a href="form_insert_buku.php">Tambah</a>
    </nav>

    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID Buku</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>ISBN</th>
                <th>Jumlah</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <?php foreach($buku as $record) :?>
        <tbody>
            <tr>
                <td><?= $record["id_buku"];?></td>
                <td><?= $record["judul"];?></td>
                <td><?= $record["penulis"];?></td>
                <td><?= $record["penerbit"];?></td>
                <td><?= $record["tahun_terbit"];?></td>
                <td><?= $record["isbn"];?></td>
                <td><?= $record["jumlah"];?></td>
                <td>
                    <a href="form_edit_buku.php?id_buku=<?= $record["id_buku"]; ?>">Edit</a> ||
                    <a href="delete_buku.php?id_buku=<?= $record["id_buku"]; ?>">Hapus</a>
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
            else echo "Penambahan data ".$condt;
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