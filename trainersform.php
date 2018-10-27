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
        <h2 class="text-center formTitle"> Trainer's Enrollment Form </h2>
        <form name="trainerForm" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-10" style="padding=0.5em;">
              <div class="panel panel-default">
                <div class="panel-heading">Trainers Category</div>
                  <div class="panel-body">
                    <div class="form-group">
                      <label for="Select Trainer" class="col-form-label">Select Trainer</label>
                      <select id="trainerParentCategory" name="trainerParentCategory" class="form-control" required>
                        <option value="">Select Category</option>
                        <option value="Corporate Trainer">Corporate Trainer</option>
                        <option value="Professional Institute Trainer">Professional Institute Trainer</option>
                        <option value="School Teacher/Tutor">School Teacher/Tutor</option>
                        <option value="College Professor">College Professor</option>
                        <option value="Self Employed">Self Employed</option>
                      </select>
                      </div>
                      <div class="form-group">
                          <label for="Select Sub Category" class="col-form-label">Select Sub Category</label>
                          <select id="subCategory" name="subCategory" class="form-control" required>
                            <option value="">Select Sub Category</option>
                          </select>
                      </div>
                </div>
            </div>
              <div class="panel panel-default">
                <div class="panel-heading">Skill Sets</div>
                <div class="panel-body">
                  <div class="form-group">
                      <label for="Soft Skills" class="col-form-label">Soft Skills</label>
                      <select id="selectSoftSkills" name="selectSoftSkills" class="form-control" required>
                      <option value="">Select Soft Skills</option>
                      </select>
                      <input type="text" name="selectSoftSkillsText" id="selectSoftSkillsText" class="form-control" 
                        placeholder="Enter Soft Skill">
                  </div>
                  <div class="form-group">
                      <label for="Technical Skills" class="col-form-label">Technical Skills</label>
                      <input type="text" name="technicalSkills" id="technicalSkills" class="form-control" placeholder="Enter Technical Skills" required>
                  </div>
                  <div class="form-group">
                      <div class="col-md-2">
                        <label for="Soft Skills" class="col-form-label" style="line-height: 35px;margin-left: -12px;">Willing to travel ?</label>
                      </div>
                      <div class="col-md-2">
                        <label><input type="checkbox" name="willingTravelNational" value="National">National</label>
                      </div>
                      <div class="col-md-3">
                        <label><input type="checkbox" name="willingTravelInternational" value="International">International</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Qualification</div>
                <div class="panel-body">
                  <div class="form-group">
                      <label for="Academic" class="col-form-label">Academic</label>
                      <input type="text"  name="academic" id="academic" class="form-control" placeholder="Academic" required>
                  </div>
                  <div class="form-group">
                      <label for="Professional" class="col-form-label">Professional</label>
                      <input type="text" name="professional" id="professional" class="form-control" placeholder="Professional" required>
                  </div>
                  <div class="form-group">
                      <label for="Diploma/Certification" class="col-form-label">Diploma / Certification</label>
                      <input type="text" name="diplomaCertification" id="diplomaCertification" class="form-control" placeholder="Diploma / Certification" required>
                  </div>
                  <div class="form-group">
                      <label for="Awards / Rewards" class="col-form-label">Awards / Rewards</label>
                      <input type="text" name="awardsRewards" id="awardsRewards" class="form-control" placeholder="Awards / Rewards" required>
                  </div>
                  <div class="form-group">
                      <label for="Awards / Rewards" class="col-form-label">Brief About Your Professional Journey</label>
                      <textarea name="profJourney" id="profJourney" rows="6" class="form-control" placeholder="Brief About Your Professional Journey" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="Total Experience in yrs" class="col-form-label">Total Experience (Years)</label>
                      <input type="text" name="totalExperience" id="totalExperience" class="form-control" placeholder="Total Experience (Years)" required>
                  </div>
                  <div class="form-group">
                      <label for="Relevant Training Experience in yrs" class="col-form-label">Relevant Training Experience (Years)</label>
                      <input type="text" name="relevantExperience" id="relevantExperience" class="form-control" placeholder="Relevant Training Experience (Years)" required>
                  </div>
                  <div class="form-group">
                      <label for="Organization worked with" class="col-form-label">Organization Worked With [Latest 5] </label>
                      <div class="row">
                        <div class="col-md-1" style="padding:0;">
                            <p for="Sequence" class="text-center" style="margin-top:5px;">1</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="orgName1" id="orgName1" class="form-control" placeholder="Organization Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="trainingName1" id="trainingName1" class="form-control" placeholder="Training Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="topicsCovered1" id="topicsCovered1" class="form-control" placeholder="Topics Covered">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="duration1" id="duration1" class="form-control" placeholder="Duration">
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="start" name="start" name="monthyear1" id="monthyear1" class="form-control" placeholder="Month / Year">
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-1" style="padding:0;">
                            <p for="Sequence" class="text-center" style="margin-top:5px;">2</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="orgName2" id="orgName2" class="form-control" placeholder="Organization Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="trainingName2" id="trainingName2" class="form-control" placeholder="Training Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="topicsCovered2" id="topicsCovered2" class="form-control" placeholder="Topics Covered">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="duration2" id="duration2" class="form-control" placeholder="Duration">
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="start" name="start" name="monthyear2" id="monthyear2" class="form-control" placeholder="Month / Year">
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-1" style="padding:0;">
                            <p for="Sequence" class="text-center" style="margin-top:5px;">3</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="orgName3" id="orgName3" class="form-control" placeholder="Organization Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="trainingName3" id="trainingName3" class="form-control" placeholder="Training Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="topicsCovered3" id="topicsCovered3" class="form-control" placeholder="Topics Covered">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="duration3" id="duration3" class="form-control" placeholder="Duration">
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="start" name="start" name="monthyear3" id="monthyear3" class="form-control" placeholder="Month / Year">
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-1" style="padding:0;">
                            <p for="Sequence" class="text-center" style="margin-top:5px;">4</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="orgName4" id="orgName4" class="form-control" placeholder="Organization Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="trainingName4" id="trainingName4" class="form-control" placeholder="Training Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="topicsCovered4" id="topicsCovered4" class="form-control" placeholder="Topics Covered">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="duration4" id="duration4" class="form-control" placeholder="Duration">
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="start" name="start" name="monthyear4" id="monthyear4" class="form-control" placeholder="Month / Year">
                        </div>
                      </div><br>
                      <div class="row">
                        <div class="col-md-1" style="padding:0;">
                            <p for="Sequence" class="text-center" style="margin-top:5px;">5</p>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="orgName5" id="orgName5" class="form-control" placeholder="Organization Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="trainingName5" id="trainingName5" class="form-control" placeholder="Training Name">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="topicsCovered5" id="topicsCovered5" class="form-control" placeholder="Topics Covered">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="duration5" id="duration5" class="form-control" placeholder="Duration">
                        </div>
                        <div class="col-md-2">
                            <input type="text" id="start" name="start" name="monthyear5" id="monthyear5" class="form-control" placeholder="Month / Year">
                        </div>
                      </div><br>
                      <div class="row text-center">
                        <button class="btn btn-info btn-sm" id="addAllOrgWorkedWithList">ADD ALL</button>
                      </div>
                      <!-- <select id="selectOrgWorkedWith" name="selectOrgWorkedWith" class="form-control" required>
                        <option value="">Select Org Worked With</option>
                        <option value="Freelancer / Enterpreneur">Freelancer / Enterpreneur</option>
                        <option value="FTE (Full Time Employee)">FTE (Full Time Employee)</option>
                      </select>
                      <input type="text" name="selectOrgWorkedWith" id="selectOrgWorkedWithText" class="form-control" 
                        placeholder="Enter Organization Name"> -->
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Add Gallery/Images</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for='gallery' class="col-form-label">Browse Images:</label>
                        <input id='gallery' name="gallery[]" type="file" multiple="multiple" required/>
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Reffered By</div>
                <div class="panel-body">
                    <div class="form-group">

                        <label for="First Name" class="col-form-label">Name of TC Member</label>
                        <input type="text"  name="tcmember" id="tcmember" class="form-control" placeholder="Name of TC Member">
                    </div>
                    <div class="form-group">
                        <label for="Enrollment Id" class="col-form-label">Enrollment ID</label>
                        <input type="text" name="enrollmentId" id="enrollmentId" class="form-control" placeholder="Enrollment Id">
                    </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading">Personal Information</div>
                <div class="panel-body">
                  <div class="form-group">

 <label for='gallery' class="col-form-label">Add Profile Picture</label>
                        <input id='gallery' name="gallery[]" type="file" multiple="multiple" required/>

                        <label for="First Name" class="col-form-label">First Name</label>
                        <input type="text"  name="firstName" id="firstName" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="Middle Name" class="col-form-label">Middle Name</label>
                        <input type="text" name="middleName" id="middleName" class="form-control" placeholder="Middle Name">
                    </div>
                    <div class="form-group">
                        <label for="Last Name" class="col-form-label">Last Name</label>
                        <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="Contact" class="col-form-label">Contact</label>
                        <input type="text" name="contact" id="contactus" class="form-control" placeholder=" Contact" required>
                    </div>
                    <div class="form-group">
                        <label for="Email Id" class="col-form-label">Email Id</label>
                        <input type="text" name="emailId" id="emailId" class="form-control" placeholder="Email Id" required>
                    </div>
                    <div class="form-group">
                        <label for="Full Postal Address" class="col-form-label">Address</label>
                        <input type="text" name="fullPostalAddress" id="fullPostalAddress" class="form-control" placeholder="Address" required>
                    </div>
                    <div class="form-group">
                        <label for="Street" class="col-form-label">Street</label>
                        <input type="text" name="street" id="street" class="form-control" placeholder="Street" required>
                    </div>
                    <div class="form-group">
                        <label for="City" class="col-form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="City" required>
                    </div>
                    <div class="form-group">
                        <label for="Pincode" class="col-form-label">Pincode</label>
                        <input type="text" name="pincode" id="pincode" class="form-control" placeholder="Pincode" required>
                    </div>
                    <div class="form-group">
                        <label for="State" class="col-form-label">State</label>
                        <select name="state" id="state" class="form-control" required>
                          <option value="">Select State</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Confirm Your Identity" class="col-form-label">Please upload the following documents: </label>
                          <br><label for="Confirm Your Identity" class="col-form-label">Aadhar Card [Optional] </label>
                        <input type="file" name="aadharIdentity" id="aadharIdentity" placeholder="Identity" />
                          <br><label for="Confirm Your Identity" class="col-form-label">PAN Card</label>
                        <input type="file" name="panIdentity" id="panIdentity" placeholder="Identity" required />
                          <br><label for="Confirm Your Identity" class="col-form-label">Cancelled Cheque</label>
                        <input type="file" name="canceledCheckIdentity" id="canceledCheckIdentity" placeholder="Identity" required />
                    </div>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-form-label">Form Submission T&C</label><br>
              </div>
              <div class="form-group">
                  <label class="col-form-label" style="font-size:16px;font-weight:bold">CODE OF CONDUCTS FOR MEMBERS</label><br>
                  <ul class="codeOfConductList">
                    <li>
                      <b>False representation</b> - The member of Trainer’s club will not do any false representation as a Trainer’s club employee or use Logo for their personal purpose at any place any time until having written approval / agreement signed and stamped by authorized concerned person. Incase found guilty will subject to immediate termination of membership.
                    </li>
                    <li>
                      <b>Referral Code</b> – The member will provide brief information to referral and once they are ready to know more about it, they will be handover to Trainer’s club team for taking the discussion further as per the process.
                    </li>
                    <li>
                      <b>Over Promises</b> – Member will never over promise anything to Clients / referrals on behalf of Trainer’s club and at any given point of time put their best foot forward for professional support to all stake holders.
                    </li>
                    <li>
                      <b>Misguidance</b> – Member will never misguide any trainer/stake holder/ audience/ participants on any aspect of work related to Trainer’s club until he has written approval as proof for conveying any message.
                    </li>
                    <li>
                      <b>Gifts / Rewards</b> – Members are strictly not allowed to accept any Gifts / Rewards from any clients after your work delivery and should immediately bring it in notice of trainer’s club management for Final decision.
                    </li>
                    <li>
                      <b>Behavioral Code</b> – Member will make sure their Professional behavior in any business conduct when represented as trainer’s club member at any place/event/training (online or offline) and avoid misbehavior in any case by maintaining peace and bring the matter in writing to TC management for further action.
                    </li>
                    <li>
                      <b>Integrity & Ethics policy </b> – TC Member will make sure that they will follow integrity & Ethics policy in every business representation or monetary aspect as trainer’s club member all the time.
                    </li>
                    <li>
                      <b>Ethics at Client location</b> – Member will never provide / share any personal information Visiting cards or phone numbers to any one, at Trainer’s Club client’s location. On such conduct the membership will be terminated with NO refunds or other transactions.
                    </li>
                    <li>
                      <b>Promissory for Training Delivery</b> – Member Promise to work hard towards their vision and provide their best delivery at any given point of time for ensuring consistent presence in market and increase in demand and support trainer’s club team for your own success.
                        Member will make sure that after giving confirmation on any project to Trainer’s Club they will work end to end for the project, will make timely presence and follow all clients’ instruction while delivering the training.
                    </li>
                    <li>
                      <b>Confidentiality</b> – The member will never disclose any confidential information which will affect the reputation of Trainer’s Club & other Members enrolled and any such conduct will be subject to termination of membership with no refund or other transactions.
                    </li>

                  </ul>
              </div>
            </div>
<label class="readAndAgree"><input type="checkbox"  name="readAndAgree" id="readAndAgree" required>
                    I agree to all the terms and conditions mentioned above
                  </label>

          </div>
          <button class='btn btn-primary btn-md' id="btnSave" style="background-color:#2bcdc1;" type="submit">SAVE</button>
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
            <p>Designed & Developed by <a href="http://cerbosys.com/">Cerbosys</a></p>
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