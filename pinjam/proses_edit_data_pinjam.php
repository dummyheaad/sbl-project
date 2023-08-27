<?php
    include("../config.php");
    if (isset($_POST['ubah']))
    {
        if (isset($_GET['id_pinjam']))
        {
            $id_pinjam = $_GET['id_pinjam'];
            $tenggat_hari = $_POST['tenggat_hari'];
            $status = $_POST['status'];
            $tgl_kembali = $_POST['tgl_kembali'];

            $edit = "UPDATE data_peminjaman SET tenggat_hari = $tenggat_hari,kondisi = '$status',tanggal_pengembalian = '$tgl_kembali' WHERE id_pinjam = '$id_pinjam'";

            $query = pg_query($db,$edit);

            if ($query == TRUE)
                header('location:datapinjam.php?aksi=sukses&edit=pengeditan');
            else header('location:datapinjam.php?aksi=gagal&edit=pengeditan');
        }
    }
?>