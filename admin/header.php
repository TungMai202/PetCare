<?php
  include_once("../config.php");
  $db = new DB();
  $conn = $db->conn();
  $get_order = mysqli_query($conn,'SELECT * FROM service ORDER BY id DESC');
  $get_contact = mysqli_query($conn,'SELECT * FROM contact ORDER BY id DESC');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRl-MsFhz17iSTKnnKouL6A2yoMZ8mYCRBz1o9rQ1kX7A&s">
  <link rel="stylesheet" href="./../assets/css/style.css">
  <link rel="stylesheet" href="./../assets/font-icon/themify-icons/themify-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>
<body>
  <div id="home">
    <div id="header">
      <!--Begin: Nav-->
      <ul id="nav">
        <li><a href="index.php">Service Orders</a></li>
        <li><a href="#store">Merchandise Orders</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
      <!--End: Nav-->
    </div>