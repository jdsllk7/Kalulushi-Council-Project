<html lang="en">
  <head>
    <?php 
      
      if(isset($_COOKIE["password"]) && $_COOKIE["password"] == '1234' && isset($_COOKIE["business_email"]) && $_COOKIE["business_email"] == 'admin@admin.com'){
        header('Location:index_admin.php#login_admin');
      }elseif(isset($_COOKIE["password"])){
        header('Location: dashboard.php#logged_in');
      }
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Login</title>

    <!-- CSS -->
    <link href="materialize/materials_icons/css/material-icons.css" rel="stylesheet" />
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


  <?php include 'db/validate_signup_login.php'; ?>

  <body class="white">

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
            <li><a href="index.php"><i class="material-icons">home</i></a></li>
            <li class="active"><a href="login.php">Login</a></li>
            <li><a href="signup.php">Sign up</a></li>
          </ul>
        </div>
      </nav>
    </div>

      <ul class="sidenav mobile-demo" id="mobile-demo">
        <li><a href="index.php"><i class="material-icons">home</i></a></li>
        <li class="active"><a href="login.php">Login</a></li>
        <li><a href="signup.php">Sign up</a></li>
      </ul>



    <form class="row container" method="post" enctype="multipart/form-data"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">

      <br>

      <ul class="collection with-header">
        <li class="collection-header orange darken-4 white-text"><h4>Login</h4></li>
        <li class="collection-item">


        <br>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for3" type="email" class="validate" value="<?php echo $business_email;?>" name="business_email" autofocus required>
        <label for="for3">Email</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for8" type="password" class="validate" value="<?php echo $password;?>" name="password" required>
        <label for="for8">Password</label>
      </div>

      

      <div class="input-field col s6 offset-s3 center">
        <button name="login" value='login' class="waves-effect btn-large orange darken-4 waves-light" type="submit">Login
          <i class="material-icons right">send</i>
        </button>
      </div>

      <div class="input-field col s6 offset-s3 center">
        <br>
        <a class='table_links' href='signup.php'>Sign up to create account</a>
      </div>


      </li>
      </ul>

    </form>


    <script src="js/ui.js"></script>

  </body>
</html>