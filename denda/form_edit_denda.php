<?php
    include("../config.php");
    if (isset($_GET['id_pinjam']) && isset($_GET['id_buku']))
    {
        $id_pinjam = $_GET['id_pinjam'];
        $id_buku = $_GET['id_buku'];
        $record = "SELECT * FROM denda WHERE (id_pinjam = '$id_pinjam' AND id_buku = '$id_buku')";
        $result = pg_query($db,$record);
        $query = pg_fetch_assoc($result);
    }
    else header("location:denda.php?cek=gagal");
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
        <h1>Form Edit Data Denda</h1>
    </header>

    <form action="proses_edit_denda.php?id_pinjam=<?= $id_pinjam; ?>&id_buku=<?= $id_buku; ?>" method="POST">
        <fieldset>
            <p>
                ID Pinjam : <?= $id_pinjam; ?>
            </p>
            <p>
                ID Buku : <?= $id_buku; ?>
            </p>
            <p>
                <label for="nominal">Nominal : </label>
                <input type="text" name="nominal" id="nominal" value="<?= $query['nominal']; ?>">
            </p>
            <p>
                <label >Keterangan : </label>
                <input list="keterangan" name="keterangan">
                <datalist id="keterangan">
                    <option value="rusak">rusak</option>
                    <option value="hilang">hilang</option>
                </datalist>
            </p>
            <button type="submit" name="ubah" value="ubah">Edit[~]</button>
        </fieldset>
    </form>
    <a href="datapinjam.php">Kembali</a>
</body>
</html>