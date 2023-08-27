<?php
    include("../config.php");
    if (isset($_GET['id_anggota']))
    {
        $id_anggota = $_GET['id_anggota'];
        $record = "SELECT * FROM anggota WHERE id_anggota = '$id_anggota'";
        $result = pg_query($db,$record);
        $query = pg_fetch_assoc($result);
    }
    else header("location:anggota.php?cek=gagal");
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
        <h1>Form Edit Anggota</h1>
    </header>

    <form action="proses_edit_anggota.php?id_anggota=<?= $id_anggota; ?>" method="POST">
        <fieldset>
            <p>
                ID Anggota : <?= $id_anggota; ?>
            </p>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama" value="<?= $query['nama']; ?>">
            </p>
            <p>
                <label >Peran : </label>
                <input list="peran" name="peran">
                <datalist id="peran">
                    <option value="admin">admin</option>
                    <option value="anggota">anggota</option>
                </datalist>
            </p>
            <p>
                <label for="nomor_telepon">Nomor Telepon : </label>
                <input type="text" id="nomor_telepon" name="nomor_telepon" value=<?= $query['nomor_telepon']; ?> >
            </p>
            <p>
                <label for="passw">Password : </label>
                <input type="text" id="passw" name="passw" value="<?= $query['passw']; ?>">
            </p>
            
            
            <button type="submit" name="ubah" value="ubah">Edit[~]</button>
        </fieldset>
    </form>
    <a href="anggota.php">Kembali</a>
</body>
</html>