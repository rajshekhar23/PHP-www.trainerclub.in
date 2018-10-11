<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Trainer's Club : About Us</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href=""/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
    <!-- Bootstrap progressbar  --> 
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'> 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>
  <!-- Start header -->
  <?php
    include_once('header.php');
    include_once('menu.php');
  ?>
  <!-- End header -->


  <!-- BEGIN MENU -->

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

<section id="single-page-header">
  <div class="overlay">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="single-page-header-left">
            <h2>About Us</h2>
            <p></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="single-page-header-right">
            <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">About us</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Start about us -->
  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">About us</h2>
            <span class="line"></span>
            <p>Trainer’s club is promoting success for the community of trainers.  We firmly believe in the concept of togetherness, as rightly been said “United we stand, divided we fall”.</p>
          </div>
        </div>
      <div class="row"> 
	      <div class="col-md-4">
		    <div class="panel panel-default">
				<div class="panel-heading">Ideology</div>
				<div class="panel-body">Trainer’s Club is an evolved concept working in support of the global trainer fraternity of every emerging channel, where our experts are working entirely on identifying the best prospects for
				‘Trainer’s knowledge updates’
					‘Ensuring earning prospects’
						‘Revolutionized self-branding’
							‘Growth & Success through Signature Program’
				</div>
			</div>
		</div>
	    <div class="col-md-4">
		     <div class="panel panel-default">
				<div class="panel-heading">Core Values</div>
				<div class="panel-body"><ol><li>Performance – Achieving & Promoting Excellence is our core value</li>
										<li>Passion – We are passionate to discover expertise & present it innovatively to the world</li>
										<li>Integrity – Ethics and Equality is our integrated culture</li>
										<li>Diversity – Concepts, fortes, interests and domain are our commercial moves to succeed and we inspire genuine propositions.</li>
				</div>
			</div>
		</div>
	    <div class="col-md-4">
		    <div class="panel panel-default">
				<div class="panel-heading">USP</div>
				<div class="panel-body">Trainer’s Club exceptionally working for minimizing challenges in professional growth of trainer’s, expert & mentor’s by providing them global platform to innovate and acquire and promoting Success together.</div>
			</div>
		</div>
    </div>
	<div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our Team</h2>
            <span class="line"></span>
            <p></p>
        </div>
    </div>
    <div class="row" >
      <div class="col-md-4 abt-profile">
        <div class="container1">
          <img src="assets/images/img_avatar.png" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
              <div class="text4">Dr. Swati Verma (CEO, Project Head)</div>
            </div>
        </div>
      </div>
      <div class="col-md-4 abt-profile">
        <div class="container1">
          <img src="assets/images/img_avatar.png" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
              <div class="text4">Mr. Atul Sood (Director Business Head)</div>
            </div>
        </div>
      </div>
      <div class="col-md-4 abt-profile">
        <div class="container1">
          <img src="assets/images/img_avatar.png" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
              <div class="text4">Mr. Gurjinder Saini (Business Facility Consultant)</div>
            </div>
        </div>
      </div>
      <div class="col-md-4 abt-profile">
        <div class="container1">
          <img src="assets/images/img_avatar.png" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
              <div class="text4">Mr. Ankit Goyel (IT & Marketing Consultant)</div>
            </div>
        </div>
      </div>
      <div class="col-md-4 abt-profile">
        <div class="container1">
          <img src="assets/images/img_avatar.png" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
              <div class="text4">Ms. Divya Narang (Backend Manager)</div>
            </div>
        </div>
      </div>
      <div class="col-md-4 abt-profile">
        <div class="container1">
          <img src="assets/images/img_avatar.png" alt="Avatar" class="image" style="width:100%">
            <div class="middle">
              <div class="text4">Ms. Deepa Lalwani (Frontend Manager)</div>
            </div>
        </div>
      </div>		
		</div>
  </div>
</div>
</div>
 <?php
  include_once('footer.php');
 ?>
  </body>
</html>