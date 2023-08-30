<?php
session_start();
include "koneksi2.php";
$username = $_POST['username'];
$password = $_POST['password'];

$query= $koneksi->query("SELECT * FROM masyarakat WHERE username='$username' AND PASSWORD='$password'");

$jumlahbaris = $query->rowCOUNT();

if($jumlahbaris> 0){

    $data = $query->fetch();
    
    $_SESSION['nik'] = $data['nik'];
    $_SESSION['username'] = $_POST['username'];
   

    header("location: halaman.php");
}else{
    $query= $koneksi->query("SELECT * FROM petugas WHERE username='$username' AND PASSWORD='$password'");

    $jumlahbaris = $query->rowCOUNT();

    if($jumlahbaris> 0){

    $data = $query->fetch();

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['id_petugas'] = $_result['id_petugas'];
    $_SESSION['level'] = $_result['level'];

    header("location:petugas.php");
}else{
    header("location:login.php");
    
}
}
