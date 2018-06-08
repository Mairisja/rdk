<!-- __________________________________________SESSION START / DB_Conf inclusion  __________________________________________________________________________ -->



<!-- __________________________________________END OF SESSION START __________________________________________________________________________ -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Par veiksmīgu sadarbību!</title>
    <!-- Favicon mazais image -->
    <link rel="icon" href='/images/rdk_ico.ico'>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <?php
    // session_start();
    // include_once 'db_config.php';
    //include_once('db_config.php');
    ?> 
  </head>

<body>

<?php

if (isset($_POST['save'])) {
  include_once('db_config.php');
  $sql = "INSERT INTO users (vards, uzvards, epasts)
    VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["email"]."')";

  $result = mysql_query($conn,$sql);
  echo "xxx1";
}

?>
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Sākums</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="about.php">Par uzņēmumu/Saziņa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Pakalpojumi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Kontakti</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="register.php">Reģistrācija</a>
          </li>
          <!-- _____________________________________DROPDOWN SIGNUP START_________________________________________________________________________ -->
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Autorizēties<span class="caret"></span></a>
            <div id="dropdown-div">
            <ul id="login-dp" class="dropdown-menu">
              <li>
                 <div id="login-background">
                    <div class="col-md-12">
                      <p>Pieslēgties lietojot: </p>
                      <div class="social-buttons">
                        <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook
                        <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a></a>
                      </div>
                      <p>vai</p>
                     <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputEmail2">Lietotājvārds</label>
                           <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                        </div>
                        <div class="form-group">
                           <label class="sr-only" for="exampleInputPassword2">Parole</label>
                           <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                 <div class="help-block text-right"><a href="">Piemirsās parole ?</a></div>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary btn-block">Pieslēgties</button>
                        </div>
                        <div class="checkbox">
                           <label>
                           <input type="checkbox"> neizbeigt sesiju
                           </label>
                        </div>
                     </form>
                    </div>
                 </div>
              </li>
            </ul>
          </div>
          </li>
          <!-- __________________________________________DROPDOWN SIGNUP END __________________________________________________________________________ -->
        </ul>
      </div>
    </div>
  </nav>

                                                          <!-- Page Content -->
    <div class="container">
      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Reģistrācija</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Sākums</a>
        </li>
        <li class="breadcrumb-item active">Reģistrācijas forma</li>
      </ol>
    </div>  


        <!-- __________________________________________REGISTER FORM START __________________________________________________________________________ -->
        <div class="centered-form">
        <div class="container"> <!-- col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4"> -->
          <div class="panel panel-default">
            <div class="panel-body">
              <form method="post" role="centered-form">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="Vards">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Uzvards">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Epasts">
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Parole">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Atkārtota parole">
                    </div>
                  </div>
                </div>
                
                <button type="submit" name="save" action="db_config.php" class="btn btn-info btn-block">savee</button>
              
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- __________________________________________REGISTER FORM END __________________________________________________________________________ --> 



      

   <!-- </div> -->
    <!-- /.container -->

    <!-- Footer -->
  <footer class="py-5 bg-dark bottom-footer">
    <div class="container">
      <p class="m-0 text-center text-white">RDK Būve SIA &copy; 2018</p>
    </div>
  </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>


</html>
