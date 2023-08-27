<?php
    include("../config.php");
    if (isset($_GET['id_pinjam']) && isset($_GET['id_buku']))
    {
        $id_pinjam = $_GET['id_pinjam'];
        $id_buku = $_GET['id_buku'];
        $hapus = "DELETE FROM denda WHERE (id_pinjam = '$id_pinjam' AND id_buku = '$id_buku')";
        $query = pg_query($db,$hapus);

        if ($query == TRUE)
            header('location: denda.php?aksi=sukses&hapus=penghapusan');
        else 
            header('location: denda.php?aksi=gagal&hapus=penghapusan');
    }
?>