<?php
    require '../aksi/koneksi.php';
    
    $id = $_GET['id'];

    $get = mysqli_query($conn, "SELECT * FROM koss WHERE id = $id");
    $get_foto = mysqli_query($conn, "SELECT gambar FROM koss WHERE id = $id");

    $kos = [];

    while ($row = mysqli_fetch_assoc($get)) {
        $kos[] = $row;
    }

    $kos = $kos[0];

    
    if (isset($_POST['ubah'])) {
        $nama = $_POST['nama'];
        $notelp = $_POST['notelp'];
        $status = $_POST['status'];
        $foto = $_FILES['foto']['name'];
        $x = explode('.', $foto);
        $ekstensi = strtolower(end($x));

        $new_foto = "$nama.$ekstensi";
        $tmp = $_FILES['foto']['tmp_name'];

        
        $data_old = mysqli_fetch_array($get_foto);
        unlink("img/".$data_old['gambar']);

        if (move_uploaded_file($tmp, "../img/".$new_foto)) {
            $result = mysqli_query($conn, "UPDATE koss SET nama='$nama', notelp='$notelp', status='$status', gambar='$new_foto' WHERE id = $id");

            if ($result) {
                echo "
                <script>
                    alert('Data berhasil diubah!');
                    document.location.href = 'dashboard.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal diubah!');
                </script>";
            }

        } else {
            echo "
            <script>
                alert('Data gagal diubah!');
            </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../update.css">
</head>
<body>
<section class="update">
        <div class="up-form-container">
            <h1>Edit Data</h1><hr><br>
            <form action="" method="post" enctype="multipart/form-data">
                <label for="username">Username</label>
                <input type="text" name="nama" value="<?php echo $kos['nama'] ?>" class="textfield">
                
                <label for="notelp">No telpon</label>
                <input type="text" name="notelp" value="<?php echo $kos['notelp'] ?>" class="textfield">
                
                <label for="status">Status</label>
                <input type="text" name="status" value="<?php echo $kos['status'] ?>" class="textfield">
                
                <label for="gambar">Gambar</label>
                <input type="file" name="foto" class="textfield">
               
                <input type="submit" name="ubah" value="Edit Data" class="login-btn">
            </form>
        </div>
    </section>
</body>
</html>