<?php
    include("../config.php");
    if (isset($_POST['tambah']))
    {
        $id_pinjam = $_POST['id_pinjam'];
        $id_buku = $_POST['id_buku'];
        $nominal = $_POST['nominal'];
        $keterangan = $_POST['keterangan'];
        
        $insert = "INSERT INTO denda VALUES
                    ('$id_pinjam','$id_buku','$nominal','$keterangan')";

        $query = pg_query($db,$insert);

        if ($query == TRUE)
            header('location: denda.php?condt=sukses');
        else 
            header('location: denda.php?condt=gagal');
    }
?>