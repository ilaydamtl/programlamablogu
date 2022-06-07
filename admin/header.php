<?php 
//baglanti.php dosyamızı verilerimizi çekmek için dahil ediyoruz.

require_once 'baglanti.php';

//öncelikle bir değişken oluşturuyoruz.baglanti.php de oluşturduğumuz değişkeni de yanına alıyoruz verilerimizi çekebilmek için.
//Prepare ifadesini bir select değerini defalarca çalıştıracaksak kullanırız.
//select:listelemek insert:yüklemek delete:silmek update:güncelleme
//ayarlar tablomuzdan ayar id'ye göre listele diyoruz.

$ayarsor=$baglanti->prepare(" SELECT * FROM ayarlar where ayar_id=?");
$ayarsor->execute(array(1));

//Bu kod güvenli veri bağlantısı yapmamızı sağlar.
$ayarcek=$ayarsor->fetch(PDO:: FETCH_ASSOC);




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Programlama Bloğu Admin Panel</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link"ş  data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Anasayfa</a>
      </li>
    </ul> 
  </nav>