<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GIS Menara Telekomunikasi | Diskominfo Lombok Tengah</title>
  <link rel="icon" type="image/png" href="<?= base_url(); ?>/favicon.png" />
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/res/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/res/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/res/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/res/dist/css/adminlte.min.css">
  


  <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFY_kt0xcpNKV9a9Z6dvim9HWQ8aPYslg&callback=initMap" async defer></script> -->
</head>
<style type="text/css">
  /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
  #map {
    width: 100%;
    min-height: 85vh;
    max-height: 100%;
    top: 0;
    left: 0;
    margin: 0 auto;
  }

  /* Optional: Makes the sample page fill the window. */
  html,
  body {
    height: 100%;
    margin: 0;
    padding: 0;
  }

  .float {
    position: absolute;
    width: 55px;
    height: 55px;
    top: 10px;
    right: 15px;
    background-color: #263238 ;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    /* #0C9 */
  }
  .delete {
    position: absolute;
    width: 55px;
    height: 55px;
    top: 10px;
    right: 80px;
    background-color: red ;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    box-shadow: 2px 2px 3px #999;
    /* #0C9 */
  }

  .my-float {
    margin-top: 22px;
  }
</style>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">