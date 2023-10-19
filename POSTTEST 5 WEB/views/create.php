<?php
    require '../aksi/koneksi.php';

    if(isset($_POST['submitdata'])) {
        $id = $_POST['kode_id'];
        $nama = $_POST['nama_penghuni'];
        $notelp = $_POST['nomor_telpon'];
        $status = $POST['status'];

        $result = mysqli_query($conn, "INSERT INTO reservasi VALUES ('$id', '$nama', '$notelp', '$status')");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>penghuni</title>
    <link rel="stylesheet" type="text/css" href="styles3.css"> 
</head>
<body>
    <form action="hasil.php" method="post">
        <h2>Tambah Penghuni Naw!koss</h2>
        <label>kode_id</label>
        <input type="text" name="id" placeholder="Nomor kamar"><br>

        <label>Username</label>
        <input type="text" name="nama" placeholder="Nama Penghuni"><br>

        <label>No telfon</label>
        <input type="nomor" name="notelp" placeholder="Nomor Telfon"><br>

        <label>Status</label>
        <input type="text" name="status" placeholder="Status penghuni"><br>


        <button type="submit">Tambah</button>
    </form>
</body>
</html>