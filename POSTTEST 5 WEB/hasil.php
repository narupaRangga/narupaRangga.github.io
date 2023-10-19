<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Data registrasi</title>
    <link rel="stylesheet" type="text/css" href="styles0.css" <?php echo time(); ?>> 
</head>  
<body>
    <h1>Data Registrasi</h1>
    <table border="1">
        <tr>
            <td>User Name</td>
            <td><?=  $_POST['uname']; ?></td>
        </tr>
            <td>email</td>
            <td><?=  $_POST['email']; ?></td>
        </tr>
            <td>Password</td>
            <td><?= $_POST['password']; ?></td>
        </tr>
    </table>
    <a href="index.html"><button type="submit">Go to Home</button></a>
</body>
</html>