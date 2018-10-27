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
  <?php
    include_once('header.php');
    include_once('menu.php');
  ?>
  <!-- BEGIN MENU -->
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
        <h2 class="text-center formTitle"> Client's Job Post Form </h2>
        <form name="PostJobForm" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-10" style="padding=0.5em;">
                <div class="form-group">
                    <label for="Job Title" class="col-form-label">Job Title</label>
                    <select id="jobTitle" name="jobTitle" class="form-control" required>
                    <option value="">Select Job Title</option>
                    <option value="Classroom">Classroom</option>
                    <option value="Training Inbound">Training Inbound</option>
                    <option value="Training Outbound">Training Outbound</option>
                    <option value="Content development">Content development</option>
                    <option value="Training Need Analysis">Training Need Analysis</option>
                    <option value="Training Audit">Training Audit</option>
                    <option value="L&D Operations Resource">L&D Operations Resource</option>
                    <option value="Corporate Video Making">Corporate Video Making</option>
                    <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="Industry Type" class="col-form-label">Industry Type</label>
                    <select id="industryType" name="industryType" class="form-control" required>
                    <option value="">Select Industry Type</option>
                    <option value="Automobiles">Automobiles</option>
                    <option value="Banking">Banking</option>
                    <option value="Finance">Finance</option>
                    <option value="Insurance">Insurance</option>
                    <option value="IT">IT</option>
                    <option value="Hospitality">Hospitality</option>
                    <option value="Hospital">Hospital</option>
                    <option value="Hotel">Hotel</option>
                    <option value="Real Estate Company">Real Estate Company</option>
                    <option value="Retail">Retail</option>
                    <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                      <label for="Position Type" class="col-form-label">Position Type</label>
                      <select id="positionType" name="positionType" class="form-control" required>
                          <option value="">Select Position Type</option>
                          <option value="Full Time">Full Time</option>
                          <option value="Freelancer">Freelancer</option>
                          <option value="Project Based">Project Based</option>
                      </select>
                  </div>
                <div class="form-group">
                    <label for="Salary / Payment Period" class="col-form-label">Salary / Payment Period</label>
                    <select id="salaryPeriod" name="salaryPeriod" class="form-control" required>
                        <option value="">Select Salary/Payment Period</option>
                        <option value="Monthly">Monthly</option>
                        <option value="Per Day">Per Day</option>
                        <option value="Hourly">Hourly</option>
                        <option value="Project Based">Project Based</option>
                    </select>
                </div>
                <div class="form-group">
                      <label for="City" class="col-form-label">City</label>
                      <input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name" required>
                </div>
                <div class="form-group">
                    <label for='gallery' class="col-form-label">Upload Images And Logos:</label>
                    <input id='gallery' name="gallery[]" type="file" multiple="multiple" required/>
                </div>
                <div class="form-group">
                    <div class="row">
                      <div class="col-md-2">
                        <label for="Salary Range" class="col-form-label" style="line-height: 35px;">Salary Range</label>
                      </div>
                      <div class="col-md-3">
                        <label><input type="text" name="salaryMinRange" class="form-control" placeholder="Min Salary Range" required></label>
                      </div>
                      <div class="col-md-3">
                        <label><input type="text" name="salaryMaxRange" class="form-control" placeholder="Max Salary Range" required></label>
                      </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-md-2">
                        <label for="Job Description" class="col-form-label">Job Description</label>
                    </div>
                    <div class="col-md-8">
                        <textarea name="jobDescription" id="jobDescription" class="form-control" placeholder="Enter City Name" required></textarea>
                    </div>
                    </div>  
                </div>
                <label class="text-left" style="width: 100%;margin:20px 0;">
                    * Please do not mention your contact details anywhere in this form.
                </label>
            </div>
          </div>
          <button class='btn btn-primary btn-md' id="btnSavePost" style="background-color:#2bcdc1;" type="submit">SAVE</button>
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
  <script src="assets/js/jquery.min.js"></script>
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