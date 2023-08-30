<?php
session_start();
if(!isset($_SESSION['nik'])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logim.css">
    <title>Document</title>
</head>
<body>
<?php include "navbar.php";
?>
<div class="hero">
    <div class="container">
    <br>
    <h1>SELAMAT DATANG DI APLIKASI PENGADUAN MASYARAKAT</h1>
    </br> 
</div>
</div>
</body>
</html>

