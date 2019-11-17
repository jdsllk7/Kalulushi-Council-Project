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

    <title>Health Permit Certificate | Applicants</title>

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




       
        

        <div class="row">
          <br>
          <br>

          <ul id='applicant_table' class="collection container with-header">
            <li class="collection-header"><h4><b>Health Permit Applicants</b></h4></li>
            <li class="collection-item">
            <table class='striped highlight'>
            <thead>
              <tr>
                  <th>Company Name</th>
                  <th>TPIN No.</th>
                  <th>Status</th>
                  <th>Review</th>
              </tr>
            </thead>

            <tbody>
              <?php
                $sql = "SELECT health_form.form_status as form_status, users.id as id, users.business_name as business_name, users.tpin_number as tpin_number
                         FROM users INNER JOIN health_form 
                          ON users.id=health_form.user_id";
                $result = mysqli_query($conn, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                      if($row["form_status"]=='pending'){
                        $row["form_status"] = "<i class='black-text'>Pending...</i>";
                      }elseif($row["form_status"]=='denied'){
                        $row["form_status"] = "<i class='red-text'>Denied!</i>";
                      }elseif($row["form_status"]=='approved'){
                        $row["form_status"] = "<i class='green-text'>Approved</i>";
                      }
                      echo"<tr>
                        <td>".$row["business_name"]."</td>
                        <td>".$row["tpin_number"]."</td>
                        <td class='black-text'><i>".$row["form_status"]."</i></td>
                        <td><a class='table_links' href='health_form_admin.php?business_name=".$row["business_name"]."&id=".$row["id"]."'>Review</a></td>
                      </tr>";
                    }
                } else {
                  echo "<tr>
                    <td class='red-text'>No Forms Submitted Yet...</td>
                  </tr>";
                }
              ?>
            </tbody>
          </table>
            </li>
          </ul>


        </div>





        <?php
          include 'include_components/modals.php';
        ?>
    

  </body>

  <script src="js/ui.js"></script>
</html>