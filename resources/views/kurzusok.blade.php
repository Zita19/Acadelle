<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Kurzusok</title>
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
    <link href="css/kurzus.css" rel="stylesheet">
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

    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Kurzusok</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item text-white active" aria-current="page">Számos izgalmas és hasznos tanulási lehetőséget találsz, amelyek segítenek a tudásod fejlesztésében. Akár egy új készséget szeretnél elsajátítani, akár szakmai tudásodat mélyítenéd el, itt biztosan megtalálod a számodra legmegfelelőbb tanfolyamot.</li>
                        </ol>
                    </nav>
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
            <div>
                <div>
                <div class="col-md-6">
                    <input type="text" class="form-control" placeholder="Keresés kurzusok között...">
                </div>
                <div class="col-md-6 text-md-end text-center">
                    <select class="form-select w-auto d-inline-block">
                        <option class="gomb active" onclick="filterSelection('all')">Kategóriák</option>
                        <option class="gomb" onclick="filterSelection('inf')">Informatika</option>
                        <option class="gomb" onclick="filterSelection('math')">Matek</option>
                        <option class="gomb" onclick="filterSelection('bio')">Biológia</option>
                        <option class="gomb" onclick="filterSelection('history')">Történelem</option>
                        <option class="gomb" onclick="filterSelection('lit')">Irodalom</option>
                        <option class="gomb" onclick="filterSelection('prog')">Programozás</option>
                        <option class="gomb" onclick="filterSelection('lang')">Nyelv</option>
                        <option class="gomb" onclick="filterSelection('video')">Videó</option>
                        <option class="gomb" onclick="filterSelection('marketing')">Marketing</option>
                        <option class="gomb" onclick="filterSelection('chem')">Kémia</option>
                    </select>
                </div>
            </div>
            <div class="lista">
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 1 (John)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 2 (Kate)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 3 (Kevin)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 4 (Jenny)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 5 (Nick)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 6 (Patrick)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 7 (Mary)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 8 (Nick)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 9 (Steve)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 10 (Clair)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 11 (Jill)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 12 (John)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 13 (Clair)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 14 (Steve)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 15 (Jill)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 16 (Adam)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 17 (Kevin)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 18 (Matt)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 19 (Jenny)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 20 (Derek)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 21 (Mary)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 22 (Penny)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 23 (Patrick)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 24 (Josh)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
                    </div>
                </div>
                <div class="kartya">
                    <div class="kartya-body">
                        <h5 class="kartya-title">Kurzus 25 (Zoe)</h5>
                        <button class="jelentkezes">Jelentkezés</button>
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
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>4700, Mátészalka Kölcsey utca 12</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+36 06 12 345 678 9</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@acadelle.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Hírlevelünk</h4>
                    <p>Értesítést küldünk minden fontos információról és érdekes újdonságokról</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" id="sub" placeholder="Email">
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
