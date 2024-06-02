<?php
/** Ini file untuk konfigurasi koneksi database menggunakan php */

//variable host database
$host = 'localhost';
//variable user database
$user = 'root';
//variable password database
$password= '1234';
//variable nama database
$databaseName= 'task_management';
//variable koneksi database
$koneksi = mysqli_connect($host, $user, $password, $databaseName);
//pengecekan koneksi
if (mysqli_connect_errno()){
    echo "koneksi gagal";
}