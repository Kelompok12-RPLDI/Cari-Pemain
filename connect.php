<?php
    $hostname     = "localhost";
    $username     = "root";
    $password     = "";
    $databasename = "ssb.0.0";
    
    // Create connection
    $conn = mysqli_connect($hostname, $username, $password, $databasename);

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }
?>