<?php
   require "../aksi/koneksi.php";

    $id = $_GET['id'];

    $get_foto = mysqli_query($conn, "SELECT gambar FROM koss WHERE id = $id");

    $data_old = mysqli_fetch_array($get_foto);
    unlink("img/".$data_old['foto']);

    $result = mysqli_query($conn, "DELETE FROM koss WHERE id = $id");
    
    $mahasiswa = [];

    if ($result) {
        echo "
        <script>
            alert('Data berhasil dihapus!');
            document.location.href = 'dashboard.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal dihapus!');
            document.location.href = 'dashboard.php';
        </script>";
    }
?>