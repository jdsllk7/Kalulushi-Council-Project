<html lang="en">
  <head>
    <?php 
    
      include 'db/connect.php';
      
      if(!isset($_COOKIE["password"])){
        header('Location: index.php#logged_out');
      }
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>User Profile</title>

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

  <?php include 'db/validate_signup_login.php'; 
  

    $business_email_db = $_COOKIE['business_email'];
    $password_db = $_COOKIE['password'];
    $tpin_number_db = $_COOKIE['tpin_number'];

    $data = mysqli_query($conn,"SELECT * from users WHERE tpin_number='$tpin_number_db' AND business_email='$business_email_db' AND password='$password_db'");

    if (mysqli_num_rows($data) == 1 ) {

      $user = mysqli_fetch_assoc($data);
      $first_name = $user['first_name'];
			$last_name = $user['last_name'];
			$business_name = $user['business_name'];
			$business_email = $business_email_db = $user['business_email'];
			$phone_number = $user['phone_number'];
			$tpin_number = $tpin_number_db = $user['tpin_number'];
			$reg_number = $user['reg_number'];
			$nrc_number = $user['nrc_number'];
			$password = $password_db = $user['password'];

    }//end if()
  
    // echo $business_email_db.'---';
  ?>


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
          <li class="active"><a href="profile.php">Profile</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
          <li><a href="dashboard.php">Forms</a></li>
          <li class="active"><a href="profile.php">Profile</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
      </ul>




      <form class="row container" method="post" enctype="multipart/form-data"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">

      <br>

      <ul class="collection with-header">
        <li class="collection-header orange darken-4 white-text"><h4>Edit Profile</h4></li>
        <li class="collection-item">


        <br>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l3">
        <input id="for" type="text" class="validate" value="<?php echo $_COOKIE['first_name'];?>" name="first_name" autofocus required>
        <label for="for">First Name</label>
      </div>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l0">
        <input id="for1" type="text" class="validate" value="<?php echo $_COOKIE['last_name'];?>" name="last_name" required>
        <label for="for1">Last Name</label>
      </div>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l3">
        <input id="for2" type="text" class="validate" value="<?php echo $_COOKIE['business_name'];?>" name="business_name" required>
        <label for="for2">Business Name</label>
      </div>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l0">
        <input id="for3" type="email" class="validate" value="<?php echo $business_email;?>" name="business_email" required>
        <label for="for3">Email</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for4" type="text" class="validate" value="<?php echo $phone_number;?>" name="phone_number" required>
        <label for="for4">Phone Number</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3 tooltipped" data-position="bottom" data-delay="50" data-tooltip="TPIN can't be changed!">
        <input id="for5" type="number"  min="0" class="validate" value="<?php echo $tpin_number;?>" name="tpin_number" required readonly>
        <label for="for5">TPIN Number</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for6" type="number"  min="0" class="validate" value="<?php echo $reg_number;?>" name="reg_number" required>
        <label for="for6">Registration Number</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for7" type="text" class="validate" value="<?php echo $nrc_number;?>" name="nrc_number" required>
        <label for="for7">NRC Number</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for8" type="password" class="validate" value="<?php echo $password;?>" name="password" required>
        <label for="for8">Password</label>
      </div>

      

      <div class="input-field col s6 offset-s3 center">
        <button name="profile" value='profile' class="waves-effect btn-large orange darken-4 waves-light" type="submit">Done
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