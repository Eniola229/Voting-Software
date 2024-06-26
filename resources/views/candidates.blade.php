<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>RECTEM VOTING</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="{{ asset('https://fonts.googleapis.com') }}" />
        <link rel="preconnect" href="{{ asset('https://fonts.gstatic.com')}}" crossorigin />
        <link href="{{ asset('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap') }}" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css') }}" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styless.css')}}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100 bg-light">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="index.php">RECTEM VOTING PLAFORM</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                       <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('candidates')}}">CANDATES</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('candidates')}}">VOTE</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ url('login')}}">LOGIN</a></li>
                    </ul>
                   
                </div>
            </div>
        </nav>
            <!-- Projects Section-->
           <div class="container">
    <div class="row mt-4">
        <div class="col-12" style="margin-top: 10%;">
            <h1 class="text-center mb-4">Meet the Candidates</h1>
        </div>
    </div>
    <div class="row">
        <!-- Candidate 1 -->
        <div class="col-md-4">
            <div class="card candidate-card">
                <img src="images/osoba.jpeg" class="card-img-top" alt="Candidate 1">
                <div class="card-body">
                    <h5 class="card-title">OSOBA OLUWATOBILOBA NIFEMI</h5>
                    <p class="card-text">PRESIDENT (RECTEM)</p>
                </div>
            </div>
        </div>
    </div>
</div>

        </main>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy; RECTEM VOTING PLAFORM 2023. All Rights Reserved.</div>
                    <a href="www.rectem.edu.ng">www.rectem.edu.ng</a>
                   
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
