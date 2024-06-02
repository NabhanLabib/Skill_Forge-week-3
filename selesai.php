<?php
include_once('config/database.php');
//Ambil paramater id
if(isset($_GET['id'])) {
    $id= $_GET['id'];
}

//query selesai tugas

$query= mysqli_query($koneksi, "UPDATE task SET status_tugas=1 WHERE id=$id");

if($query){
    //Jika hasilnya benar maka tampilkan alert
    echo "<script>
    alert('tugas selesai');
    window.location.href='index.php';
    </script>";

} else {
    //Jika salah maka tampilkan alert gagal
    echo "<script>
    alert('gagal memproses permintaan!');
    </script>";
}