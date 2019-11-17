<html lang="en">
  <head>
    <?php 
    
      if(!isset($_COOKIE["password"])){
        header('Location: index.php#logged_out');
      }
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Apply | Business Levy</title>

    <!-- CSS -->
    <link href="materialize/materials_icons/css/material-icons.css"
      rel="stylesheet" />
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <!-- <link rel="manifest" href="manifest_me.json"> -->

    <!-- brower icons -->
    <link rel="icon" type="image/gif" href="img/icon-72x72.png">
    <link rel="shortcut icon" href="img/logo.png">

    

    <meta name="theme-color" content="#4db6ac">

    <!--Import jQuery before materialize.js-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="materialize/js/materialize.min.js"></script>

  </head>

  <?php include 'db/validate_forms.php'; ?>

  <body class="white">

      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper orange darken-4">
          <a href="dashboard.php" class="brand-logo">
              <div class="col s3" style='margin-top:10px;'>
                <img src="img/logo.png" width='50px' height='50px' alt="" class="circle responsive-img">
                <span style='position:relative;top:-12px;'>Kalulushi Municipal Council</span>
              </div>
            </a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                          <li><a href="dashboard.php">Forms</a></li>
              <li><a href="profile.php">Profile</a></li>
              <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
            </ul>
          </div>
        </nav>
      </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
                    <li><a href="dashboard.php">Forms</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
      </ul>




    <form class="row container" method="post" enctype="multipart/form-data"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">

      <br>

      <ul class="collection with-header">
        <li class="collection-header">
          <h6 class='right white-text orange darken-4 form_badge'>SI No. 70 OF 2011</h6>

          <div class='center'>
            <img class="" src="img/logo.png" width='100px' height='100px' alt="" class="circle responsive-img">
          </div>

          <h4 class='center'><b>Business Levy</b></h4>
          <i>
            <h5 class='center'>The Local Government (Business Levy) Regulations 2011</h5>
          <h5 class='center'>Application For Issue of Business Levy</h5>
        </i>
        </li>
        <li class="collection-item">


        <br>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l3">
        <input id="for" type="text" class="validate" value="<?php echo $_COOKIE['first_name'];?>" name="first_name" autofocus required>
        <label for="for">Applicant's First Name</label>
      </div>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l0">
        <input id="for1" type="text" class="validate" value="<?php echo $_COOKIE['last_name'];?>" name="last_name" required>
        <label for="for1">Applicant's Last Name</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for2" type="date" class="validate" value="<?php echo $dob;?>" name="dob" required>
        <label for="for2">Date of Birth</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for3" type="text" class="validate" value="<?php echo $_COOKIE['password'];?>" name="nrc" required>
        <label for="for3">National Registration Card No.</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea1" class="materialize-textarea" name="postal" data-length="100"><?php echo $postal;?></textarea>
        <label for="for4">Postal Address</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea1" class="materialize-textarea" name="physical" data-length="100"><?php echo $physical;?></textarea>
        <label for="for4">Physical Address</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for9" type="text" class="validate" value="<?php echo $_COOKIE['business_name'];?>" name="business_name" required>
        <label for="for9">Business Name</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for10" type="text" class="validate" value="<?php echo $business_type;?>" name="business_type" required>
        <label for="for10">Type of Business</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for11" type="text" class="validate" value="<?php echo $business_area;?>" name="business_area" required>
        <label for="for11">Area of Business</label>
      </div>

      <div style='margin-top:80px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6>Enter Premises on or from which business is conducted (below):</h6>
      </div>
      

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for5" type="text" class="validate" value="<?php echo $stand_no;?>" name="stand_no" required>
        <label for="for5">Stand No.</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for12" type="text" class="validate" value="<?php echo $street;?>" name="street" required>
        <label for="for12">Name of Street</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for15" type="text" class="validate" value="<?php echo $town;?>" name="town" required>
        <label for="for15">Town/District</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for0" type="email" class="validate" value="<?php echo $_COOKIE['business_email'];?>" name="sign_password" required>
        <label for="for0">Signature of Applicant (Enter Email)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for14" type="date" class="validate" value="<?php echo $date;?>" name="date" required>
        <label for="for14">Date</label>
      </div>      

      <div class="input-field col s6 offset-s3 center">
        <button name="business_form_btn" value="business_form_btn" class="waves-effect btn-large orange darken-4 waves-light" type="submit">Submit
          <i class="material-icons right">send</i>
        </button>
      </div>

      </li>
      </ul>

    </form>




    <?php
          include 'include_components/modals.php';
        ?>
    

  </body>

  <script src="js/ui.js"></script>
</html>