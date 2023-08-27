<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pinjam</title>
</head>
<body>
    <header>
        <h1>Form Data Peminjaman</h1>
    </header>

    <form action="proses_insert_data_pinjam.php" method="POST">
        <fieldset>
            <p>
                <label for="id_pinjam">ID Pinjam : </label>
                <input type="text" id="id_pinjam" name="id_pinjam">
            </p>
            <p>
                <label for="id_anggota">ID Anggota : </label>
                <input type="text" id="id_anggota" name="id_anggota">
            </p>
            <p>
                <label for="id_buku">ID Buku : </label>
                <input type="text" id="id_buku" name="id_buku">
            </p>
            <p>
                <label for="tgl_pinjam">Tanggal Peminjaman : </label>
                <input type="date" id="tgl_pinjam" name="tgl_pinjam">
            </p>
            <p>
                <label for="tenggat_hari">Tenggat Hari : </label>
                <input type="text" id="tenggat_hari" name="tenggat_hari">
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
                <input type="date" id="tgl_kembali" name="tgl_kembali"">
            </p>
            <button type="submit" value="tambah" name="tambah">Tambah[+]</button>
        </fieldset>
    </form>
    <a href="datapinjam.php">Kembali</a>
</body>
</html>