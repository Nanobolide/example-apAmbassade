
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title class="">Ambassade de la RCA</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  {{-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{route('home')}}" class="">RCA</a></h1>
     
      <nav id="navbar" class="navbar">
          <ul>
            <li><a href="{{route('home')}}" class="active">ACCUEIL</a></li>

                <li class="dropdown"><a href="#"><span>Ambassade</span> <i class="bi bi-chevron-right"></i></a>
                  <ul>
                    <li><a href="{{route('ambassadeur')}}">Ambassadeur</a></li>
                    <li><a href="{{route('equipe')}}">Notre equipe </a></li>
                    <li><a href="{{'horaire'}}">Horaire et accès</a></li>
                  
              </ul>
            </li>
            
            <li class="dropdown"><a href=""><span>Services</span><i class="bi bi-chevron-right"></i> </a>
              <ul>
                  <li><a href="{{route('inscrire')}}">S'inscrire a l'Ambassade</a></li>
                  <li><a href="{{route('carte')}}">Carte consulaire</a></li>
                  <li><a href="{{route('visa')}}">Demande de VISA</a></li>
                  <li><a href="">Laissez-Passer</a></li>
              </ul>
            </li>
          
            <li class="dropdown"><a href="#"><span>Presse</span> <i class="bi bi-chevron-right"></i></a>
               <ul>
                  <li><a href="{{route('actualite')}}">Actualité</a></li>
                  <li><a href="{{route('communique')}}">Communiqués</a></li>
               </ul>
            </li>
            <li><a href="{{route('contact')}}">Contact</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  



  @yield('content')
  


</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top ">
    <div class="container mt-5">
      <div class="row fixed">

        <div class="col-lg-3 col-md-6">
          <div class="footer-info">
            <h3>Sailor</h3>
            <p>
              Cocody Danga , Abidjan<br>
              Côte d'ivoire 
              <br><br>
              <strong>Phone:</strong> +225 0789103731<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>
        </div>

        

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Nos Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">S'inscrire a l'Ambassade</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Carte consulaire</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Visa</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Laissez-Passer</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit" value="Subscribe">
          </form>

        </div>

      </div>
    </div>
  </div>


</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>