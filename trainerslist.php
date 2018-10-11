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
  <link rel="stylesheet" href="assets/css/customTrainerList.css">
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
  <?php
    include_once('header.php');
  ?>
  <!-- End header -->


  <!-- BEGIN MENU -->
  <?php
    include_once('menu.php'); 
  ?>
  <!-- END MENU -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>

  <!-- Start login modal window -->
  <?php 
    include_once("login.php");
  ?>
  <!-- End login modal window -->

  <!-- Start contact section  -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <h2 class="text-center formTitle"> Our Trainer's List </h2>
        <div class="row">
            <div class="col-md-10 searchFilterWrapper">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Practice Area" class="col-form-label">Location</label>
                        <input type="text" name="location" id="location" class="form-control">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Practice Area" class="col-form-label">Industry</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Practice Area" class="col-form-label">Skills</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" >                </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Country" class="col-form-label">Experience</label>
                        <select id="country" name="country" class="form-control" >
                            <option value="">SELECT COUNTRY</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3" style="display:none;">
                    <div class="form-group">
                        <label for="Country" class="col-form-label">State</label>
                        <select id="state" name="state" class="form-control" >
                            <option value="">SELECT STATE</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="Country" class="col-form-label minHeight"></label>
                        <button class='btn btn-primary btn-md' id="btnSearch" style="background-color:#2bcdc1;" type="submit">Search</button>
                        <button class='btn btn-primary btn-md' id="btnReset" style="background-color:#2bcdc1;" type="reset">Reset</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="trainerListWrapper">
      </div>
    </div>
  </section>
  <?php
    include_once('footer.php');
  ?>
  <!-- End contact section  -->
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
  <script src="./assets/js/customTrainerList.js"></script>
  <script>
      $(document).ready(function() {
          readAllTrainersList();
          $("form[name='login']").submit(function() {
              var user_name = $("form :input[name='user_name']").val();
              var user_password = $("form :input[name='user_password']").val();
              var user_password = $("form :input[name='user_role']").val();
              var flag = "checkAuth";
              $.post("./backend/loginOperation.php",{
                  flag:flag,
                  user_name:user_name,
                  user_password:user_password,
                  user_role:user_role
              },function(data) {
                  alert(data);
              });
          });
          $("#logout,#signout").click(function() {
            event.preventDefault();
          $.post("./backend/logoutOperation.php",{},function(data) {
            window.location.href = "index.php";
          });
        });
      });
      function readAllTrainersList(){
        $.post("./backend/allProducts.php",{
            flag:"readAllTrainersList"
        },function(data) {
            console.log(data);                  
            //var item;
            data.forEach(function(object,index) {
                var item = '<div class = "col-sm-6 col-md-3 item">' +
                    '<div class = "thumbnail">'+
                        '<img src = "./backend/uploads/trainerIdentity-50.png" alt = "Trainer\'s identity">'+
                    '</div>'+
                    '<div class = "caption">'+
                        '<p class="fullname">Full Name: <span>'+ 
                            object.firstName + ' ' + object.middleName +' ' + object.lastName +'</span></p>'+
                        '<p>City: '+ object.city +'</p>'+
                        '<p>State: '+ object.state +'</p>'+
                        '<p>Email: '+ object.emailId +'</p>'+
                    '</div>'+
                '</div>';
                $("#trainerListWrapper").append(item);
            });
        });          
      }
  </script>
</body>

</html>