<?php
session_start();
header("Refresh: ");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,shrink-to-fit=no">
    <link rel="icon" href="" type="image/x-icon" />
    <link rel="stylesheet" href="res/bootstrap-4.5.3/css/bootstrap.min.css">
    <link href="asset/all.css" rel="stylesheet">
    <link rel="stylesheet" href="res/css/style_tab.css">
    <link rel="stylesheet" href="res/css/style_mob.css">
    <link rel="stylesheet" href="res/css/style_pc.css">
    <script src="not_https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="res/bootstrap-4.5.3/js/bootstrap.bundle.js"></script>
    <title>Project_1</title>
  </head>
  <body>
                  <!--     navbar                     -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">Project_1</a>
  <form id="checktab"class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="text" placeholder="enter pincode"  maxlength="6">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">check</button>
  </form>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">why Project_1?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about us</a>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-outline-success">login</button> &nbsp;&nbsp;
        <button type="button" class="btn btn-outline-primary">sign up</button>
      </li>
    </ul>
   </div>
</nav>
<br><br><br>
<div id="one" style="background-image:url('asset/engineer.png');" >  <br><br><br>
  <div id="one_right">
      <h4><b> Any service,meet Project_1</b></h4><br>
        <h6><i class="fas fa-shield-alt" style="color:#8A3FFC;"></i> 100% Secure</h6>
        <h6><i class="fas fa-tools" style="color:#8A3FFC;"></i> All types of Services</h6>
        <h6><i class="fas fa-headset" style="color:#8A3FFC;"></i> 24/7 Customer Support</h6>
        <h6><i class="fas fa-money-check-alt" style="color:#8A3FFC;"></i> All types of Payment</h6>
  </div>
</div>
<div id="checkmob">
  <br><br>
  <form id="" class="">
   <p>Check we are available to service at your location</p>
    <input class="" type="text" style=" border: 2px solid black;border-radius: 4px;" placeholder="enter pincode"  maxlength="6">
    <button class="btn btn-dark" type="submit"><i class="fas fa-location-arrow"></i></button>
  </form><br><br>
 </div>
  </body>
</html>
<!--
<svg viewBox="0 0 250 250">
   <path fill="#8A3FFC"
         d="M39.7,21.7C26.7,45.3,-25.5,45.1,-38.7,21.3C-51.8,-2.4,-25.9,-49.8,0.2,-49.6C26.3,-49.5,52.6,-2,39.7,21.7Z" transform="translate(100 100)" />

   <text x="63"
         y="60"
         fill="white"
         font-size="1.5em"
         text-anchor="middle"
         alignment-baseline="middle">

   </text>
</svg> -->
