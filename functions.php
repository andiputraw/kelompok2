<?php 
session_start();

if (isset($_SESSION['id'])){

    $id = $_SESSION['id'];
}


$conn = mysqli_connect('localhost','root','','bindo');

function query($query){

    global $conn;
   
    
    $result = mysqli_query($conn,$query);



    $rows = [];

    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    
    return $rows;

    $rows = [];
}

function register($data){
    //ambil data
    global $conn;
    $username = stripslashes($data["username"]);
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);


    //cek username
    $result = mysqli_query($conn,"SELECT username FROM user WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)){
        alert("Username sudah terdaftar");
        return false;
    }

    //cek password nya

    if($password !== $password2){
        alert("Password tidak sesuai");
        return false;
    }

    //masukan ke database

    //enkripsi
    $password = password_hash("$password",PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT 
                        INTO 
                        user VALUES(
                            '',
                            '$username',
                            '$username',
                            '$password',
                            DEFAULT,
                            DEFAULT,
                            DEFAULT
                            )");

    return mysqli_affected_rows($conn);
    
}

function datauser(){
  
    global $conn,$id;
    $result = mysqli_query($conn,"SELECT username FROM user WHERE id = $id");

    $row = mysqli_fetch_assoc($result);
    $username = $row['username'];
    return $username;

}

function data(){
    global $conn,$id;
    $result = mysqli_query($conn,"SELECT * FROM user WHERE id = $id");

    $row = mysqli_fetch_assoc($result);
    return $row;

}

function ubah($data){

    global $conn,$id;
    
    $nama = htmlspecialchars($data["nama"]);
    $pesan = htmlspecialchars($data["pesan"]);
    $gambarlama = $data['gambarlama'];
    
    if ($_FILES["gambar"]["error"]===4){
        $gambar = $gambarlama;
    }else{
        $gambar = upload();
    }

    mysqli_query($conn,"UPDATE user SET 
                        nama = '$nama',
                        pesan = '$pesan',
                        gambar = '$gambar'
                        
                        WHERE id = $id
                        ");
    $row = data();

    return $row;
}

function upload(){
    $nama = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']["size"];
    $error = $_FILES['gambar']['error'];
    $tmpNAME = $_FILES['gambar']['tmp_name'];


    if($error == 4){
        echo "<script>
            alert('upload file terlebih dahulu);
            </script>
        ";
    }


    $ekstensiFileValid = ['jpg','jpeg','png'];
    $esktensiFile = explode('.',$nama);
    $esktensiFile = strtolower(end($esktensiFile));

    if(!in_array($esktensiFile,$ekstensiFileValid)){

        
            echo "<script>
                alert('yang anda upload bukan gambar');
                </script>
            ";
        
    }

    if($ukuran > 10000000){
        echo "<script>
        alert('file terlalu besar');
        </script>
    ";
    }

    $namafilebaru = uniqid();
    $namafilebaru .= ".";
    $namafilebaru .= $esktensiFile;

    move_uploaded_file($tmpNAME,'profile/'.$namafilebaru);

    return $namafilebaru;
}

function alert($pesan){
    echo "<script>
        alert('$pesan');
        </script>
    ";
}

?>