<?php
  if(isset($_GET["clientId"])) {
    require('backend/dbConnect.php');
    $query = "select * from clients where client_id=" .$_GET["clientId"];
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
  <title>Trainer's Club</title>
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
    include_once('login.php');
  ?>
  <!-- End header -->


  <!-- BEGIN MENU -->
  
  <!-- END MENU -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- Start contact section  -->
  <section id="contact" style="margin-bottom:160px;">
    <div class="container">
      <div class="row">
        <p class="pull-left"><h2 class="text-center formTitle"> Profile </h2></p>
        <p class="pull-right" style="margin-top:20px;"><a class="btn btn-info" href="postjob.php">Post Job</a></p/>
        <form name="trainerForm" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                  <div class="col-md-3">
                    Profile Picture / Indentity <br><br>
                    <div class = "thumbnail">
                    <?php echo '<img src = "./backend/uploads/clientIdentity-'. $row["client_id"].'.jpg" alt = "Client\'s identity">'; ?>
                    </div>
                  </div>
                  <div class="col-md-8" style="border-left:1px solid #ddd;">
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Client Name :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['clientname']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Client Email :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['clientemail']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Client Contact :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['clientcontact']?></label>
                    </div>
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label" >Client Address :</label>
                      <label for="Select Trainer" class="col-form-label"><?php echo $row['clientaddress']?></label>
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
            <p>Designed by <a href="http://www.cerbosys.com/">cerbosys</a></p>
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