<?php 
include_once('../controller/UserC.php');
$UserC = new UserC();
session_start();
$id=$_SESSION["iduser"];
$nomUser=$UserC->recupererNom($id);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CALMINI</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../cssClient/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../cssClient/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid py-2 border-bottom d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-decoration-none text-body pe-3" href=""><i class="bi bi-telephone me-2"></i>+012 345 6789</a>
                        <span class="text-body">|</span>
                        <a class="text-decoration-none text-body px-3" href=""><i class="bi bi-envelope me-2"></i>info@example.com</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-end">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-body px-2" href="https://facebook.com/freewebsitecode/">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-body px-2" href="https://freewebsitecode.com/">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-body px-2" href="https://freewebsitecode.com/">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-body px-2" href="https://freewebsitecode.com/">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-body ps-2" href="https://youtube.com/freewebsitecode/">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

        <!-- Navbar Start -->
      <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
          <nav class="navbar navbar-expand-sm bg-white navbar-light py-3 py-lg-0">

            <a href="index.php" class="navbar-brand logo">
              <img src="../img/logo2.png" alt="site-logo" class="site-logo" style="position: relative !important; right: 100px;">
              <span class="sr-only">Site Logo</span>
            </a>
            
            <div class="collapse navbar-collapse" id="navbarCollapse">
              <ul class="navbar-nav ms-5 py-0">
                <li class="nav-item">
                  <a href="mainClient.php" class="nav-link ">Accueil</a>
                </li>
                <li class="nav-item">
                  <a href="proposClient.php" class="nav-link "> Propos</a>
                </li>
                <li class="nav-item">
                    <a href="EvenementClient.php" class="nav-link active">Evenement</a>
                </li>
                <li class="nav-item">
                  <a href="PlanClient.php" class="nav-link ">Plan</a>
                </li>
                <li class="nav-item">
                  <a href="MedicinsClient.php" class="nav-link ">Medicins</a>
                </li>
                <li class="nav-item">
                    <a href="PharmacieClient.php" class="nav-link ">Pharmacie</a>
                  </li>
                <li class="nav-item">
                  <a href="ArticlesClient.php" class="nav-link">Articles</a>
                </li>
                <li class="nav-item">
                  <a href="contactClient.php" class="nav-link">Contact</a>
                </li>
                
              </ul>
              <ul class="navbar-nav ms-auto" style="padding:0px !important;">

  <li class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="padding:0px !important;">
      <div class="d-flex align-items-center">
        <div class="profile-photo me-2">
        <img src="data:image/png;base64,<?php echo base64_encode($nomUser["PICTURE"]); ?>" alt="profile photo" class="rounded-circle" style="width: 35px;">
        </div>
        <div class="info d-flex flex-column text-start">
          <p class="mb-0">Bonjour, <b><?php echo $nomUser["FIRSTNAME"] ?></b></p>
          <small class="text-muted">Utilisateur</small>
        </div>
      </div>
    </a>

    <ul class="dropdown-menu dropdown-menu-end border-0" aria-labelledby="profileDropdown">
                <li><a href="profile.php" class="dropdown-item">Mon profil</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a href="addUser.php" class="dropdown-item">Se déconnecter</a></li>
              </ul>
            </li>
          </ul> 
         </div>
          </nav>
        </div>
      </div>
    <!-- Navbar End -->
    

    <!-- Services Start -->
    <!-- Services End -->


    <!-- Appointment Start -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5">
            <div class="row gx-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="d-inline-block text-white text-uppercase border-bottom border-5">Appointment</h5>
                        <h1 class="display-4">Make An Appointment For Your Family</h1>
                    </div>
                    <p class="text-white mb-5">Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit. Sea dolore sanctus sed et. Takimata takimata sanctus sed.</p>
                    <a class="btn btn-dark rounded-pill py-3 px-5 me-3" href="">Find Doctor</a>
                    <a class="btn btn-outline-dark rounded-pill py-3 px-5" href="">Read More</a>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">Book An Appointment</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Choose Department</option>
                                        <option value="1">Department 1</option>
                                        <option value="2">Department 2</option>
                                        <option value="3">Department 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select bg-light border-0" style="height: 55px;">
                                        <option selected>Select Doctor</option>
                                        <option value="1">Doctor 1</option>
                                        <option value="2">Doctor 2</option>
                                        <option value="3">Doctor 3</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control bg-light border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text"
                                            class="form-control bg-light border-0 datetimepicker-input"
                                            placeholder="Time" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Make An Appointment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->


    
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Entrer en contact</h4>
                    <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor</p>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Cite ElGhazala, Ariana, Tunisie</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>CALMINI@gmail.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+216 53 273 182</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Liens rapides</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>À propos de nous</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Nos Evenement</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Rencontrer l'équipe</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Dernier article</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contactez-nous</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Liens rapides</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Accueil</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>À propos de nous</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Nos Evenement</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Rencontrer l'équipe</a>
                        <a class="text-light mb-2" href="#"><i class="fa fa-angle-right me-2"></i>Dernier article</a>
                        <a class="text-light" href="#"><i class="fa fa-angle-right me-2"></i>Contactez-nous</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Bulletin</h4>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control p-3 border-0" placeholder="Your Email Address">
                            <button class="btn btn-primary">S'inscrire</button>
                        </div>
                    </form>
                    <h6 class="text-primary text-uppercase mt-4 mb-3">Suivez-nous</h6>
                    <div class="d-flex">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://facebook.com/freewebsitecode/"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="https://youtube.com/freewebsitecode/"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">Calmini</a>. Tous les droits sont réservés.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://freewebsitecode.com">Free Website Code</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/tempusdominus/js/moment.min.js"></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="../jsClient/main.js"></script>
</body>

</html>