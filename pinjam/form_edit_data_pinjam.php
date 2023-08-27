<?php
    include("../config.php");
    if (isset($_GET['id_pinjam']))
    {
        $id_pinjam = $_GET['id_pinjam'];
        $record = "SELECT * FROM data_peminjaman WHERE id_pinjam = '$id_pinjam'";
        $result = pg_query($db,$record);
        $query = pg_fetch_assoc($result);
    }
    else header("location:datapinjam.php?cek=gagal");
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
        <h1>Form Edit Data Peminjaman</h1>
    </header>

    <form action="proses_edit_data_pinjam.php?id_pinjam=<?= $id_pinjam; ?>" method="POST">
        <fieldset>
            <p>
                ID Pinjam : <?= $id_pinjam; ?>
            </p>
            <p>
                ID Buku : <?= $query['id_buku']; ?>
            </p>
            <p>
                Tanggal Peminjaman : <?= $query['tanggal_peminjaman'];?>
            </p>
            <p>
                <label for="tenggat_hari">Tenggat Hari : </label>
                <input type="text" id="tenggat_hari" name="tenggat_hari" value=<?= $query['tenggat_hari'];?> >
            </p>
            <p>
                <label >Status : </label>
                <input list="status" name="status">
                <datalist id="status">
                    <option value="dipinjam">dipinjam</option>
                    <option value="dikembalikan">dikembalikan</option>
                    <option value="didenda">didenda</option>
                </datalist>
            </p>
            <p>
                <label for="tgl_kembali">Tanggal Pengembalian : </label>
                <input type="date" id="tgl_kembali" name="tgl_kembali" value="<?=$query['tanggal_pengembalian'];?>">
            </p>
            <button type="submit" name="ubah" value="ubah">Edit[~]</button>
        </fieldset>
    </form>
    <a href="datapinjam.php">Kembali</a>
</body>
</html>