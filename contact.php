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
            <li class="nav-item active">
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

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Kontakti
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Sākums</a>
        </li>
        <li class="breadcrumb-item active">Kontakti</li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8698.828933337776!2d24.110767156678886!3d56.970947302083154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46eecfbefe3761d7%3A0x3324318a0debf9d0!2sGan%C4%ABbu+dambis+7A!5e0!3m2!1sen!2slv!4v1508773063801" width="400" height="300" frameborder="0" style="border:0" allowfullscreen width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Firmas rekvizīti</h3>
          <p>
            <b>Faktiskā adrese: </b>
            <br>Ganību dambis 7a, Rīga, LV-1045
            <br>
          </p>
          <p>
            <b>Reģ.Nr.:</b>
            <br>40103479297</br>
          </p>
          
          <p>
            <abbr title="Email"><b>E-pasts</b></abbr>:
            <a href="mailto:name@example.com"><br/>info@rdkbuve.lv
            </a>
          </p>
          <p>
            <b>Darba laiks:</b>
            <br> Pirmdiena - Piektdiena: 8:00 līdz 19:00</br>
          </p>
          <p>
            <b>Banku rekvizīti:</b><br>
            Swedbank AS, kods HABALV22<br>
            <b>Konts :   </b>LV30HABA0551040528017<br><br>
            Citadele banka, AS, kods PARXLV22<br> 
            <b>Konts :  </b>LV04PARX0016589390001</br>
          </p>
            <b>Cits:</b>
            <br>
            PVN Nr. LV40103479297<br>
            Jurid.adrese: Bruņinieku iela 79-13, Rīga, Latvija, LV-1009
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Nosūtīt mums ziņu</h3>
          <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Vārds un Uzvārds:</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Lūdzu ievadiet savu vārdu.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Tālrunis:</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Lūdzu, ievadiet tālruni">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>E-pasta adrese:</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Lūdzu, aizpildiet e-pasta lauku.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Ziņa:</label>
                <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Lūdzu, ievadiet ziņojumu." maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">Sūtīt ziņu</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

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

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>

</html>
