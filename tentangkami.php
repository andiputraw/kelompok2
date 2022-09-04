<?php 
require 'functions.php';

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
</head>
<body>


<h1>Content creator</h1>
<hr>
    <table border = "1" width = "500px">
        <tr>
            <td>
                <img src="profile/<?=$contentcreator[0]['gambar'] ?>" width = "40px" alt="">
            </td>
            <td>
                <img src="profile/<?=$contentcreator[1]['gambar'] ?>"  width = "40px" alt="">
            </td>
            <td>
                <img src="profile/<?=$contentcreator[2]['gambar'] ?>"  width = "40px" alt="">
            </td>
            <td>
                <img src="profile/<?=$contentcreator[3]['gambar'] ?>" width = "40px"  alt="">
            </td>
        </tr>
        <tr>
            <td>
                <p><?=$contentcreator[0]['nama'] ?></p>
            </td>
            <td>
                <p><?=$contentcreator[1]['nama'] ?></p>
            </td>
            <td>
                <p><?=$contentcreator[2]['nama'] ?></p>
            </td>
            <td>
                <p><?=$contentcreator[3]['nama'] ?></p>
            </td>
        </tr>   
    </table>
    <h1>Programmer</h1>
    <hr>
    <table border = "1" width = "500px" >
        <tr>
            <td>
                <img src="profile/<?=$programmer[0]['gambar'] ?>" width = "40px"  alt="">
            </td>
            <td>
                <img src="profile/<?=$programmer[1]['gambar'] ?>" width = "40px"  alt="">
            </td>
        </tr>
        <tr>
            <td>
                <p><?=$programmer[0]['nama'] ?></p>
            </td>
            <td>
            <p><?=$programmer[1]['nama'] ?></p>
            </td>

        </tr>
    </table>
</body>
</html>