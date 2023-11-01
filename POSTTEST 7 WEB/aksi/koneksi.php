<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "kosnaw";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn->connect_error){
        die("Gagal terhubung: ".mysqli_connect_error());
    }
?>