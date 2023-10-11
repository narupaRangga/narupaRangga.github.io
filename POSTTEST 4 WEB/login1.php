<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Registrasi  </title>
</head>
<body>
    <h1>From Registrasi</h1>
    <from method="post" action="hasil.php">
        <table>
            <!--name--->
            <tr>
                <td>Nama</td>
                <td> <input type="text" name="nama"></td>
            </tr>
            <!--end name--->
            <!--alamat--->
            <tr>
                <td>Alamat</td>
                <td><textarea name="alamat"></textarea></td>
            </tr>
            <!--end alamat---> 
             <!--status--->
             <tr>
                <td>Status</td>
                <td> <input type="text" name="Status"></td>
            </tr>
            <!--end status--->
            <!--jenis kelamin--->
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="gender" value="laki-laki">laki-laki
                <input type="radio" name="gender" value="perempuan">perempuan
                </td>
            </tr>
            <!--end jenis kelamin--->
        </table>
        <button type="submit">kirim</button>
        <button type="reset">reset</button>
</body>
</html>