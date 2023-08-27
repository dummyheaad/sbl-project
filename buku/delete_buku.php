<?php
    include("../config.php");
    if (isset($_GET['id_buku']))
    {
        $id_buku = $_GET['id_buku'];
        $hapus = "DELETE FROM buku WHERE id_buku = '$id_buku'";
        $query = pg_query($db,$hapus);

        if ($query == TRUE)
            header('location: buku.php?aksi=sukses&hapus=penghapusan');
        else 
            header('location: buku.php?aksi=gagal&hapus=penghapusan');
    }
?>