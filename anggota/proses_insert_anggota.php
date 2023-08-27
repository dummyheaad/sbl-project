<?php
    include("../config.php");
    if (isset($_POST['tambah']))
    {
        $id_anggota = $_POST['id_anggota'];
        $nama = $_POST['nama'];
        $peran = $_POST['peran'];
        $nomor_telepon = $_POST['nomor_telepon'];
        $passw = $_POST['passw'];
        
        $insert = "INSERT INTO anggota VALUES
                    ('$id_anggota','$nama','$peran','$nomor_telepon','$passw')";

        $query = pg_query($db,$insert);

        if ($query == TRUE)
            header('location: anggota.php?condt=sukses');
        else 
            header('location: anggota.php?condt=gagal');
    }
?>