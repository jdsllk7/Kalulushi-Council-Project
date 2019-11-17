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

    <title>Forms | Apply</title>

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
          <li class="active"><a href="dashboard.php">Forms</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
          <li class="active"><a href="dashboard.php">Forms</a></li>
          <li><a href="profile.php">Profile</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
      </ul>



       

        <div class="row">

          <h3 class="center orange-text white darken-4">Certificate Application</h3>

          <br>
        

          <div class="col s12 m6 l4">
            <div class="card grey darken-2">
              <div class="col s3 right" style='margin-top:10px;'>
                <img src="img/logo.png" alt="" class="circle responsive-img">
              </div>
              <div class="card-content white-text">
                <span class="card-title">Business levy</span>
                <p>Apply for a Business levy Certificate.</p>
              </div>
              
              <div class="card-action white-text">
                <?php
                    $id = $_COOKIE['id'];
                    $data = mysqli_query($conn,"SELECT form_status FROM business_form WHERE user_id='$id'");
                    if($data==true){
                      $user = mysqli_fetch_assoc($data);
                      if($user['form_status'] == 'pending'){
                        echo "<b>STATUS: </b><a class='yellow-text modal-trigger' href='#modal_pending'>Submitted</a>";
                      }elseif($user['form_status'] == 'approved'){
                        echo "<b>STATUS: </b><a class='green-text modal-trigger' href='#modal_approved'>Approved!</a>";
                      }elseif($user['form_status'] == 'denied'){
                        echo "<b>STATUS: </b><a class='red-text modal-trigger' href='#modal_denied'>Denied!</a>";
                      }else{
                        echo "<b>Click to: </b><a href='business_form.php'>Apply</a>";
                      } 
                    }else{
                      echo "<b>STATUS: </b><a class='cyan-text modal-trigger' href='#modal_coming'>Coming soon...</a>";
                    }
                ?>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card grey darken-2">
            <div class="col s3 right" style='margin-top:10px;'>
                <img src="img/logo.png" alt="" class="circle responsive-img">
              </div>
              <div class="card-content white-text">
                <span class="card-title">Fire Certificate</span>
                <p>Apply for a Fire Certificate.</p>
              </div>
              <div class="card-action white-text">
                <?php
                    $id = $_COOKIE['id'];
                    $data = mysqli_query($conn,"SELECT form_status FROM fire_form WHERE user_id='$id'");
                    if($data==true){
                      $user = mysqli_fetch_assoc($data);
                      if($user['form_status'] == 'pending'){
                        echo "<b>STATUS: </b><a class='yellow-text modal-trigger' href='#modal_pending'>Submitted</a>";
                      }elseif($user['form_status'] == 'approved'){
                        echo "<b>STATUS: </b><a class='green-text modal-trigger' href='#modal_approved'>Approved!</a>";
                      }elseif($user['form_status'] == 'denied'){
                        echo "<b>STATUS: </b><a class='red-text modal-trigger' href='#modal_denied'>Denied!</a>";
                      }else{
                        echo "<b>Click to: </b><a href='fire_form.php'>Apply</a>";
                      } 
                    }else{
                      echo "<b>STATUS: </b><a class='cyan-text modal-trigger' href='#modal_coming'>Coming soon...</a>";
                    }
                ?>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card grey darken-2">
            <div class="col s3 right" style='margin-top:10px;'>
                <img src="img/logo.png" alt="" class="circle responsive-img">
              </div>
              <div class="card-content white-text">
                <span class="card-title">Health Permit Licence</span>
                <p>Apply for a Health Permit Licence.</p>
              </div>
              <div class="card-action white-text">
                <?php
                    $id = $_COOKIE['id'];
                    $data = mysqli_query($conn,"SELECT form_status FROM health_form WHERE user_id='$id'");
                    if($data==true){
                      $user = mysqli_fetch_assoc($data);
                      if($user['form_status'] == 'pending'){
                        echo "<b>STATUS: </b><a class='yellow-text modal-trigger' href='#modal_pending'>Submitted</a>";
                      }elseif($user['form_status'] == 'approved'){
                        echo "<b>STATUS: </b><a class='green-text modal-trigger' href='#modal_approved'>Approved!</a>";
                      }elseif($user['form_status'] == 'denied'){
                        echo "<b>STATUS: </b><a class='red-text modal-trigger' href='#modal_denied'>Denied!</a>";
                      }else{
                        echo "<b>Click to: </b><a href='health_form.php'>Apply</a>";
                      } 
                    }else{
                      echo "<b>STATUS: </b><a class='cyan-text modal-trigger' href='#modal_coming'>Coming soon...</a>";
                    }
                ?>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card grey darken-2">
            <div class="col s3 right" style='margin-top:10px;'>
                <img src="img/logo.png" alt="" class="circle responsive-img">
              </div>
              <div class="card-content white-text">
                <span class="card-title">Liquor Licence Certficate</span>
                <p>Apply for a Liquor Licence Certficate.</p>
              </div>
              <div class="card-action white-text">
                <?php
                    $id = $_COOKIE['id'];
                    $data = mysqli_query($conn,"SELECT form_status FROM liquor_form WHERE user_id='$id'");
                    if($data==true){
                      $user = mysqli_fetch_assoc($data);
                      if($user['form_status'] == 'pending'){
                        echo "<b>STATUS: </b><a class='yellow-text modal-trigger' href='#modal_pending'>Submitted</a>";
                      }elseif($user['form_status'] == 'approved'){
                        echo "<b>STATUS: </b><a class='green-text modal-trigger' href='#modal_approved'>Approved!</a>";
                      }elseif($user['form_status'] == 'denied'){
                        echo "<b>STATUS: </b><a class='red-text modal-trigger' href='#modal_denied'>Denied!</a>";
                      }else{
                        echo "<b>Click to: </b><a href='liquor_form.php'>Apply</a>";
                      } 
                    }else{
                      echo "<b>STATUS: </b><a class='cyan-text modal-trigger' href='#modal_coming'>Coming soon...</a>";
                    }
                ?>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card grey darken-2">
            <div class="col s3 right" style='margin-top:10px;'>
                <img src="img/logo.png" alt="" class="circle responsive-img">
              </div>
              <div class="card-content white-text">
                <span class="card-title">Petroleum Licence</span>
                <p>Apply for a Petroleum Licence.</p>
              </div>
              <div class="card-action white-text">
                <?php
                    $id = $_COOKIE['id'];
                    $data = mysqli_query($conn,"SELECT form_status FROM petroleum_form WHERE user_id='$id'");
                    if($data==true){
                      $user = mysqli_fetch_assoc($data);
                      if($user['form_status'] == 'pending'){
                        echo "<b>STATUS: </b><a class='yellow-text modal-trigger' href='#modal_pending'>Submitted</a>";
                      }elseif($user['form_status'] == 'approved'){
                        echo "<b>STATUS: </b><a class='green-text modal-trigger' href='#modal_approved'>Approved!</a>";
                      }elseif($user['form_status'] == 'denied'){
                        echo "<b>STATUS: </b><a class='red-text modal-trigger' href='#modal_denied'>Denied!</a>";
                      }else{
                        echo "<b>Click to: </b><a href='petroleum_form.php'>Apply</a>";
                      } 
                    }else{
                      echo "<b>STATUS: </b><a class='cyan-text modal-trigger' href='#modal_coming'>Coming soon...</a>";
                    }
                ?>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card grey darken-2">
            <div class="col s3 right" style='margin-top:10px;'>
                <img src="img/logo.png" alt="" class="circle responsive-img">
              </div>
              <div class="card-content white-text">
                <span class="card-title">Scrap Metal Dealer's Licence ACT</span>
                <p>Apply for a Scrap Metal Dealer's Licence.</p>
              </div>
              <div class="card-action white-text">
                <?php
                    $id = $_COOKIE['id'];
                    $data = mysqli_query($conn,"SELECT form_status FROM scrap_form WHERE user_id='$id'");
                    if($data==true){
                      $user = mysqli_fetch_assoc($data);
                      if($user['form_status'] == 'pending'){
                        echo "<b>STATUS: </b><a class='yellow-text modal-trigger' href='#modal_pending'>Submitted</a>";
                      }elseif($user['form_status'] == 'approved'){
                        echo "<b>STATUS: </b><a class='green-text modal-trigger' href='#modal_approved'>Approved!</a>";
                      }elseif($user['form_status'] == 'denied'){
                        echo "<b>STATUS: </b><a class='red-text modal-trigger' href='#modal_denied'>Denied!</a>";
                      }else{
                        echo "<b>Click to: </b><a href='scrap_form.php'>Apply</a>";
                      } 
                    }else{
                      echo "<b>STATUS: </b><a class='cyan-text modal-trigger' href='#modal_coming'>Coming soon...</a>";
                    }
                ?>
              </div>
            </div>
          </div>

          <div class="col s12 m6 l4">
            <div class="card grey darken-2">
            <div class="col s3 right" style='margin-top:10px;'>
                <img src="img/logo.png" alt="" class="circle responsive-img">
              </div>
              <div class="card-content white-text">
                <span class="card-title">Manufacturing License</span>
                <p>Apply for a Manufacturing Licence.</p>
              </div>
              <div class="card-action white-text">
                <?php
                    $id = $_COOKIE['id'];
                    $data = mysqli_query($conn,"SELECT form_status FROM manufacturing_form WHERE user_id='$id'");
                    if($data==true){
                      $user = mysqli_fetch_assoc($data);
                      if($user['form_status'] == 'pending'){
                        echo "<b>STATUS: </b><a class='yellow-text modal-trigger' href='#modal_pending'>Submitted</a>";
                      }elseif($user['form_status'] == 'approved'){
                        echo "<b>STATUS: </b><a class='green-text modal-trigger' href='#modal_approved'>Approved!</a>";
                      }elseif($user['form_status'] == 'denied'){
                        echo "<b>STATUS: </b><a class='red-text modal-trigger' href='#modal_denied'>Denied!</a>";
                      }else{
                        echo "<b>Click to: </b><a href='manufacturing_form.php'>Apply</a>";
                      } 
                    }else{
                      echo "<b>STATUS: </b><a class='cyan-text modal-trigger' href='#modal_coming'>Coming soon...</a>";
                    }
                ?>
              </div>
            </div>
          </div>

        </div>




        <?php
          include 'include_components/modals.php';
        ?>


  </body>

  <script src="js/ui.js"></script>
</html>