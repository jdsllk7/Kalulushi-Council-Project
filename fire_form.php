<html lang="en">
  <head>
    <?php 
    
      if(!isset($_COOKIE["password"])){
        header('Location: index.php#logged_out');
      }
      // echo $_COOKIE["id"];
    
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
          <h6 class='right white-text orange darken-4 form_badge'>Tel/fax: 733593/749101</h6>
          
          <div class='center'>
            <img class="" src="img/logo.png" width='100px' height='100px' alt="" class="circle responsive-img">
          </div>

          <h4 class='center'><b>Fire Brigade</b></h4>
          <i>
            <h5 class='center'>Application For Fire Certificate</h5>
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
        <textarea id="textarea2" class="materialize-textarea" name="postal" data-length="100"><?php echo $postal;?></textarea>
        <label for="textarea2">Postal Address</label>
      </div>

      <div style='margin-top:50px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6><i class="material-icons orange-text">bubble_chart</i> Enter premises in which fire certificate is requires (below):</h6>
      </div>
      

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for5" type="number" min='1' class="validate" value="<?php echo $stand_no;?>" name="stand_no" required>
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
        <input id="for9" type="text" class="validate" value="<?php echo $leaseholder;?>" name="leaseholder" required>
        <label for="for9">Name of leaseholder</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea1" class="materialize-textarea" name="physical" data-length="100"><?php echo $physical;?></textarea>
        <label for="textarea1">Premises (Address)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for16" type="number" class="validate" value="<?php echo $floors;?>" name="floors" required>
        <label for="for16">Number of floors in the building</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for17" type="number" class="validate" value="<?php echo $building_no;?>" name="building_no" required>
        <label for="for17">Number of buildings</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for18" type="number" class="validate" value="<?php echo $stuff_no;?>" name="stuff_no" required>
        <label for="for18">Maximum number of stuff on premises</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for19" type="number" class="validate" value="<?php echo $persons_no;?>" name="persons_no" required>
        <label for="for19">Maximum number of other persons on premises</label>
      </div>


      <div style='margin-top:50px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6><i class="material-icons orange-text">bubble_chart</i> Explosives & Flammable materials on premises:</h6>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for20" type="text" class="validate" value="<?php echo $type;?>" name="type" required>
        <label for="for20">Type</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for21" type="text" class="validate" value="<?php echo $quantity;?>" name="quantity" required>
        <label for="for21">Quantity</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for2" type="number" class="validate" value="<?php echo $_COOKIE['phone_number'];?>" name="phone" required>
        <label for="for2">Phone Number</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea3" class="materialize-textarea" name="report" data-length="100"><?php echo $report;?></textarea>
        <label for="textarea3">Fire inspector report (in detail)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for10" type="text" class="validate" value="<?php echo $inspected_by;?>" name="inspected_by" required>
        <label for="for10">Premises inspected by</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for3" type="text" class="validate" value="<?php echo $authority;?>" name="authority" required>
        <label for="for3">Name of authority</label>
      </div>
      
      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for14" type="date" class="validate" value="<?php echo $date;?>" name="date" required>
        <label for="for14">Date</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for11" type="text" class="validate" value="<?php echo $approved;?>" name="approved" required>
        <label for="for11">Chief Fire Officer</label>
      </div>

      <div class="input-field col s6 offset-s3 center">
        <button name="fire_form_btn" value="fire_form_btn" class="waves-effect btn-large orange darken-4 waves-light" type="submit">Submit
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