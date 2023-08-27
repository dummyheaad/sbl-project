<?php
    include("../config.php");
    if (isset($_POST['tambah']))
    {
        $id_buku = $_POST['id_buku'];
        $judul = $_POST['judul'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tahun_terbit = $_POST['tahun_terbit'];
        $isbn = $_POST['isbn'];
        $jumlah = $_POST['jumlah'];
        
        $insert = "INSERT INTO buku VALUES
                    ('$id_buku','$judul','$penulis',
                    '$penerbit','$tahun_terbit','$isbn',
                    '$jumlah')";

        $query = pg_query($db,$insert);

        if ($query == TRUE)
            header('location: buku.php?condt=sukses');
        else 
            header('location: buku.php?condt=gagal');
    }
?>