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

  <?php
    include_once('header.php');
    include_once('menu.php');
  ?>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <!-- Start login modal window -->
  <?php
    include_once('login.php');
  ?>
  <!-- End login modal window -->

  <!-- Start contact section  -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <h2 class="text-center formTitle"> Client's Enrollment Form </h2>
        <form name="editclientForm" method="post" enctype="multipart/form-data">
          <div class="row">
             <div class="col-md-10">
                <div class="form-group">
                      <label for="Select Trainer" class="col-form-label">Client Name</label>
                      <input type="text" value="<?php echo $row["clientname"]?>" name="clientname" id="clientname" placeholder="Enter Full Name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Select Sub Category" class="col-form-label">Client Email Id</label>
                    <input type="email" value="<?php echo $row["clientemail"]?>" name="clientemail" id="clientemail" class="form-control" placeholder="Enter Email Id" required>
                </div>
                <div class="form-group">
                      <label for="Select Trainer" class="col-form-label">Client Contact</label>
                      <input type="text" value="<?php echo $row["clientcontact"]?>" name="clientcontact" id="clientcontact" maxlength="10" placeholder="Enter 10 Digit Contact Number" onkeypress="return isNumberKey(event)" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="Select Sub Category" class="col-form-label">Client Location</label>
                    <input type="text"  value="<?php echo $row["clientaddress"]?>" name="clientaddress" id="clientaddress" class="form-control" placeholder="Enter Full Address Here" required/>
                </div>
                <div class="form-group">
                  <label for="Confirm Your Identity" class="col-form-label">Confirm Your Identity</label>
                  <input type="file" name="identity" id="identity" placeholder="Identity" required />
                </div>
             </div>   
          </div>
          <button class='btn btn-primary btn-md' id="btnSave" style="background-color:#2bcdc1;" type="submit">Update Profile</button>
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