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
        <figure><img src="profile/<?=$programmer[0]['gambar'] ?>" width = "200px"  alt=""><figcaption>
        <?=$programmer[0]['nama'] ?></figcaption></figure>
        <figure><img src="profile/<?=$programmer[1]['gambar'] ?>" width = "200px"  alt=""><figcaption><?=$programmer[1]['nama'] ?></figcaption></figure>
    </section>

    <h1>Content creator</h1>
    <section class="content-creator">
        <figure><img src="profile/<?=$contentcreator[0]['gambar'] ?>" width = "200px" alt=""><figcaption><?=$contentcreator[0]['nama'] ?></figcaption></figure>
        <figure><img src="profile/<?=$contentcreator[1]['gambar'] ?>"  width = "200px" alt=""><figcaption><?=$contentcreator[1]['nama'] ?></figcaption></figure>
        <figure><img src="profile/<?=$contentcreator[2]['gambar'] ?>"  width = "200px" alt=""><figcaption><?=$contentcreator[2]['nama'] ?></figcaption></figure>
        <figure><img src="profile/<?=$contentcreator[3]['gambar'] ?>" width = "200px"  alt=""><figcaption><?=$contentcreator[3]['nama'] ?></figcaption></figure>
    </section>
            
       

    <h1>Ucapan terimakasih</h1>
    <section>
    <figure><img src="profile/<?=$data['gambar'] ?>" width="200px" alt=""><figcaption><p><?=$data['nama'] ?></p>
    <p>Sebagai pembaca</p></figcaption></figure>
</sction>
            
        
            
                    
                
</body>
</html>