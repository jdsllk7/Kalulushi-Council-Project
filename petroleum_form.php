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



    <form class="row container" method="post" enctype="multipart/form-data"
      action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on">

      <br>

      <ul class="collection with-header">
        <li class="collection-header">
          
          
          <br>
          
          <div class='center'>
            <img class="" src="img/logo.png" width='100px' height='100px' alt="" class="circle responsive-img">
          </div>
         
          <h4 class='center'><b>Petroleum Licence</b></h4>
          <i>
            <h5 class='center'>Township (Petroleum) Regulations</h5>
          <h5 class='center'>Application For Licence to Possess Petroleum</h5>
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
        <textarea id="textarea1" class="materialize-textarea" name="postal" data-length="100"><?php echo $postal;?></textarea>
        <label for="textarea1">Postal Address</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for3" type="text" class="validate" value="<?php echo $licence_type;?>" name="licence_type" required>
        <label for="for3">Type of Licence applied for</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for9" type="text" class="validate" value="<?php echo $name_position;?>" name="name_position" required>
        <label for="for9">Name & position of storage premises</label>
      </div>
      
      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea2" class="materialize-textarea" name="description" data-length="100"><?php echo $description;?></textarea>
        <label for="textarea2">Description of petroleum</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for11" type="text" class="validate" value="<?php echo $quantity;?>" name="quantity" required>
        <label for="for11">Quantity of petroleum</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <textarea id="textarea3" class="materialize-textarea" name="storage" data-length="100"><?php echo $storage;?></textarea>
        <label for="textarea3">Manner of Storage</label>
      </div>

      <div style='margin-top:50px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6><i class="material-icons orange-text">bubble_chart</i>Where new buildings are to be erected state total amount (quantity) of petroleum proposed to be kept in each building which it is proposed to erect (below)</h6>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for5" type="text" class="validate" value="<?php echo $quantity1;?>" name="quantity1" required>
        <label for="for5">Quantity</label>
      </div>

      <div style='margin-top:50px;' class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <h6><i class="material-icons orange-text">bubble_chart</i>Do the premises in which it is proposed to keep the petroleum fulfil the conditions required by regulations 4 to 7 of the Township (Petroleum) Regulations in so far as they are applicable to the installations? (Yes / No)</h6>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <div class="switch">
          <label>
            No
            <input type="checkbox" name='conditions' value='yes' <?php if($conditions=='yes')echo 'checked';?>>
            <span class="lever"></span>
            Yes
          </label>
        </div>
        <br><br>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for10" type="text" class="validate" value="<?php echo $unknown;?>" name="unknown" required>
        <label for="for10">Unknown</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for12" type="number" class="validate" value="<?php echo $fee;?>" name="fee" required>
        <label for="for12">I/We enclose the appropriate fee of</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for2" type="number" class="validate" value="<?php echo $_COOKIE['phone_number'];?>" name="phone" required>
        <label for="for2">Applicants Phone Number</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for0" type="email" class="validate" value="<?php echo $_COOKIE['business_email'];?>" name="sign_password" required>
        <label for="for0">Signature of Applicant (Enter Email)</label>
      </div>

      <div class="input-field col s10 m8 l6 offset-s1 offset-m2 offset-l3">
        <input id="for01" type="text" class="validate" value="<?php echo $approved;?>" name="approved" required>
        <label for="for01">Approved by Fire Officer</label>
      </div>


      <div class="input-field col s6 offset-s3 center">
        <button name="petroleum_form_btn" value="petroleum_form_btn" class="waves-effect btn-large orange darken-4 waves-light" type="submit">Submit
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