<?php 
require 'functions.php';

if (isset($_SESSION["login"])){
    header("Location: home.php");
    exit;
}

if(isset($_POST["login"])){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password,$row["password"])){
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: home.php");
            exit;
        }
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    
    <div class="container">
        <div class="form-container">
            <h1>Login <hr></h1>
            <form name="" action="" method="POST" >
                <section>
                    <label for="username"><ion-icon name="person"></ion-icon></label>
                    <input type="text" name="username" id="username" placeholder="username">
                </section>
                <section>
                    <label for="password"><ion-icon name="lock-closed"></ion-icon></label>
                    <input type="password" name="password" id="password" placeholder="password">
                </section>    
                <button type="submit" name="login">Login</button>
            </form>
            <p class="register">Belum punya akun? <a href="register.php">Daftar disini</a></p>
        </div>
        <video autoplay loop muted>
            <source src="./asset/video/y2mate.com - COVID19 3D Animation Background 4K FREE Download Video Coronavirus No Copyright Cinema 4D_480p (online-video-cutter.com).mp4" type="video/mp4" />
        </video>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>