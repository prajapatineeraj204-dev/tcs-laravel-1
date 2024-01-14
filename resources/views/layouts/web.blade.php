<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>TCS - The Chartered Space</title>
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
    {{-- <link rel="stylesheet" href="{{ asset('/css/style.css') }}"> --}}
    <link href="{{ asset('assets')}}/css/style_one.css" rel="stylesheet" />
    <link href="{{ asset('assets')}}/css/style.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="">
    <div id="app">
        <!--<section id="top-bar">-->
        <!--    <div class="container">-->
        <!--        <div class="d-flex justify-content-center py-2 gap-2">-->
        <!--            <p class="m-0">3 in 1 Interview Preparation Workshop Now Available In Recorded Version</p>-->
        <!--            <a href="#" class="visit-now">Visit Now <i class="fa-solid fa-angle-right"></i> </a>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg__background">
                <div class="container-fluid" >
                    <div class="logo navbar-brand">
                        <a href="/"><img src="{{ asset('assets')}}/img/20230727_061824.png" style="width:40%">The Chartered Space </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Practical Trainings</a>
                        <ul class="dropdown-menu" >
                    <!--        <button type="button" >-->
                    <!-- Click Here Login-->
                    <!--</button> -->
                            <li><a class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/finance.png"> Financial Modeling and Valuation</a></li>
                            <li><a class="dropdown-item" href="#"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/excel.png"> Advance Excel</a></li>
                            <li><a class="dropdown-item" href="#"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/accounting.png"> Accounting and Taxation </a></li>
                            <li><a class="dropdown-item" href=""><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/tally-marks.png"> Advance Tally Erp 9</a></li>
                            <li><a class="dropdown-item" href="">Basic Tally Erp 9</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Mentorship</a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="{{route('forProfessionals')}}"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/professionals.png"> Mentorship for Professionals</a></li>
                            <li><a class="dropdown-item" href="{{route('forStudents')}}"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/mentor-student.png"> Mentorship for Students</a></li>
                            <li><a class="dropdown-item" href="{{route('mentorApplication')}}"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/mentor.png"> Apply as Mentor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Placement</a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="{{route('vacancie.index')}}"> <img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/inspection.png"> Vacancies</a></li>
                            <li><a class="dropdown-item" href="{{route('placement.index')}}"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/apply.png"> Apply for Placement</a></li>
                            <li><a class="dropdown-item" href="{{route('vacancie.create')}}"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/post-vacancy.png"> Post a vacancy</a></li>
                            <li><a class="dropdown-item" href="/job_applicants"> <img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/job-applicants.png"> See Job Applicants</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Utilities </a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="#"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/resume.png"> Resume Builder</a></li>
                            <li><a class="dropdown-item" href="#"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/discussion.png"> To be discussed Later</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" >
                            <li><a class="dropdown-item" href="#"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/book-stack.png"> Books</a></li>
                            <li><a class="dropdown-item" href="#"><img class="lazy entered loaded" src="{{ asset('assets')}}/img/icon/resume.png"> To be discussed Later</a></li>
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
                    @guest
                    <li class="nav-item">
                        <a class="nav-link loginbtn" href="/login">
                            <i class="fa fa-user" aria-hidden="true"></i> Login
                        </a>
                    </li>
                
                    @else
                    @php
                            $fullName = auth()->user()->name;
                            $nameParts = explode(' ', $fullName);
                            if (count($nameParts) > 1) {
                                $fristName = $nameParts[0];
                            } else {
                                $fristName = $fullName;
                            }
                    @endphp
                    @php
                        $paycourse=DB::table('payments')->where('user_id',Auth::user()->id)->get();


                    @endphp

                   <li class="nav-item dropdown">
                     <i style="color: white; padding:12px;" class="fa fa-user" aria-hidden="true"></i> 
                     <span style="color: white"> {{$fristName}}</span>
                        <ul class="dropdown-menu" style="position: absolute; left: -50px;" >
                        <li><a class="dropdown-item" href="/profile">Profile</a></li>
                           <li><a class="dropdown-item" href="#">Setting</a></li>
                           <li><a href="#"  class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">Course List</a></li>
                           <a class="nav-link"  href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" >
                            <span class="nav-link-text ms-1">{{ __('Logout') }}</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                       </ul>
                    </li>
                    
                    </ul>
                    @endguest
                    <ul class="navbar-nav mb-2 mb-lg-0">
                   
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
                    <p class="sub-title">The Chartered Space is a one-stop partner in your journey to becoming a CA and beyond.</p>
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
                    <p class="border-top" style="color: #fff; margin: 0;padding: 20px 0px 15px; font-weight: 400; font-size: var(--p);">Copyright © The Chartered Space. All rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Course List</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
            @if(Auth::check())
             @if($paycourse)
                @foreach($paycourse as $course)
                @php
                    $courses=DB::table('tcs_upload_course')->where('id',$course->course_id)->first();
                @endphp
            <div class="col-md-6">
           
               <div class="card" style="border: 1px solid gray;">
                  <div class="card-body">
                    <h5 class="card-title">{{$courses->course_name}}</h5>
                    <a href="#" class="btn btn-primary">All Video</a>
                  </div>
                </div>
               
                </div> 
                 @endforeach
            @endif
            @endif
            </div>
        </div>
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>



@stack('js')
</body>
</html>