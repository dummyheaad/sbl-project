<?php
    include("../config.php");
    if (isset($_POST['ubah']))
    {
        if (isset($_GET['id_buku']))
        {
            $id_buku = $_GET['id_buku'];
            $judul = $_POST['judul'];
            $penulis = $_POST['penulis'];
            $penerbit = $_POST['penerbit'];
            $tahun_terbit = $_POST['tahun_terbit'];
            $isbn = $_POST['isbn'];
            $jumlah = $_POST['jumlah'];

            $edit = "UPDATE buku SET id_buku = '$id_buku',judul = '$judul',penulis = '$penulis', penerbit = '$penerbit', tahun_terbit = '$tahun_terbit', 
            isbn = $isbn, jumlah = $jumlah WHERE id_buku = '$id_buku'";

            $query = pg_query($db,$edit);

            if ($query == TRUE)
                header('location:buku.php?aksi=sukses&edit=pengeditan');
            else header('location:buku.php?aksi=gagal&edit=pengeditan');
        }
    }
?>