<?php

$db = pg_connect("host=localhost dbname=tugas_akhir user=postgres password=postgres");

// fungsi query dari database ke page
function query($query) 
    {
        global $db;
        $result = pg_query($db,$query);
        $rows = [];
        while ($row = pg_fetch_assoc($result))
            $rows[] = $row;
        return $rows;
    }
?>