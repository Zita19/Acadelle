<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Acadelle</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Betöltés...</span>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img style="height: 50px" src="img/Új projekt.png" alt="">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="welcome" class="nav-item nav-link active">Főoldal</a>
                <a href="rolunk" class="nav-item nav-link">Rólunk</a>
                <a href="kurzusok" class="nav-item nav-link">Kurzusok</a>
                <a href="oktatok" class="nav-item nav-link">Oktatók</a>
                <a href="kapcsolat" class="nav-item nav-link">Kapcsolat</a>
            </div>
            <a href="bejelentkezes" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Csatlakozz most!<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>

    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/elso.jpg" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-sm-10 col-lg-8">
                                <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Legjobb kurzusok</h5>
                                <h1 class="display-3 text-white animated slideInDown">Tanulj velünk</h1>
                                <p class="fs-5 text-white mb-4 pb-2">Bármit amit megtanulnál itt itt megtalálod, a pedig valami újat szeretnél hozd létre a saját kurzusod és legyél te is oktató</p>
                                <a href="regisztracio" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Regisztráció</a>
                                <a href="kapcsolat" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Kapcsolatfelvétel</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-graduation-cap text-primary mb-4"></i>
                            <h5 class="mb-3">Hozzáértő tanárok</h5>
                            <p>Segítőkészek és megbízhatóak minden területen</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Osztályok</h5>
                            <p>Online órák és megbeszélések a gyorsabb és könnyebb fejlődésért</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Otthoni feladatok és projektek</h5>
                            <p>Az órákon tanultakat feladatokkal segítik oktatóink hogy a tudásod megmaradjon</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Könyvajánló</h5>
                            <p>Könyveket ajánlunk neked amik fejlesztenek abban amit keresel</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/rolunk.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">Rólunk</h6>
                    <h1 class="mb-4">Üdvözlünk az Acadelle-ben</h1>
                    <p class="mb-4">Egy olyan oktatási platform, ahol biztos megtalálod azt amit szeretnél akár tanulni, akár tanítani.</p>
                    <p class="mb-4">Ha eddig nem sikerült meggyőznünk az alábbi felsorolás talán segít</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tapasztalt oktatók</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Osztályok</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Elismerés a kurzus elvégzése után</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Ingyenes és fizetős kurzusok</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Segítőkész tanárok</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Eligazítunk ha hasznosítani szeretnéd a tudásod</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="rolunk">Olvass tovább</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Kategóriák</h6>
                <h1 class="mb-5">Kurzus kategóriák</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <div class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <div class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Grafikus Design</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <div class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Videó vágás</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <div class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-lg-8 mx-auto text-center" style="margin-top: 20px;">
                <a href="kurzusok" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Tovább a kurzusokhoz</a>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Kurzusok</h6>
                <h1 class="mb-5">Népszerű Kurzusok</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-1.jpg" alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">Web Design & Tervezői kurzus kezdőknek</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-2.jpg" alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">Videó vágás kezdőknek</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/course-3.jpg" alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h5 class="mb-4">Online marketing</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-10 col-lg-8 mx-auto text-center" style="margin-top: 20px;">
                <a href="kurzusok" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Tovább a kurzusokhoz</a>
            </div>
        </div>
    </div>
    
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Oktatók</h6>
                <h1 class="mb-5">Tapasztalt oktatók</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/profil.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://x.com"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Oktató</h5>
                            <small>Designer</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/profil.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://x.com"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Oktató</h5>
                            <small>Videó vágó</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/profil.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://x.com"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Oktató</h5>
                            <small>Online marketinges</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item bg-light">
                        <div class="overflow-hidden">
                            <img class="img-fluid" src="img/profil.jpg" alt="">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                            <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://x.com"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-sm-square btn-primary mx-1" href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">Oktató</h5>
                            <small>Web designer</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Gyors linkek</h4>
                    <a class="btn btn-link" href="rolunk">Rólunk</a>
                    <a class="btn btn-link" href="kapcsolat">Kapcsolatfelvétel</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Elérhetőségeink</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>4700, Mátészalka Kölcsey Út 12</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+36 06 12 345 678 9</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@acadelle.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://x.com/?lang=hu&mx=2"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/?locale=hu_HU"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://hu.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Hírlevelünk</h4>
                    <p>Értesítést küldünk minden fontos információról és érdekes újdonságokról</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" id="sub" placeholder="email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2" onclick="feliratkozas()">Feliratkozás</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/sajat.js"></script>
</body>

</html>