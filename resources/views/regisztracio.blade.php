<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Regisztráció</title>
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
            <span class="sr-only">Loading...</span>
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
                    <h1 class="display-3 text-white animated slideInDown">Regisztráció</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Regisztrálj most az Acadelle platformon, és lépj be az exkluzív tananyagok, interaktív kurzusok és profi oktatók világába! Hozd létre személyes fiókodat, és kezdj el tanulni még ma – egyszerű és gyors!
                                Csatlakozz hozzánk, és építsd a jövődet velünk!</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0">
                    <div class="card-header bg-primary text-white text-center">
                        <h4>Regisztráció</h4>
                    </div>
                    <div class="card-body">
                        <form name="regisztracio" id="regisztracio" method="POST" action="/regisztracio">
                            @csrf
                            <div class="mb-3">
                                <label for="nev" class="form-label">Teljes név</label>
                                <input type="text" class="form-control" id="nev" name="nev" placeholder="Adja meg a teljes nevét" required>
                            </div>
                            <div class="mb-3">
                                <label for="felhasznalonev" class="form-label">Felhasználónév</label>
                                <input type="text" class="form-control" id="felhasznalonev" name="felhasznalonev" placeholder="Adja meg a felhasználónevét" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email cím</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Adja meg az email címét" required>
                            </div>
                            <div class="mb-3">
                                <label for="jelszo" class="form-label">Jelszó</label>
                                <input type="jelszo" class="form-control" id="jelszo" name="jelszo" placeholder="Adja meg a jelszavát" required>
                            </div>
                            <div class="mb-3">
                                <label for="jelszo_confirmation" class="form-label">Jelszó megerősítése</label>
                                <input type="jelszo" class="form-control" id="jelszo_confirmation" name="jelszo_confirmation" placeholder="Erősítse meg a jelszavát" required>
                            </div>
                            <div class="mb-3">
                                <label for="szerepkor" class="form-label">Szerepkör</label>
                                <select class="form-select" id="szerepkor" name="szerepkor" required>
                                    <option value="">Válasszon...</option>
                                    <option value="tanulo" name="tanulo">Tanuló</option>
                                    <option value="oktato" name="oktato">Oktató</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="kepzettseg" class="form-label">Képzettség (csak tanulók esetében kitöltendő)</label>
                                <input type="text" class="form-control" id="kepzettseg" name="kepzettseg" placeholder="Adja meg a képzettségét">
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Regisztráció</button>
                        </form>
                    </div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="card-footer text-center">
                        <small>Van már fiókja? <a href="bejelentkezes">Jelentkezzen be itt!</a></small>
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