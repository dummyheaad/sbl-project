<?php
    session_start();
    if (!isset($_SESSION['login']))
        header('location: ../login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Denda</title>
</head>
<body>
    <header>
        <h1>Form Data Denda</h1>
    </header>

    <form action="proses_insert_denda.php" method="POST">
        <fieldset>
            <p>
                <label for="id_pinjam">ID Pinjam : </label>
                <input type="text" id="id_pinjam" name="id_pinjam">
            </p>
            <p>
                <label for="id_buku">ID Buku : </label>
                <input type="text" id="id_buku" name="id_buku">
            </p>
            <p>
                <label for="nominal">Nominal : </label>
                <input type="text" id="nominal" name="nominal">
            </p>
            <p>
                <label >Keterangan : </label>
                <input list="keterangan" name="keterangan">
                <datalist id="keterangan">
                    <option value="rusak">rusak</option>
                    <option value="hilang">hilang</option>
                </datalist>
            </p>
            <button type="submit" value="tambah" name="tambah">Tambah[+]</button>
        </fieldset>
    </form>
    <a href="datapinjam.php">Kembali</a>
</body>
</html>