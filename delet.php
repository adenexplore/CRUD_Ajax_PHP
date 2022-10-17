<<?php 

$id = $_GET['id'];

//include(dbconnect.php);
include('simpan.php');

        // Mengambil data siswa_foto didalam table siswa
        $get_foto = "SELECT siswa_foto FROM form1 WHERE id='$id'";
        $data_foto = mysqli_query($conn, $get_foto); 
        // Mengubah data yang diambil menjadi Array
        $foto_lama = mysqli_fetch_array($data_foto);

        // Menghapus Foto lama didalam folder FOTO
        unlink("foto/".$foto_lama['poto']);  

//query hapus
$query = "DELETE FROM form1 WHERE id = '$id' ";

if (mysqli_query($conn , $query)) {
 # redirect ke index.php
 header("location:index.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($conn);
        

?>

