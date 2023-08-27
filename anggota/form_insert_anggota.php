<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
</head>
<body>
    <header>
        <h1>Form Anggota</h1>
    </header>

    <form action="proses_insert_anggota.php" method="POST">
        <fieldset>
            <p>
                <label for="id_anggota">ID Anggota : </label>
                <input type="text" id="id_anggota" name="id_anggota">
            </p>
            <p>
                <label for="nama">Nama : </label>
                <input type="text" id="nama" name="nama">
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
                <input type="text" id="nomor_telepon" name="nomor_telepon">
            </p>
            <p>
                <label for="passw">Password : </label>
                <input type="text" id="passw" name="passw">
            </p>
            <button type="submit" value="tambah" name="tambah">Tambah[+]</button>
        </fieldset>
    </form>
    <a href="anggota.php">Kembali</a>
</body>
</html>