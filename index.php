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
  <script src="res/jquerry-3.5.1.js"></script>
  <script src="res/bootstrap-4.5.3/js/bootstrap.bundle.js"></script>
  <title>Project_1</title>
</head>

<body>
  <!--     navbar                     -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">Project_1</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="" role="button"> <i class="fas fa-align-left" style="color:black; font-size:28px;"></i></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">why Project_1?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about us</a>
        </li>
        <li class="nav-item">
          <button class="btn" onclick="document.getElementById('login').style.display='block'" style="width:auto; background-color:black; color:white;">Login</button>&nbsp;&nbsp;
          <button type="button" class="btn" style="background-color:black; color:white;">Sign up</button>
        </li>
      </ul>
    </div>
  </nav>
  <script type="text/javascript">
    $('.nav-item').on('click', function() {
      $('.navbar-toggler').click()
    });
  </script>
  <br><br><br>
  <div id="one" style="background-image:url('asset/nibr.png');"> <br><br>
      <h3>connect to <del>globally</del> locally</h3><br>
      <button class="btn" onclick="document.getElementById('login').style.display='block'" style="width:auto; background-color:black; color:white;">Login</button>&nbsp;&nbsp;
      <button type="button" class="btn" style="background-color:black; color:white;">Sign up</button>
      <br><br><br>
  </div>
  <div id="login" class="modal">
    <form class="modal-content animate" action="validate_login.php">
      <div class="container"><br>
        <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal" style="cursor:pointer;">
          <i class="fas fa-times"></i></span>
        <br><br>
        <label><b>Username</b></label>
        <input type="text" placeholder=" Username" name="uname" required><br>
        <label><b>Password</b></label>
        <input type="password" placeholder=" Password" name="pswd" required><br>
        <button class="" type="submit">Login</button>
      </div>
      <p style="text-align:center;"><a href="#">Forgot password?</a></p>
      <p style="text-align:center;"> OR </p>
      <p style="text-align:center;"> <a href="#"> Sign UP Now</a> </p>
    </form>
  </div>
  <script>
    var modal = document.getElementById('login');
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  everyone is busy and lack the relationship from neighbours,we offer you a platform
  to connect locally.
</body>

</html>
