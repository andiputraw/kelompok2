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
</head>
<body>
    <a href="home.php">Kembali</a>
    <br>
    <br>
    <br>
    <table>
        <tr>
            <td rowspan="2">
                <img src="profile/<?=$data["gambar"]; ?>" alt="" width="100px">
            </td>
            <td>
                <p>Nama : <?=$data["nama"]?></p>
            </td>
        </tr>
        <tr>
         
            <td>
                <p>pesan : <?=$data["pesan"] ?></p> 
            </td>
        </tr>
    </table>

    <button><a href="editprofile.php">Edit Profile</a></button>

</body>
</html>

<?php 

//default
//ganti profile
//ganti pesan
//ganti nama




?>