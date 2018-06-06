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

  </head>

  <body>

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
            <li class="nav-item">
              <a class="nav-link" href="register.php">Reģistrācija</a>
            </li>
             <!-- _________________________________________________________________________DROPDOWN SIGNUP START_________________________________________________________________________ -->
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
            <!-- _________________________________________________________________________DROPDOWN SIGNUP END __________________________________________________________________________ -->
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('/images/rdk_aeroc.JPG')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Būvmateriāli</h3>
              <p>visi produkti, kas saistīti ar būvniecību</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/rdk_home.JPG')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Piegāde</h3>
              <p>iespēja nogādāt preci pasūtītājam</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/rdk_home2.JPG')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Konsultācijas</h3>
              <p>no pamatiem, līdz jumtam.</p>
            </div>
          </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/rdk_home5.JPG')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Individuāla pieeja</h3>
                <p>katram pasūtījumam</p>
              </div>
          </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/rdk_home6.JPG')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Tāmēšana</h3>
                <p>pilnīgai projekta izmaksu noteikšanai</p>
              </div>
          </div>
                  <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('/images/rdk_home3.JPG')">
              <div class="carousel-caption d-none d-md-block">
                <h3>Atsauksmes</h3>
                <p>tiek laipni gaidītas no pasūtītājiem</p>
              </div>
          </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Iepriekšējais</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Nākamais</span>
        </a>
      </div>
    </header>

    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4"></h1>

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Piegāde</h4>
            <div class="card-body">
              <p class="card-text">Pasūtot preci nenāksies domāt par tās nogādāšanu objektā, to Jūsu vietā izdarīsim mēs, viss kas ir nepieciešams, jāvienojas par pasūtāmo preci un tās daudzumu.</p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Cenu politika</h4>
            <div class="card-body">
              <p class="card-text">Lai arī būvniecības preču tirgū ir lieli konkurenti, mēs parūpēsimies par to, lai cenas būtu vis konkurētspējīgākās un apmierinātu klientu.</p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Attieksme</h4>
            <div class="card-body">
              <p class="card-text">Katrs mūsu klients ir īpašs, tādēļ ar katru klientu tiek rūpīgi strādāts un uzklausīts klienta viedoklis.</p>
            </div>
            <div class="card-footer">
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      
      <hr>

      <!-- Call to Action Section -->
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Jebkāda veida informāciju var saņemt rakstot uz informatīvo e-pastu, vai arī dodoties uz sadaļu <b>Kontakti</b> un izvēloties jebkuru no mūsu klientu apkalpošanas speciālistiem</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" >info@rdkbuve.lv</a>
        </div>
      </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">RDK Būve SIA &copy; 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
