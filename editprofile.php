<?php 
require 'functions.php';

$username = datauser();
$data = data();

if(isset($_POST['ubah'])){

    $data = ubah($_POST);

}
if (!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
  }
  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit profile</title>

    <style>
        input {
    border-top-style: hidden;
    border-right-style: hidden;
    border-left-style: hidden;
    border-bottom-style: groove;
     background-color: #eee;
}
    </style>
</head>
<body>

<a href="profileuser.php">Kembali</a>
    
    <form name="" action="" method="POST" enctype="multipart/form-data" >

    <input type="hidden" name = "gambarlama" value="<?=$data["gambar"] ?>">
    <table width ="400">
        <tr>
            <td rowspan="2">
                <img src="profile/<?=$data["gambar"]; ?>" alt="" width="100px">
            </td>
            <td width = "400 " >
                <p>Nama : </p> <input type="nama" name="nama" id="nama" value="<?=$data["nama"] ?>">
            </td>
        </tr>
        <tr>
         
            <td>
                <p>Pesan : </p> <input type="text" name="pesan" id="pesan" value="<?=$data["pesan"] ?>"> 
            </td>
        </tr>
    </table>

    <label for="gambar">Ubah Gambar</label>
    <input type="file" name="gambar" id="gambar">

    <button type="submit" name="ubah">Ubah</button>
    </form>

</body>
</html>