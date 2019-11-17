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

      <br>

    <form class="row container" method="post" enctype="multipart/form-data"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">

      <ul class="collection with-header">
        <li class="collection-header">

          <h6 class='right white-text orange darken-4 form_badge'>Form 1<br>(Front of Form)</h6>
          
          <div class='center'>
            <img class="" src="img/logo.png" width='100px' height='100px' alt="" class="circle responsive-img">
          </div>

          <h4 class='center'><b>The Liquor Licencing ACT</b></h4>
          <i>
            <p class='center'>(Section 20 (1) and (2)</p>
            <h5 class='center'>Application For The Grant or Renewal of a Liquor Licence</h5>
        </i>
        </li>
        <li class="collection-item">


        <br>

      

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for17" type="text" class="validate" value="<?php echo $to_licencing_luthority;?>" name="to_licencing_luthority" required>
        <label for="for17">To (Licencing Authority)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for3" type="text" class="validate" value="<?php echo $full_authority;?>" name="full_authority" required>
        <label for="for3">(Full Authority)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea1" class="materialize-textarea" name='physical' data-length="100"><?php echo $physical;?></textarea>
        <label for="for4">Of (Address)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for16" type="text" class="validate" value="<?php echo $grant_renewal;?>" name="grant_renewal" required>
        <label for="for16">Hereby apply for the grant/renewal of a...</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for15" type="text" class="validate" value="<?php echo $licence_in_respect;?>" name="licence_in_respect" required>
        <label for="for15">licence in respect of the premises is...</label>
      </div>

      <div style='margin-top:50px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6><i class="material-icons orange-text">bubble_chart</i> The application is made by me in my capacity as an employee of:</h6>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for10" type="text" class="validate" value="<?php echo $_COOKIE['business_name'];?>" name="business_name" required>
        <label for="for10">Business Name</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea1" class="materialize-textarea" name="postal" data-length="100"><?php echo $postal;?></textarea>
        <label for="for20">State Address of Company, firm, etc</label>
      </div>

      <div style='margin-top:50px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6><i class="material-icons orange-text">bubble_chart</i> I wish this application to be treated as an application for the grant of restricted licence of the type mentioned above.
          <br><br>I hereby certify that I am not disqualified from being granted a licence under the provisions of Section 19 of the Liquor Licencing Act.
        </h6>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for14" type="date" class="datepicker" class="validate" value="<?php echo $gazette_dated;?>" name="gazette_dated" required>
        <label for="for14">Act were published in the Gazette dated</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for19" type="text" class="validate" value="<?php echo $newspaper;?>" name="newspaper" required>
        <label for="for19">and in the (insert name of newspaper)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for18" type="date" class="validate" value="<?php echo $issue_date;?>" name="issue_date" required>
        <label for="for18">Newspaper Issue Date</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for0" type="email" class="validate" value="<?php echo $_COOKIE['business_email'];?>" name="sign_password" required>
        <label for="for0">Signature of Applicant (Enter Email)</label>
      </div>

      <div class="input-field col s6 offset-s3 center">
        <button name="liquor_form_btn" value="liquor_form_btn" class="waves-effect btn-large orange darken-4 waves-light" type="submit">Submit
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