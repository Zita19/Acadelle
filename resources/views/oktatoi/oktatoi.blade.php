<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <title>Oktatói</title>
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
            @auth
                <form id="logout-form" action="{{ route('kijelentkezes') }}" method="POST" class="d-inline">
                @csrf
                    <button type="submit" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Kijelentkezés</button>
                </form>
            @endauth
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">
                        <div>
                            @if(isset($oktato))
                                <div>Üdv újra, {{ $oktato->nev }}!</div>
                            @else
                                <div>Üdv újra, {{ Auth::guard('oktato')->user()->nev ?? 'Vendég' }}!</div>
                            @endif
                        </div>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <class="row">
            <div class="col-md-4">
                <div class="card p-4 shadow">   
                @php
                    $oktato = Auth::guard('oktato')->user();
                @endphp
                @if(isset($oktato))
                    <h2 class="text-primary">Felhasználó adatai</h2>
                    <p><strong>Név:</strong> {{ $oktato->nev }}</p>
                    <p><strong>Felhasználónév:</strong> {{ $oktato->felhasznalonev }}</p>
                    <p><strong>Email:</strong> {{ $oktato->email }}</p>
                @else
                    <p class="text-center text-danger">Nincs bejelentkezett oktató!</p>
                @endif
            </div>
        </div>
        <br>
        <div class="col-md-8">
            <h2 class="mb-3">Tanulók listája: </h2>
                <div class="row">
                <table class="table">
                @if(isset($tanulok))
                    <p>
                        Nincs nincsenek tanulók!
                    </p>
                @else
                    <thead>
                        <tr>
                            <th>Tanuló Neve: </th>
                            <th>Kurzus Neve: </th>
                            <th>Befizetett Összeg: </th>
                        </tr>
                    </thead>
                    <tbody>
                    @if(isset($tanulok))
                        @foreach($tanulok as $tanulo)
                            <tr>
                                <td>{{ $tanulo->tanulo_nev }}</td>
                                <td>{{ $tanulo->kurzus_nev }}</td>
                                <td>{{ $tanulo->befizetett_osszeg > 0 ? $tanulo->befizetett_osszeg . ' Ft' : 'Nem fizetett' }}</td>
                            </tr>
                        @endforeach
                        @else
                            Nincsenek tanulók!
                        @endif
                    </tbody>
                @endif
                </table>
            </div>
        </div>
        <h3 class="mt-4">Kurzus létrehozása</h3>
            @if(session('success'))
                <div class="alert alert-success text-center">{{ session('success') }}</div>
            @endif
            <div class="container mt-4">
                <div class="card shadow-lg p-4">
                    <form action="{{ route('kurzus.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Kurzus neve:</label>
                            <input type="text" name="kurzus_nev" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Helyszín:</label>
                            <input type="text" name="helyszin" class="form-control" required>
                            <small class="text-muted">Írj "online"-t, ha online képzés!</small>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Időpont:</label>
                            <input type="datetime-local" name="kepzes_ideje" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ár:</label>
                            <input type="number" name="dij" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Létrehozás</button>
                    </form>
                </div>
            </div>
            <br>
        <div class="courses col-md kurzuslista">
            <h3>Kurzusok: </h3>
            @if(isset($kurzusok) && $kurzusok->isEmpty())
                <p>Nincsenek kurzusok.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>Kurzus Neve</th>
                            <th>Ár</th>
                            <th>Műveletek</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(isset($kurzusok))
                        @foreach($kurzusok as $kurzus)
                            <tr>
                                <td>{{ $kurzus->kurzus_nev }}</td>
                                <td>{{ $kurzus->ar }} Ft</td>
                                <td>
                                    <form action="{{ route('kurzus.torol', $kurzus->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Törlés</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            Nincsenek kurzusok!
                        @endif
                    </tbody>
                </table>
            @endif
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
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/?locale=hu_HU"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://hu.linkedin.com"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Hírlevelünk</h4>
                    <p>Értesítést küldünk minden fontos információról és érdekes újdonságokról</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Feliratkozás</button>
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