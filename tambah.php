<?php
//add dbconnect

include('simpan.php');

$Nama = $_POST['nama'];
$kelamin = $_POST['j_kelamin'];
$Alamat = $_POST['alamat'];
$Poto = $_POST['poto'];

//query

$query =  "INSERT INTO form1 (nama , j_kelamin , alamat , poto) VALUES('$Nama' , '$kelamin' , '$Alamat' , '$Poto')";

if (mysqli_query($conn , $query)) {
 # code redicet setelah insert ke index
 header("location:index.php");
}
else{
 echo "ERROR, tidak berhasil". mysqli_error($conn);
}

mysqli_close($conn);
?>