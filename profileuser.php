<?php 
require 'functions.php';

if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }

  
$username = datauser();
$data = data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $username ?></title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/userprofil.css">
</head>
<body>
    <a href="home.php" class="kembali"><ion-icon name="arrow-back"></ion-icon> Kembali <hr></a>
    <div class="wrapper">
        <section class="img-profil">
            <img src="profile/<?=$data["gambar"]; ?>" alt="" width="200px">
        </section>
        <section class="input">
            <p>Nama<br><span><?=$data["nama"]?></span></p>
            <p>Pesan<br><span><?=$data["pesan"] ?></span></p> 
            <button><a href="editprofile.php">Edit Profile</a></button>
        </section>
    </div>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<?php 

//default
//ganti profile
//ganti pesan
//ganti nama




?>