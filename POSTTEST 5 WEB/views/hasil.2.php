<?php
    require "../aksi/koneksi.php";
    session_start();

    $result = mysqli_query($conn, "SELECT * FROM peng");

    $peng = [];

    while($row = mysqli_fetch_assoc($result)){
        $peng[] = $row;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Data Penghuni</title>
    <link rel="stylesheet" type="text/css" href="styles4.css" <?php echo time(); ?>> 
</head>  
<body>
    <h1>Data Registrasi</h1>
    <table border="1">
        <tr>
            <td>kode_id</td>
            <td><?=  $_POST['kode_id']; ?></td>
        </tr>
            <td>Username</td>
            <td><?=  $_POST['nama_penghuni']; ?></td>
        </tr>
            <td>no telfon</td>
            <td><?= $_POST['nomor_telfon']; ?></td>
        </tr>
            <td>status</td>
            <td><?= $_POST['password']; ?></td>
        </tr>
    </table>
    <a href="index.html"><button type="submit">Go to Home</button></a>
</body>
</html>