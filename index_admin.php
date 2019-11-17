<html lang="en">
  <head>
    <?php 
    
      include 'db/connect.php';
      
      if(!isset($_COOKIE["password"]) || (isset($_COOKIE["business_email"]) && $_COOKIE["business_email"] != 'admin@admin.com')){
        header('Location: index.php#logged_out');
      }
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kalulushi Municipal Council | Admin</title>

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



  <body class="white body_content">

  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper orange darken-4">
        <a href="index_admin.php" class="center brand-logo">
          <div class="col s3" style='margin-top:10px;'>
            <img src="img/logo.png" width='50px' height='50px' alt="" class="circle responsive-img">
            <span style='position:relative;top:-12px;'>Kalulushi Municipal Council</span>
          </div>
        </a>
        <a href="#"><i class="material-icons sidenav-trigger" data-target="side-form">collections_bookmark</i></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li class="active"><a href="index_admin.php"><i class="material-icons">home</i></a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
        </ul>
      </div>
    </nav>
  </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
          <li class="active"><a href="index_admin.php"><i class="material-icons">home</i></a></li>
          <li><a class="modal-trigger" href="#modal_out">Log out</a></li>
      </ul>


      <?php
        include 'include_components/sidenav_forms.php';
      ?>


        <div class="container white-text center">
        
          <!-- <br> -->
          <br>
          <div class="col s3">
            <img src="img/logo.png" alt="" class="circle responsive-img">
          </div>
          <h3>KALULUSHI MUNICIPAL COUNCIL</h3>
          <br>
          <hr>
          <br>
          <h5>ADMINISTRATION CENTER</h5>
          <!-- <br> -->
          <br>
          <a class="sidenav-trigger waves-effect waves-light orange darken-4 btn-large" data-target="side-form">Applicant Forms</a>
          
        </div>





        <?php
          include 'include_components/modals.php';
        ?>
    

  </body>

  <script src="js/ui.js"></script>
</html>