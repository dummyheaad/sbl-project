<?php
    include("../config.php");
    if (isset($_GET['id_pinjam']))
    {
        $id_pinjam = $_GET['id_pinjam'];
        $hapus = "DELETE FROM data_peminjaman WHERE id_pinjam = '$id_pinjam'";
        $query = pg_query($db,$hapus);

        if ($query == TRUE)
            header('location: datapinjam.php?aksi=sukses&hapus=penghapusan');
        else 
            header('location: datapinjam.php?aksi=gagal&hapus=penghapusan');
    }
?>