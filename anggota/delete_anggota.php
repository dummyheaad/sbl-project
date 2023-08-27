<?php
    include("../config.php");
    if (isset($_GET['id_anggota']))
    {
        $id_anggota = $_GET['id_anggota'];
        $hapus = "DELETE FROM anggota WHERE id_anggota = '$id_anggota'";
        $query = pg_query($db,$hapus);

        if ($query == TRUE)
            header('location: anggota.php?aksi=sukses&hapus=penghapusan');
        else 
            header('location: anggota.php?aksi=gagal&hapus=penghapusan');
    }
?>