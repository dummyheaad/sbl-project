<?php
    include("../config.php");
    if (isset($_POST['ubah']))
    {
        if (isset($_GET['id_anggota']))
        {
            $id_anggota = $_GET['id_anggota'];
            $nama = $_POST['nama'];
            $peran = $_POST['peran'];
            $nomor_telepon = $_POST['nomor_telepon'];
            $passw = $_POST['passw'];


            $edit = "UPDATE anggota SET nama = '$nama', peran = '$peran', nomor_telepon = '$nomor_telepon', passw = '$passw' WHERE id_anggota = '$id_anggota'";

            $query = pg_query($db,$edit);

            if ($query == TRUE)
                header('location:anggota.php?aksi=sukses&edit=pengeditan');
            else header('location:anggota.php?aksi=gagal&edit=pengeditan');
        }
    }
?>