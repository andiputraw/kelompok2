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
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/register.css">
</head>
<body>
    
    <div class="container">
        <div class="form-container">
            <h1>Sign Up <hr></h1>
            <form name="" action="" method="POST" >
                <section>
                    <label for="username"><ion-icon name="person"></ion-icon></label>
                    <input type="text" name="username" id="username" placeholder="username">
                </section>
                <section>
                    <label for="password"><ion-icon name="lock-closed"></ion-icon></label>
                    <input type="password" name="password" id="password" placeholder="password">
                </section>
                <section>
                    <label for="password2"><ion-icon name="lock-closed"></ion-icon></label>
                    <input type="password" name="password2" id="password2" placeholder="konfirmasi password">
                </section>
                <button type="submit" name ="register">Registrasi</button>
            </form>
            <p class="register">Sudah punya akun? <a href="login.php">Login Disini</a></p>
        </div>
        <video autoplay loop muted>
            <source src="./asset/video/y2mate.com - COVID19 3D Animation Background 4K FREE Download Video Coronavirus No Copyright Cinema 4D_480p (online-video-cutter.com).mp4" type="video/mp4" />
        </video>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>