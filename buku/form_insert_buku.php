<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <header>
        <h1>Form Data Buku</h1>
    </header>

    <form action="proses_insert_buku.php" method="POST">
        <fieldset>
            <p>
                <label for="id_buku">ID buku : </label>
                <input type="text" id="id_buku" name="id_buku">
            </p>
            <p>
                <label for="judul">Judul Buku : </label>
                <input type="text" id="judul" name="judul">
            </p>
            <p>
                <label for="penulis">Penulis : </label>
                <input type="text" id="penulis" name="penulis">
            </p>
            <p>
                <label for="penerbit">Penerbit : </label>
                <input type="text" id="penerbit" name="penerbit">
            </p>
            <p>
                <label for="tahun_terbit">Tahun Terbit : </label>
                <input type="text" id="tahun_terbit" name="tahun_terbit">
            </p>
            <p>
                <label for="isbn">ISBN : </label>
                <input type="text" id="isbn" name="isbn">
            </p>
            <p>
                <label for="jumlah">Jumlah : </label>
                <input type="text" id="jumlah" name="jumlah">
            </p>
            <button type="submit" value="tambah" name="tambah">Tambah[+]</button>
        </fieldset>
    </form>
    <a href="buku.php">Kembali</a>
</body>
</html>