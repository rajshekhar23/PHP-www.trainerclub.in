<?php
  if(isset($_GET["trainerId"])) {
    require('backend/dbConnect.php');
    $query = "select * from trainers where id=" .$_GET["trainerId"];
    $result = mysqli_query($conn,$query);
    $rows = mysqli_num_rows($result);
    if( $rows > 0) {
      $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    }   
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Intensely : Contact</title>
  <link rel="shortcut icon" type="image/icon" href="assets/images/logo.png" />
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
  <style>
  .clientWrapper {
    margin:0 auto;
  }
  .form-group { 
    margin-bottom: 10px;
  }
  .form-group label {
      margin:0 5px;
  }
  .form-group label:first-child {
      width:250px;
  }

  .thumbnail {
    width: 170px;
    min-height:200px;
    display:inline-block;
  }
  </style>
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
  <?php
    include_once('header.php');
    include_once('menu.php');
  ?>
  <!-- End header -->


  <!-- BEGIN MENU -->
  
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
        <h2 class="text-center formTitle"> Trainer's Enrolled Profile </h2>
        <form name="trainerForm" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="col-md-3">
                    Profile Picture / Indentity <br><br>
                    <div class = "thumbnail">
                        <img src = "./backend/uploads/trainerIdentity-2.png" alt = "Trainer\'s identity">
                    </div>
                  </div>
                  <div class="col-md-8" style="border-left:1px solid #ddd;"> <br><br>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Main Trainer Category :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['trainerParentCategory']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Sub Trainer Category :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['subCategory']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Selected Soft Skill :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['selectSoftSkills']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Willing To Travel :</label>
                      <label for="Select Trainer" class="col-form-label"><?php $willingToTravel = $row['willingToTravel']; echo explode("|",$willingToTravel)[0] . " And ". explode("|",$willingToTravel)[1];?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Academic :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['academic']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Professional :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['professional']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Diploma/Certification :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['diplomaCertification']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Awards/Rewards :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['awardsRewards']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >professional Journey :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['profJourney']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Total Experience :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['totalExperience']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Relevant Experience :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['relevantExperience']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Organization Worked With :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['selectOrgWorkedWith']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >TC Member Name :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['tcmember']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Enrollment Id :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['enrollmentId']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Full Name:</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['firstName']." ".$row['middleName']." ".$row['lastName'];?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Contact Number :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['contact']?></label>
                    </div>                  
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Email Id :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['emailId']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Full Postal Address :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['fullPostalAddress']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Street :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['street']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >City :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['city']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Pin code :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['pincode']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >State :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['state']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Uploaded Gallery :</label> <br>
                      <?php
                        $dir='backend/uploads/trainer/'.$row['id'].'/*';
                        $fileList = glob($dir);
                        foreach($fileList as $filename){
                          echo '<div class = "thumbnail">
                            <img src = "'.$filename.'" alt = "Trainer\'s identity">
                          </div>';
                       }
                      ?>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </form>
      </div><br>
    </div>
  </section>
  <!-- End contact section  -->

  <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right">
            <a href="index.php"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
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