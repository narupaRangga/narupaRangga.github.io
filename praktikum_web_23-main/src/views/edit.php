<?php
require '../aksi/koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <section class="add-data">
        <div class="add-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="dashboard.php" method="post">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="textfield">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="textfield">
                <label for="fakultas">Fakultas</label>
                <input type="text" name="fakultas" class="textfield">
                <label for="prodi">Program studi</label>
                <input type="text" name="prodi" class="textfield">
                <input type="submit" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>