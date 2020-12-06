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
          <a class="nav-link" href="#features">why Project_1?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">about us</a>
        </li>
        <li class="nav-item">
          <button class="btn" onclick="document.getElementById('login').style.display='block'" style="width:auto; background-color:#4A527C; color:white;">Login</button>&nbsp;&nbsp;
          <button type="button" class="btn" style="background-color:#4A527C; color:white;">Sign up</button>
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
  <div id="one" style="background-image:url('asset/nibr.png');">
    <div id="one_m">
      <br>
        <h3>connect to <del>globally</del> locally</h3><br>
        <button class="btn" onclick="document.getElementById('login').style.display='block'" style="width:auto; background-color:#4A527C; color:white;">Login</button>&nbsp;
        OR &nbsp;
        <button type="button" class="btn" style="background-color:#4A527C; color:white;">Sign up</button>
        <br><br><br>
    </div>
      <div id="one_r">
      <br><br>
        <form id="user_login" action="auth.php" method="post">
          <i class="fa fa-user-circle" style="font-size:20px;"></i>&nbsp;
          <input type="text" name="email" placeholder="Email" value="" required><br><br>
          <i class="fa fa-lock" style="font-size:20px;"></i>&nbsp;
          <input type="password" name="password" placeholder="Password" value="" required><br><br>
          <button type="submit" class="btn btn-outline-secondary" name="button">Login</button><br>
          <?php
                     if(isset($_SESSION["error"])){
                         $error = $_SESSION["error"];
                         echo "<span style='color:red;'>$error</span>";
                     }
                 ?>
        </form><br><br>
        <h3>connect to <del>globally</del> locally</h3><br>
        don't have an account Sign Up now!
        <button type="button" class="btn btn-outline-secondary" name="button"> <a href="signup.php">Sign Up</a> </button>
    </div>
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
        <button class="" type="submit" style="background-color:#4A527C;">Login</button>
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
  <div id="features">
    <div class="card-deck">
      <div class="card">
        <img src="asset/world.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Connect Locally</h5>
          <p class="card-text">In this busy world we forget to connect with neighbours,now that will never happen again.</p>
        </div>
      </div>
      <div class="card">
        <img src="asset/location.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Anything @ Fast</h5>
          <p class="card-text">With our community service you can find services,addresses etc nearyou very fast.</p>
        </div>
      </div>
      <div class="card">
        <img src="asset/fake.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">No more fake profiles</h5>
          <p class="card-text">Our community profile verification process helps to avoid fake profiles.</p>
        </div>
      </div>
    </div>
  </div>
  <footer>

  </footer>
</body>

</html>
