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

    <title>Scrap Metal Dealer Licence | Review</title>

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

      $data = mysqli_query($conn,"SELECT * from scrap_form WHERE user_id='$id'");

      if (mysqli_num_rows($data) == 1 ) {

        $user = mysqli_fetch_assoc($data);

        $first_name = $user['first_name'];
        $last_name = $user['last_name'];
        $postal = $user['postal'];
        $business_name = $user['business_name'];
        $stand_no = $user['stand_no'];
        $street = $user['street'];
        $street_no = $user['street_no'];
        $town = $user['town'];
        $sign_password = $user['sign_password'];
        $status = $user['status'];
        $date = $user['date'];
        
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
          <li><a class="modal-trigger" href="scrap_applicants_admin.php">Back</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
          <li><a href="index_admin.php"><i class="material-icons">home</i></a></li>
          <li class="sidenav-trigger" data-target="side-form"><a>Forms</a></li>
          <li><a class="modal-trigger" href="scrap_applicants_admin.php">Back</a></li>
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
        <?php
            $id = $_GET['id'];
            $data = mysqli_query($conn,"SELECT form_status FROM scrap_form WHERE user_id='$id'");
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

          <h4 class='center'><b>Scrap Metal Dealer Licence</b></h4>
          <i>
            <h5 class='center'>The Scrap Metal Dealers' ACT</h5>
          <h5 class='center'>Application Aor Grant of a Scrap Metal Dealer’s License</h5>
        </i>
        </li>
        <li class="collection-item">


        <br>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l3">
        <input id="for" type="text" class="" value="<?php echo $first_name;?>" name="first_name" autofocus required readonly>
        <label for="for">Applicant's First Name</label>
      </div>

      <div class="input-field col s10 m8 l3 offset-s1 offset-m2 offset-l0">
        <input id="for1" type="text" class="" value="<?php echo $last_name;?>" name="last_name" required readonly>
        <label for="for1">Applicant's Last Name</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea1" class="materialize-textarea" name="postal" readonly data-length="100"><?php echo $postal;?></textarea>
        <label for="textarea1">Postal Address</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for9" type="text" class="" value="<?php echo $business_name;?>" name="business_name" required readonly>
        <label for="for9">Business Name</label>
      </div>


      <div style='margin-top:50px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6><i class="material-icons orange-text">bubble_chart</i> Enter premises on or from which business conducted (below):</h6>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for5" type="number" min='1' class="" value="<?php echo $stand_no;?>" name="stand_no" required readonly>
        <label for="for5">Stand No.</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for12" type="text" class="" value="<?php echo $street;?>" name="street" required readonly>
        <label for="for12">Name of Street</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for15" type="number" min='1' class="" value="<?php echo $street_no;?>" name="street_no" required readonly>
        <label for="for15">Street No.</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for15" type="text" class="" value="<?php echo $town;?>" name="town" required readonly>
        <label for="for15">Town/District</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for0" type="email" class="" value="<?php echo $sign_password;?>" name="sign_password" required readonly>
        <label for="for0">Signature of Applicant (Enter Email)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for3" type="text" class="" value="<?php echo $status;?>" name="status" required readonly>
        <label for="for3">Status</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for2" type="date" class="" value="<?php echo $date;?>" name="date" required readonly>
        <label for="for2">Date</label>
      </div>
      
      <input type='hidden' name='id' value='<?php echo $_GET["id"];?>'>

      <div class="input-field col s8 offset-s2 center">
        <button name="s_form_btn_approve" value="s_form_btn_approve" class="waves-effect approve_deny_btn btn-large green darken-4 waves-light" type="submit">Approve
          <i class="material-icons right">check</i>
        </button>

        <button name="s_form_btn_deny" value="s_form_btn_deny" class="waves-effect approve_deny_btn btn-large red darken-4 waves-light" type="submit">Deny
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