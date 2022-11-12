<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:./login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ready, Set, GALA!</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/lineawesome/css/line-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/alertifyjs/css/alertify.min.css">
  <link rel="stylesheet" type="text/css" href="assets/alertifyjs/css/themes/default.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/adminlte.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
  <script src="https://cdn.tiny.cloud/1/hmyuni5up3bfictbg36calcx5o6gp1w6tto31kg25if3uh21/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <script type="text/javascript" src="assets/alertifyjs/alertify.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="./assets/js/adminlte.js"></script>
  <script type="text/javascript" src="./assets/js/canvasjs.min.js"></script>
</head>
<body>

  <div class="d-flex" id="wrapper">
    <div class="bg-light border-right shadow" id="sidebar-wrapper">

      <div class="sidebar-heading h1"><i class="las la-university"></i> Ready, Set, GALA!</div>
      <div class="list-group list-group-flush">
      <a href="index.php" class="list-group-item list-group-item-action bg-light"> <i class="las la-table"></i> Dashboard</a>
      <a href="destinations.php" class="list-group-item list-group-item-action bg-light"> <i class="las la-map"></i> Destinations </a>
      <a href="blogs.php" class="list-group-item list-group-item-action bg-light"> <i class="las la-blog"></i> Blogs </a>
      <a href="clients.php" class="list-group-item list-group-item-action bg-light"> <i class="las la-user"></i> Clients </a>
      <a href="tickets.php" class="list-group-item list-group-item-action bg-light"> <i class="las la-ticket-alt"></i> Tickets </a>
      </div>
    </div>