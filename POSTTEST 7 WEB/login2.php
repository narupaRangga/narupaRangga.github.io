<?php

if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['email'])){

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = ($_POST['uname']);
    $email = ($_POST['email']);
    $pass = ($_POST['password']);


    if (empty($uname)) {
        header("location: index.php?error=User name is required");
        exit();

        if (empty($email)) {
            header("location: index.php?error=email is required");
            exit();
        
        
        }else if (empty($pass)){
            header("location: index.php?error=Password is required");
            exit();

        }else{
            echo "Valid input";
        }

    }else{
        header("Location: index.php");
        exit();
    }
}