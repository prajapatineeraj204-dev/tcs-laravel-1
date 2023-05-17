<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets')}}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('assets')}}/img/favicon.png">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('assets')}}/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('assets')}}/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/../resources/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
.form-group{
    margin:20px 0;
}
 #login-form-wrap {
    background-color: #fff;
    text-align: center;
    padding: 20px 0 0;
    border-radius: 4px;
    box-shadow: 0 30px 50px 0 rgba(0,0,0,.2);
}
#login-form {
    padding: 0 60px 20px 60px;
}
#login-form p {
    position: relative;
}
input[type=text], input[type=email], input[type=number] {
    width: 100%;
    padding: 0 0 0 10px;
    margin: 0;
    color: #8a8b8e;
    border: 1px solid #c2c0ca;
    font-style: normal;
    font-size: 16px;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    position: relative;
    display: inline-block;
    background: 0 0;
}
input {
    display: block;
    box-sizing: border-box;
    width: 100%;
    outline: none;
    height: 60px;
    line-height: 60px;
    border-radius: 4px;
}
.validation {
    display: none;
    position: absolute;
    content: " ";
    height: 60px;
    width: 30px;
    right: 15px;
    top: 0;
}
#create-account-wrap {
    background-color: #eeedf1;
    color: #8a8b8e;
    font-size: 14px;
    width: 100%;
    padding: 10px 0;
    border-radius: 0 0 4px 4px;
}
a, a:link, a:visited, a:active {
    color: #3ca9e2;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
}
input[type=submit] {
    border: none;
    display: block;
    background-color: #3ca9e2;
    color: #fff;
    font-weight: 700;
    text-transform: uppercase;
    cursor: pointer;
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
    font-size: 18px;
    position: relative;
    display: inline-block;
    cursor: pointer;
    text-align: center;
}
.navbar-brand a{
    color:#000000;
}
</style>
</head>
<body class="">
    <div id="app">
        <section id="top-bar">
            <div class="container">
                <div class="d-flex justify-content-center py-2 gap-2">
                    <p class="m-0">3 in 1 Interview Preparation Workshop Now Available In Recorded Version</p>
                    <a href="#" class="visit-now">Visit Now <i class="fa-solid fa-angle-right"></i> </a>
                </div>
            </div>
        </section>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid nav-padding" >
                    <div class="logo navbar-brand">
                        <a href="/">The Chartered Space</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Courses </a>
                        <ul class="dropdown-menu" >
                    <!--        <button type="button" >-->
                    <!-- Click Here Login-->
                    <!--</button> -->
                            <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter">Financial Modeling and Valuation</a></li>
                            <li><a class="dropdown-item" href="#">Advance Excel</a></li>
                            <li><a class="dropdown-item" href="#">Accounting and Taxation </a></li>
                            <li><a class="dropdown-item" href=""> Advance Tally Erp 9</a></li>
                            <li><a class="dropdown-item" href="">Basic Tally Erp 9</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mentorship</a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item"><span data-toggle="modal" data-target="#modalLoginForm">Mentorship for Professionals</span>  </a></li>
                            <li><a class="dropdown-item"><span data-toggle="modal" data-target="#modalLoginForm">Mentorship for Students</span></a></li>
                            <li><a class="dropdown-item" href="#">Apply as Mentor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Placement</a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="{{route('vacancie.index')}}">Vacancies</a></li>
                            <li><a class="dropdown-item" href="{{route('placement.index')}}">Apply for Placement</a></li>
                            <li><a class="dropdown-item" href="{{route('vacancie.create')}}">Post a vacancy</a></li>
                            <li><a class="dropdown-item" href="#">See Job Applicants</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Utilities </a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="#">Resume Builder</a></li>
                            <li><a class="dropdown-item" href="#">To be discussed Later</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="#">Books</a></li>
                            <li><a class="dropdown-item" href="#">To be discussed Later</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">More </a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="#">Ask a Question</a></li>
                            <li><a class="dropdown-item" href="#">Free Courses</a></li>
                            <li><a class="dropdown-item" href="#">Events</a></li>
                            <li><a class="dropdown-item" href="#">Blogs</a></li>
                            <li><a class="dropdown-item" href="#">Refer & Earn</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                        <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item d-flex align-items-center">
                        <a class="nav-link loginbtn" href="#"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
        </header>

        <main class="">
            @yield('content')
        </main>
        <footer id="footer">
            <div class="container pt-5">
                <div class="text-center">
                    <img src="img/BCX9a3X.png" alt="">
                    <p class="sub-title">CA Monk is a one-stop partner in your journey to becoming a CA and beyond.</p>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <ul> 
                            <h6>Risk Management</h6> 
                            <li><a href="#">Full Batch</a></li> 
                            <li><a href="#">Concept Building</a></li> 
                            <li><a href="#">Books</a></li> 
                            <li><a href="#">Test Series</a></li> 
                            <li><a href="#">Atmanirbhar Batch</a></li> 
                            <li><a href="#">Free Resources</a></li> 
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul> 
                            <h6>Risk Management</h6> 
                            <li><a href="#">Full Batch</a></li> 
                            <li><a href="#">Concept Building</a></li> 
                            <li><a href="#">Books</a></li> 
                            <li><a href="#">Test Series</a></li> 
                            <li><a href="#">Atmanirbhar Batch</a></li> 
                            <li><a href="#">Free Resources</a></li> 
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul> 
                            <h6>Risk Management</h6> 
                            <li><a href="#">Full Batch</a></li> 
                            <li><a href="#">Concept Building</a></li> 
                            <li><a href="#">Books</a></li> 
                            <li><a href="#">Test Series</a></li> 
                            <li><a href="#">Atmanirbhar Batch</a></li> 
                            <li><a href="#">Free Resources</a></li> 
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul> 
                            <h6>Risk Management</h6> 
                            <li><a href="#">Full Batch</a></li> 
                            <li><a href="#">Concept Building</a></li> 
                            <li><a href="#">Books</a></li> 
                            <li><a href="#">Test Series</a></li> 
                            <li><a href="#">Atmanirbhar Batch</a></li> 
                            <li><a href="#">Free Resources</a></li> 
                        </ul>
                    </div>
                </div>
                <div class="copyright text-center mt-4">
                    <p class="border-top" style="color: #fff; margin: 0;padding: 20px 0px 15px; font-weight: 400; font-size: var(--p);">Copyright © CA MONK. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
<script>
    var count_particles, stats, update;
    stats = new Stats;
    stats.setMode(0);
    stats.domElement.style.position = 'absolute';
    stats.domElement.style.left = '0px';
    stats.domElement.style.top = '0px';
    document.body.appendChild(stats.domElement);
    count_particles = document.querySelector('.js-count-particles');
    update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
        count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
</script>
@stack('js');
</body>
</html>