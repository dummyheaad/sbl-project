<?php
    include("../config.php");
    if (isset($_POST['ubah']))
    {
        if (isset($_GET['id_pinjam']) && isset($_GET['id_buku']))
        {
            $id_pinjam = $_GET['id_pinjam'];
            $id_buku = $_GET['id_buku'];
            $nominal = $_POST['nominal'];
            $keterangan = $_POST['keterangan'];

            $edit = "UPDATE denda SET nominal = '$nominal',keterangan = '$keterangan' WHERE (id_pinjam = '$id_pinjam' AND id_buku = '$id_buku')";

            $query = pg_query($db,$edit);

            if ($query == TRUE)
                header('location:denda.php?aksi=sukses&edit=pengeditan');
            else header('location:denda.php?aksi=gagal&edit=pengeditan');
        }
    }
?>