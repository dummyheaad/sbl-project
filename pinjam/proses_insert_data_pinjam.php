<?php
    include("../config.php");
    if (isset($_POST['tambah']))
    {
        $id_pinjam = $_POST['id_pinjam'];
        $id_anggota = $_POST['id_anggota'];
        $id_buku = $_POST['id_buku'];
        $tgl_pinjam = $_POST['tgl_pinjam'];
        $tenggat_waktu = $_POST['tenggat_hari'];
        $status = $_POST['status'];
        $tgl_kembali = $_POST['tgl_kembali'];
        
        $insert = "INSERT INTO data_peminjaman VALUES
                    ('$id_pinjam','$id_anggota','$id_buku',
                    '$tgl_pinjam','$tenggat_waktu','$status',
                    '$tgl_kembali')";

        $query = pg_query($db,$insert);

        if ($query == TRUE)
            header('location: datapinjam.php?condt=sukses');
        else 
            header('location: datapinjam.php?condt=gagal');
    }
?>