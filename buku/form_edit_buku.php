<?php
    include("../config.php");
    if (isset($_GET['id_buku']))
    {
        $id_buku = $_GET['id_buku'];
        $record = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
        $result = pg_query($db,$record);
        $query = pg_fetch_assoc($result);
    }
    else header("location:buku.php?cek=gagal");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
</head>
<body>
    <header>
        <h1>Form Edit Data Buku</h1>
    </header>

    <form action="proses_edit_buku.php?id_buku=<?= $id_buku; ?>" method="POST">
        <fieldset>
            <p>
                ID Buku : <?= $id_buku; ?>
            </p>
            <p>
                <label for="judul">Judul : </label>
                <input type="text" id="judul" name="judul" value="<?= $query['judul']; ?>">
            </p>
            <p>
                <label for="penulis">Penulis : </label>
                <input type="text" id="penulis" name="penulis" value="<?= $query['penulis']; ?>">
            </p>
            <p>
                <label for="penerbit">Penerbit : </label>
                <input type="text" id="penerbit" name="penerbit" value="<?= $query['penerbit']; ?>">
            </p>
            <p>
                <label for="tahun_terbit">Tahun Terbit : </label>
                <input type="text" id="tahun_terbit" name="tahun_terbit" value="<?= $query['tahun_terbit']; ?>">
            </p>
            <p>
                <label for="isbn">ISBN : </label>
                <input type="text" id="isbn" name="isbn" value="<?= $query['isbn']; ?>">
            </p>
            <p>
                <label for="jumlah">Jumlah :</label>
                <input type="text" id="jumlah" name="jumlah" value="<?= $query['jumlah']; ?>">
            </p>
            <button type="submit" name="ubah" value="ubah">Edit[~]</button>
        </fieldset>
    </form>
    <a href="buku.php">Kembali</a>
</body>
</html>