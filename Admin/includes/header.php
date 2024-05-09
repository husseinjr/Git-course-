<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    MYU e-commerce
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
 
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="assets/css/material-dashboard.min.css" rel="stylesheet" />
  <!-- Alertify JS -->
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
  <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>

  <style>
    .form-control {
      border : 1px solid #b3a1a1 !important;
      padding :8px 10px;
    }
    .current-img {
      margin-top: 10px;
    }
    .btn-delete {
      width: 75px;
      height: 40px;
      box-shadow: 0 3px 3px 0 rgba(233,30,99,.15), 0 3px 1px -2px rgba(233,30,99,.2), 0 1px 5px 0 rgba(233,30,99,.15);
      background-color: #e30000; /* Red */
      color: white;
      font-size: 15px;
      font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-align: center;
      border : 1px solid #b3a1a1 !important;
      border-radius : 10px;
      transition: box-shadow 0.3s ease;
    }

    .btn-delete:hover {
    box-shadow: 0 6px 12px rgba(255, 0, 0, 0.4); 
    }

    .form-select {
      border : 1px solid #b3a1a1 !important;
      padding :8px 10px;
    }
    <style>
    .checkout-card{
      width: 100%;
      min-height: 400px;
      margin-top: 20px;
      border: 1px solid none;
      border-radius: 20px;
      box-shadow: 0 0 25px #db4b60;
      background-color: #efefef;
    }
    .row{
      margin-left: 0px !important;
      margin-right: 0px !important;
    }
  </style>
  <style>
  /* Style for the alert message */
  .alert {
    margin-top: 40px ;
    margin-bottom: 20px ;
    padding: 20px;
    height: auto;
    outline: none;
    border-radius: 10px;
    background-color: #f1ee8f; /* Red */
    font-size: 14px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: bold;
    color: white;
    text-align: center;
  }
  @font-face {
    font-family:mediam ;
    src: url(../assets/Fonts/ge-dinkum-light-bold.ttf);
 }
 
 @font-face {
    font-family:boldd ;
    src: url(../assets/Fonts/GEDinkum-Bold-1.ttf);
 }
  /* Close button */
  .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

  /* Close button on hover */
  .closebtn:hover {
    color: black;
  }
  .brow-btn:hover {
    background-color: #f1b17a;
    transform: scale(1.05);
  }
  .brow-btn{
    width: 170px;
    color: white;
    background-color: #f1b17a;
    transition: transform 1.0s ease;
  }
  </style>

</head>

<body class="g-sidenav-show  bg-gray-200">
    <?php include('sidebar.php') ; ?>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <?php include('navbar.php') ; ?>
        