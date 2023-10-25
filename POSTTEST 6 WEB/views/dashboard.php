<?php
    require "../aksi/koneksi.php";

    $result = mysqli_query($conn, "SELECT * FROM koss");

    $koss = [];
    while($row = mysqli_fetch_assoc($result)){
        $koss[] = $row;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dashboard.css">
    <title>Dashboard</title>
</head>
<body>

    <div class="dashboard">
        <div class="logo"> Dashboard NawKoss</div>

        <main>
            <section class="dash-main">
                <div class="leading-btn">
                    <a href="create.php"><button class="add-btn">Create</button></a>
                    <a href="index.html"><button class="add-btn">Kembali</button></a>
                </div>
                <table border="1">
                    <p>Current Date : <?php echo date('l, d F Y, ')?>
                    <?php date_default_timezone_set('Asia/Makassar'); echo date("h:i:s") ?>
                    </p><br>
                    <div class="note">Note: Jika ingin kembali, index.html nya di luar views. Terima kasih :)</div>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>No Telp</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; foreach($koss as $ks) :?>
                        <tr>
                            <td><?php echo $ks["id"]; ?></td>
                            <td><img src="../img/<?php echo $ks["gambar"]; ?>" alt="" width="100px"></td>
                            <td><?php echo $ks["nama"]; ?></td>
                            <td><?php echo $ks["notelp"]; ?></td>
                            <td><?php echo $ks["status"]; ?></td>
                            <td class="action">
                                <a href="update.php?id=<?php echo $ks['id']?>"><button class="edit-btn"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M200-200h56l345-345-56-56-345 345v56Zm572-403L602-771l56-56q23-23 56.5-23t56.5 23l56 56q23 23 24 55.5T829-660l-57 57Zm-58 59L290-120H120v-170l424-424 170 170Zm-141-29-28-28 56 56-28-28Z"/></svg></button></a>
                                <a href="delete.php?id=<?php echo $ks['id']?>"><button class="delete-btn" onclick="confirm('Yakin ingin menghapus <?php echo $ks['nama']?>?')"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="white"><path d="M280-120q-33 0-56.5-23.5T200-200v-520h-40v-80h200v-40h240v40h200v80h-40v520q0 33-23.5 56.5T680-120H280Zm400-600H280v520h400v-520ZM360-280h80v-360h-80v360Zm160 0h80v-360h-80v360ZM280-720v520-520Z"/></svg></button></a>
                            </td>
                        </tr> 
                        <?php $i++; endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>