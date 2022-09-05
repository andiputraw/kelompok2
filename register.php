<?php 

require 'functions.php';
if (isset($_SESSION["login"])){
    header("Location: home.php");
    exit;
}

if(isset($_POST["register"])){

    if(register($_POST) > 0){

        header('location: berhasil.php');
        exit;

    }
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
    <form name="" action="" method="POST" >
    <ul>
        <li>
            <label for="username">Username : </label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password : </label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="password2">Konfirmasi password : </label>
            <input type="password" name="password2" id="password2">
        </li>
        <li>
            <button type="submit" name ="register">Registrasi</button>
        </li>
    </ul>
    </form>

    <p>Sudah punya akun? <a href="login.php">Login Disini</a></p>

</body>
</html>