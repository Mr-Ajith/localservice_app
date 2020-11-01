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
    <link rel="stylesheet" href="res/css/style_tab.css">
    <link rel="stylesheet" href="res/css/style_mob.css">
    <link rel="stylesheet" href="res/css/style_pc.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
<div id="one">
  Do you need service? meet Project_1 <br>
  <small>Get all types local services at maximum lowest price with 100% security</small>
  <form id="checkmob" class="">
    Check we are available to service at your location
    <input class="" type="text" placeholder="enter pincode"  maxlength="6">
    <button class="btn btn-outline-success" type="submit">check</button>
  </form>
</div>
  </body>
</html>
