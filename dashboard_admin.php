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

    <title>Home - Dashboard</title>

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
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
          <li><a href="index_admin.php"><i class="material-icons">home</i></a></li>
          <li class="sidenav-trigger" data-target="side-form"><a>Forms</a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
      </ul>

      <?php
        include 'include_components/sidenav_forms.php';
      ?>




       
        
      <br>

      <div class="row">

        <h4 class="center grey-text darken-4">COMPANY NAME: <?php if(isset($_GET['business_name'])){ echo $_GET['business_name'];} ?></h4>
        <br>


        <div class="col s12 m6 l4">
          <div class="card grey darken-2">
            <div class="col s3 right" style='margin-top:10px;'>
              <img src="img/logo.png" alt="" class="circle responsive-img">
            </div>
            <div class="card-content white-text">
              <span class="card-title">Business levy</span>
            </div>
            <div class="card-action white-text">
              <b>STATUS: </b><a class='red-text'>Denied!</a>
              <!-- <b>STATUS: </b><a class='green-text'>Approved!</a> -->
              <br><b>Click to: </b><a href='business_form_admin.php'>Review</a>
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
            </div>
            <div class="card-action white-text">
              <b>STATUS: </b><a class='red-text'>Denied!</a>
              <!-- <b>STATUS: </b><a class='green-text'>Approved!</a> -->
              <br><b>Click to: </b><a href='business_form_admin.php'>Review</a>
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
            </div>
            <div class="card-action white-text">
              <!-- <b>STATUS: </b><a class='red-text'>Denied!</a> -->
              <b>STATUS: </b><a class='green-text'>Approved!</a>
              <br><b>Click to: </b><a href='business_form_admin.php'>Review</a>
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
            </div>
            <div class="card-action white-text">
              <!-- <b>STATUS: </b><a class='red-text'>Denied!</a> -->
              <b>STATUS: </b><a class='green-text'>Approved!</a>
              <br><b>Click to: </b><a href='business_form_admin.php'>Review</a>
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
            </div>
            <div class="card-action white-text">
              <!-- <b>STATUS: </b><a class='red-text'>Denied!</a> -->
              <b>STATUS: </b><a class='green-text'>Approved!</a>
              <br><b>Click to: </b><a href='business_form_admin.php'>Review</a>
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
            </div>
            <div class="card-action white-text">
              <!-- <b>STATUS: </b><a class='red-text'>Denied!</a> -->
              <b>STATUS: </b><a class='green-text'>Approved!</a>
              <br><b>Click to: </b><a href='business_form_admin.php'>Review</a>
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
            </div>
            <div class="card-action white-text">
              <!-- <b>STATUS: </b><a class='red-text'>Denied!</a> -->
              <b>STATUS: </b><a class='green-text'>Approved!</a>
              <br><b>Click to: </b><a href='business_form_admin.php'>Review</a>
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