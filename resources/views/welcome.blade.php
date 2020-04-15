@extends('layouts.app')
<link href="{{asset('css/landing-page.css')}}" rel="stylesheet">
<body>


<!-- Navigation -->
<nav class="navbar navbar-light bg-light static-top">
    <div class="container-fluid">
        <div class="row col-md-12 ">
            
            <div class="offset-md-2  col-5 col-md m-0 m-md-2 pl-5"><a class="btn btn-danger" href="{{ route('logout') }}">se deconnecter</a></div>

        </div>
    </div>
</nav>

<!-- Masthead -->

<header class="masthead text-white text-center pt-0">
=======

    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 class="mb-5">Vous voulez partager votre hobbie? Vous voulez rencontrer de nouvelles personnes?Vous habitez le pays basque?</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <div class="offset-md-2 col-5 col-md m-0 m-md-2"><a class="btn btn-primary " href="/login">Connexion</a></div>

                <p>pas encore inscrit?</p>
                <div class="offset-md-2 col-5 col-md m-0 m-md-2"><a class="btn btn-danger " href="{{ route('register') }}">Inscription</a></div>
            </div>
        </div>
    </div>

</header>
=======


<!-- Icons Grid -->
<section class="features-icons bg-light text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-screen-desktop m-auto text-primary"></i>
                    </div>
                    <h3>Inscrivez vous</h3>
                    <p class="lead mb-0"><a class="btn btn-primary " href="{{ route('register') }}">Inscription</a></p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-layers m-auto text-primary"></i>
                    </div>
                    <h3>Proposer une activité</h3>
                    <p class="lead mb-0">Si vous voulez partager une passion, proposer-là en suivant le formulaire</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="icon-check m-auto text-primary"></i>
                    </div>
                    <h3>Inscrivez-vous à une activité</h3>
                    <p class="lead mb-0">Si une activité vous intéresse, inscrivez-vous à celle-ci</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#">About</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="#">
                            <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<!-- <script type="text/javascript" src="js/app.js"></script> -->
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/jquery.min.js') }}"></script>

</body>

</html>
