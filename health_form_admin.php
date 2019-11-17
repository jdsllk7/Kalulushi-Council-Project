<html lang="en">
  <head>
    <?php 
    
      if(!isset($_COOKIE["password"]) || (isset($_COOKIE["business_email"]) && $_COOKIE["business_email"] != 'admin@admin.com')){
        header('Location: index.php#logged_out');
      }
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Health Permit Certificate | Review</title>

    <!-- CSS -->
    <link href="materialize/materials_icons/css/material-icons.css"
      rel="stylesheet"/>
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

  <?php 
    include 'db/connect.php'; 
      
    if(!isset($_GET['business_name']) || !isset($_GET['id'])){
      header('Location:index_admin.php');
    }

    $id = $_GET['id'];

    $data = mysqli_query($conn,"SELECT * from health_form WHERE user_id='$id'");

    if (mysqli_num_rows($data) == 1 ) {

      $user = mysqli_fetch_assoc($data);

      $postal = $user['postal'];
      $plot_road = $user['plot_road'];
      $first_name = $user['first_name'];
      $last_name = $user['last_name'];
      $date = $user['date'];
      $sign_password = $user['sign_password'];
      
		

    }//end if()

  ?>

  <body class="white">

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper orange darken-4">
        <a href="index_admin.php" class="center brand-logo">
          <div class="col s3" style='margin-top:10px;'>
            <img src="img/logo.png" width='50px' height='50px' alt="" class="circle responsive-img">
            <span style='position:relative;top:-12px;'>Council Admin</span>
          </div>
        </a>
        <a href="#"><i class="material-icons sidenav-trigger" data-target="side-form">collections_bookmark</i></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="index_admin.php"><i class="material-icons">home</i></a></li>
          <li class="sidenav-trigger" data-target="side-form"><a>Forms</a></li>
          <li><a class="modal-trigger" href="health_applicants_admin.php">Back</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
          <li><a href="index_admin.php"><i class="material-icons">home</i></a></li>
          <li class="sidenav-trigger" data-target="side-form"><a>Forms</a></li>
          <li><a class="modal-trigger" href="health_applicants_admin.php">Back</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
      </ul>

      <?php
        include 'include_components/sidenav_forms.php';
      ?>



      <br>
      <h4 class="center grey-text darken-4">COMPANY NAME: <?php if(isset($_GET['business_name'])){ echo $_GET['business_name'];} ?></h4>

      <form class="row container" method="post" enctype="multipart/form-data"
      action="db/validate_forms.php" autocomplete="on">

      <br>

      <ul class="collection with-header">
        <li class="collection-header">
          <h6 class='right white-text orange darken-4 form_badge'>Tel/fax: 733593/749101</h6>
          <?php
              $id = $_GET['id'];
              $data = mysqli_query($conn,"SELECT form_status FROM health_form WHERE user_id='$id'");
              $user = mysqli_fetch_assoc($data);
              if($user['form_status'] == 'pending'){
                echo "<i class='left black-text form_badge2'>Pending...</i>";
              }elseif($user['form_status'] == 'approved'){
                echo "<i class='left green-text form_badge2'>Approved!</i>";
              }elseif($user['form_status'] == 'denied'){
                echo "<i class='left red-text form_badge2'>Denied!</i>";
              }
          ?>
          <br>

          <div class='center'>
            <img class="" src="img/logo.png" width='100px' height='100px' alt="" class="circle responsive-img">
          </div>
          
          <h4 class='center'><b>Health Permit Certificate</b></h4>
          <i>
            <h5 class='center'>Application For Health Permit</h5>
          </i>
        </li>
        <li class="collection-item">


        <br>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea autofocus id="textarea1" class="materialize-textarea" name="postal" readonly data-length="100"><?php echo $postal;?></textarea>
        <label for="textarea1">Premises</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for3" type="text" class="" value="<?php echo $plot_road;?>" name="plot_road" required readonly>
        <label for="for3">Plot Number / Road</label>
      </div>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l3">
        <input id="for" type="text" class="" value="<?php echo $first_name;?>" name="first_name" required readonly>
        <label for="for">Applicant's First Name</label>
      </div>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l0">
        <input id="for1" type="text" class="" value="<?php echo $last_name;?>" name="last_name" required readonly>
        <label for="for1">Applicant's Last Name</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for2" type="date" class="" value="<?php echo $date;?>" name="date" required readonly>
        <label for="for2">Date</label>
      </div>

      <div style='margin-top:50px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6><b>Dear Sir,</b></h6>
        <h6>I wish to make application for Health Permit/Nursery Permit to trade under, the regulation as stated below: - </h6>
        <p style='margin-left:10px;'>(a)	Public Health (Meat, Abattoir and Butcheries) Regulation</p>
        <p style='margin-left:10px;'>(b)	Food and Drug Regulation 1975</p>
        <p style='margin-left:10px;'>(c)	Public Health (Tea Rooms and Restaurant, Boarding House and Hotel)</p>
        <p style='margin-left:10px;'>(d)	Public Health (Abattoirs and Transport of Meat Regulations)</p>
        <p style='margin-left:10px;'>(e)	Pre-school/Nursery School Act Cap 541</p>
        <p style='margin-left:10px;'>(f)	Public Health Building Regulations </p>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for0" type="email" class="" value="<?php echo $sign_password;?>" name="sign_password" required readonly>
        <label for="for0">Signature of Applicant (Enter Email)</label>
      </div>
<input type='hidden' name='id' value='<?php echo $_GET["id"];?>'>

      <div class="input-field col s8 offset-s2 center">
        <button name="h_form_btn_approve" value="h_form_btn_approve" class="waves-effect approve_deny_btn btn-large green darken-4 waves-light" type="submit">Approve
          <i class="material-icons right">check</i>
        </button>

        <button name="h_form_btn_deny" value="h_form_btn_deny" class="waves-effect approve_deny_btn btn-large red darken-4 waves-light" type="submit">Deny
          <i class="material-icons right">clear</i>
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