<?php 
require 'functions.php';

if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }
  
$data = data();
$contentcreator = query( "SELECT * FROM user WHERE admin = 2");
$programmer = query("SELECT * FROM user WHERE admin = 1");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/tentangkami.css">
</head>
<body>

    <h1>Programmer</h1>
    <section class="programmer">
        <figure><img src="./asset/img/bb3fb2d3-a67e-4034-bcde-b50c60bc1417.jpg" width = "200px"  alt=""><figcaption>
        <?=$programmer[0]['nama'] ?></figcaption></figure>
        <figure><img src="./asset/img/d449e04a-1b32-44c8-873e-e99a97f133a8.jpg" width = "200px"  alt=""><figcaption><?=$programmer[1]['nama'] ?></figcaption></figure>
    </section>

    <h1>Content creator</h1>
    <section class="content-creator">
        <figure><img src="./asset/img/61c3335d-11a0-497a-8ffd-969d6e75c390.jpg" width = "200px" alt=""><figcaption><?=$contentcreator[0]['nama'] ?></figcaption></figure>
        <figure><img src="./asset/img/4f5ec112-f7f9-472e-ad9f-38497b6e128e.jpg"  width = "200px" alt=""><figcaption><?=$contentcreator[1]['nama'] ?></figcaption></figure>
        <figure><img src="./asset/img/ea4f0b41-311d-4e85-aa31-8962b274df94.jpg"  width = "200px" alt=""><figcaption><?=$contentcreator[2]['nama'] ?></figcaption></figure>
        <figure><img src="./asset/img/a30bc21b-c3ec-4fd3-8887-18e7a8185e42.jpg" width = "200px"  alt=""><figcaption><?=$contentcreator[3]['nama'] ?></figcaption></figure>
    </section>
            
       

    <h1>Ucapan terimakasih</h1>
    <section>
    <figure><img src="profile/<?=$data['gambar'] ?>" width="200px" alt=""><figcaption><p><?=$data['nama'] ?></p>
    <p>Sebagai pembaca</p></figcaption></figure>
</sction>
            
        
            
                    
                
</body>
</html>