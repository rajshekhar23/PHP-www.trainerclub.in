<section id="menu-area" style="margin:13px 0;">
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
          <a href="index.php"><img src="assets/images/logonew.png" alt="logo" style="width: 130px;height: 90px;"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">ABOUT US</a></li>
            <li><a href="service.php">SERVICES</a></li>
            <li><a href='trainerslist.php'>OUR TRAINERS</a></li>
            <li><a href='clientslist.php'>OUR CLIENTS</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <?php
              if (isset($_SESSION["user_role"])) {
                  echo '<li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">MY ACCOUNT
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu">';
                  if($_SESSION["user_role"] == 'Trainer') {                    
                    echo '<li><a href="editTrainerform.php?trainerId='.$_SESSION["trainerId"].'">Edit Profile</a></li>';
                  } else {
                    echo '<li><a href="editclientsform.php?clientId='.$_SESSION["clientId"].'">Edit Profile</a></li>';
                    echo '<li><a href="clientProfile.php?clientId='.$_SESSION["clientId"].'">View Profile</a></li>';
                  }
                    
                  echo '<li><a id="signout">Sign Out</a></li></ul></li>';
              }
            ?>
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