<?php
    session_start();
    include("config.php");
    if (isset($_POST['login']))
    {
        $_username = $_POST['username'];
        $_password = $_POST['password'];

        $result = pg_query("SELECT * FROM anggota WHERE (id_anggota = '$_username' AND passw = '$_password')");
        $row = pg_num_rows($result);
        $data = pg_fetch_assoc($result);
        if ($row == 1 && $data['peran'] == 'admin')
        {
            $_SESSION["login"] = true;
            $_SESSION['account'] = $data['nama'];
            header('location:index.php');
        }
        else
            header('location:login.php?ket=failed');
    }
?>