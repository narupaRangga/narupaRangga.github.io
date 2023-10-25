<?php
    require '../aksi/koneksi.php';

    if(isset($_POST['submitdata'])) {
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $status = $_POST['status'];

        $foto = $_FILES['foto']['name'];
        date_default_timezone_set('Asia/Makassar');
        $tanggal = date('Y-m-d h-i-s');
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));

        $new_foto = "$tanggal.$nama.$ekstensi";
        $tmp = $_FILES['foto']['tmp_name'];

        if (move_uploaded_file($tmp, "../img/".$new_foto)) {
            $result = mysqli_query($conn, "INSERT INTO koss VALUES ('', '$new_foto', '$nama', '$notelp', '$status')");

            if ($result) {
                echo "
                <script>
                    alert('Data berhasil ditambahkan!');
                    document.location.href = 'dashboard.php';
                </script>";

            } else {
                echo "
                <script>
                    alert('Data gagal ditambahkan!');
                </script>";
            }

        } else {
            echo "
            <script>
                alert('Data gagal ditambahkan!');
            </script>";
        }
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
    <form action="" method="post" enctype="multipart/form-data">
        <h2>Tambah Penghuni Naw!koss</h2>

        <label>Username</label>
        <input type="text" name="nama" placeholder="Nama Penghuni"><br>

        <label>No telpon</label>
        <input type="nomor" name="notelp" placeholder="Nomor Telpon"><br>

        <label>Status</label>
        <input type="text" name="status" placeholder="Status penghuni"><br>

        <label>Gambar</label>
        <input type="file" name="foto" class="textfield"><br>

        <input type="submit" name="submitdata" value="Tambah data" class="loginbtn">
    </form>
</body>
</html>