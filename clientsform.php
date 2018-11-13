<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Intensely : Contact</title>
  <link rel="shortcut icon" type="image/icon" href="assets/images/logonew.png" />
  <link href="assets/css/font-awesome.css" rel="stylesheet">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
  <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css" />
  <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">
  <link rel="stylesheet" href="./assets/css/bootstrap-tagsinput.css">
  <link rel="stylesheet" href="assets/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/customTrainer.css">
  <!-- Open Sans for body font -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
</head>

<body>

  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
    <!-- header top search -->
    <div class="header-top">
      <div class="container">
        <form action="">
          <div id="search">
            <input type="text" placeholder="Type your search keyword here and hit Enter..." name="s" id="m_search"
              style="display: inline-block;">
            <button type="submit">
              <i class="fa fa-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- header bottom -->
    <div class="header-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-contact">
              <ul>
                <li>
                  <div class="phone">
                    <i class="fa fa-phone"></i>
                    +1(800) 699-7071
                  </div>
                </li>
                <li>
                  <div class="mail">
                    <i class="fa fa-envelope"></i>
                    iam@domain.com
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="header-login">
            <?php            
              session_start();
              if(isset($_SESSION["user_role"])) {
                echo '<a class="login modal-form" id="logout">Logout</a>';
              } else {
                echo '<a class="login modal-form" data-target="#login-form" data-toggle="modal" href="#">Login / Sign Up</a>';
              }
            ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- End header -->


  <!-- BEGIN MENU -->
  <section id="menu-area">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <!-- TEXT BASED LOGO -->
          <!-- <a class="navbar-brand" href="index.php">TRAINER'S CLUB</a> -->
          <!-- IMG BASED LOGO  -->
          <a class="navbar-brand" href="index.php"><img src="assets/images/logonew.png" alt="logo" style="width: 130px;height: 70px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="service.html">SERVICES</a></li>
            <?php              
              if(isset($_SESSION["user_role"])) {
                $role = $_SESSION["user_role"];
                if($role == 'Trainer') {
                  echo '<li><a href="trainersform.php">TRAINERS</a></li>';
                } else {
                  echo '<li><a href="clientsform.php">Clients</a></li>';
                }
              }
            ?>
            <li><a href="contact.html">CONTACT</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
        <a href="#" id="search-icon">
          <i class="fa fa-search">
          </i>
        </a>
      </div>
    </nav>
  </section>
  <!-- END MENU -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <!-- Start login modal window -->
  <div aria-hidden="false" role="dialog" tabindex="-1" id="login-form" class="modal leread-modal fade in">
    <div class="modal-dialog">
      <!-- Start login section -->
      <div id="login-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-unlock-alt"></i>Login</h4>
        </div>
        <div class="modal-body">
          <form action="backend/loginOperation.php" method="POST">
            <div class="form-group">
              <input type="text" placeholder="User name" class="form-control" name="user_name" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="user_password" required>
            </div>
            <div class="form-group">
                <label for="Corporate Trainer" class="col-form-label">Login As</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Client"  checked name="user_role">Client</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Trainer" name="user_role">Trainer</label>              
            </div>
             <div class="loginbox">              
              <button class="btn signin-btn" type="submit" id="sigin-btn">SIGN IN</button>
            </div>                    
          </form>
        </div>
        <div class="modal-footer footer-box">
          <a href="#">Forgot password ?</a>
          <span>No account ? <a id="signup-btn" href="#">Sign Up.</a></span>            
        </div>
      </div>
      <!-- Start signup section -->
      <div id="signup-content" class="modal-content">
        <div class="modal-header">
          <button aria-label="Close" data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span></button>
          <h4 class="modal-title"><i class="fa fa-lock"></i>Sign Up</h4>
        </div>
        <div class="modal-body">
          <form action="backend/signupOperation.php" method="post">
            <div class="form-group">
              <input placeholder="Name" class="form-control" name="name" required>
            </div>
            <div class="form-group">
              <input placeholder="Username" class="form-control" name="user_name" required>
            </div>
            <div class="form-group">
              <input placeholder="Email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label for="Corporate Trainer" class="col-form-label">Login As</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Client" checked name="user_role">Client</label>
                <label class="radio-inline" style="line-height: 40px;padding: 1px 30px;"><input type="radio" value="Trainer" name="user_role">Trainer</label>              
            </div>
            <div class="signupbox">
              <span>Already got account? <a id="login-btn" href="#">Sign In.</a></span>
            </div>
            <div class="loginbox">
              <button class="btn signin-btn" type="submit">SIGN UP</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End login modal window -->

  <!-- Start contact section  -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <h2 class="text-center formTitle"> Client's Enrollment Form </h2>
        <form name="clientForm" method="post" enctype="multipart/form-data">
          <div class="row">
             <div class="col-md-10">
                <div class="form-group">
                      <label for="Select Trainer" class="col-form-label">Client Name</label>
                      <input type="text" name="clientname" id="clientname" onkeypress="return isNumericKey(event)" placeholder="Enter Full Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Select Sub Category" class="col-form-label">Client Email Id</label>
                    <input type="email" name="clientemail" id="clientemail" class="form-control" placeholder="Enter Email Id" required>
                </div>
                <div class="form-group">
                      <label for="Select Trainer" class="col-form-label">Client Contact</label>
                      <input type="text" name="clientcontact" id="clientcontact" maxlength="10" placeholder="Enter 10 Digit Contact Number" onkeypress="return isNumberKey(event)" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Select Sub Category" class="col-form-label">Client Location</label>
                    <input type="text" name="clientaddress" id="clientaddress" onkeypress="return isNumericKey(event)" class="form-control" placeholder="Enter Full Address Here" required/>
                </div>
                <div class="form-group">
                  <label for="Confirm Your Identity" class="col-form-label">Confirm Your Identity</label>
                  <input type="file" name="identity" id="identity" placeholder="Identity" required />
                </div>
             </div>   
          </div>
          <button class='btn btn-primary btn-md' id="btnSave" style="background-color:#2bcdc1;" type="submit">SAVE</button>
        </form>
      </div><br>
    </div>
  </section>
  <!-- End contact section  -->

  <!-- Start footer -->
  <?php
    include_once('footer.php');
  ?>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- counter -->
  <script src="assets/js/waypoints.js"></script>
  <script src="assets/js/jquery.counterup.js"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="assets/js/wow.js"></script>
  <!-- progress bar   -->
  <script type="text/javascript" src="assets/js/bootstrap-progressbar.js"></script>


  <!-- Custom js -->
  <script type="text/javascript" src="assets/js/custom.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script>
  <script src="./assets/js/bootstrap-tagsinput.js"></script>
  <script src="./assets/js/customTrainer.js"></script>

</body>

</html>