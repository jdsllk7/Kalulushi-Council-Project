<html lang="en">
  <head>
    <?php 
    
      include 'db/connect.php';
      
      if(isset($_COOKIE["password"]) && $_COOKIE["password"] == '1234' && isset($_COOKIE["business_email"]) && $_COOKIE["business_email"] == 'admin@admin.com'){
        header('Location:index_admin.php#login_admin');
      }elseif(isset($_COOKIE["password"])){
        header('Location: dashboard.php#logged_in');
      }
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Kalulushi Municipal Council | Apply</title>

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



  <body class="black body_content">

    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper orange darken-4">
        <a href="index.php" class="brand-logo">
          <div class="col s3" style='margin-top:10px;padding-left:5px;'>
            <img src="img/logo.png" width='50px' height='50px' alt="" class="circle responsive-img">
            <span style='position:relative;top:-12px;'>Kalulushi Municipal Council</span>
          </div>
        </a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li class="active"><a href="index.php"><i class="material-icons">home</i></a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign up</a></li>
          </ul>
        </div>
      </nav>
    </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
        <li class="active"><a href="index.php"><i class="material-icons">home</i></a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign up</a></li>
      </ul>

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
        <h5>Certificate Application Center</h5>
        <!-- <br> -->
        <br>
        <a href='login.php' class="waves-effect btn-large orange darken-4 waves-light">Get Started</a>
        
      </div>


    

  </body>

  <script src="js/ui.js"></script>
</html>