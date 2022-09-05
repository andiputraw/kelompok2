<?php 
require 'functions.php';

if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }
  
$username = datauser();
$data = data();

if(isset($_POST['ubah'])){

    $data = ubah($_POST);

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit profile</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/editprofile.css">
</head>
<body>

    <a href="profileuser.php" class="kembali"><ion-icon name="arrow-back"></ion-icon> Kembali <hr></a>
    <form name="" action="" method="POST" enctype="multipart/form-data" >
        <input type="hidden" name = "gambarlama" value="<?=$data["gambar"] ?>">
        <section  class="img-profil">
            <img src="profile/<?=$data["gambar"]; ?>" alt="" width="200px">
        </section>
        <section class="input">
            <label for="nama">Nama</label> <input type="text" name="nama" id="nama" value="<?=$data["nama"] ?>">
            <label for="pesan">Pesan</label> <input type="text" name="pesan" id="pesan" value="<?=$data["pesan"] ?>"> 
            <label for="gambar">Ubah Gambar</label>
            <input type="file" name="gambar" id="gambar">
            <button type="submit" name="ubah">Ubah</button>
        </section>
    </form>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>