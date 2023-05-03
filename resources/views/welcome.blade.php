<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCS - The Chartered Space</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="resources/css/style.css"> -->
    <link rel="stylesheet" href="{{ asset('../resources/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
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
                        <li><a class="dropdown-item" href="#">Vacancies</a></li>
                        <li><a class="dropdown-item" href="#">Apply for Placement</a></li>
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
    
    <section id="herosection">
        <div class="container h-100 py-3 position-relative">
            <div id="particles-js">
                
            </div>
            <div class="row align-items-center h-100">
                <div class="col-md-6">
                    <h1>An Exclusive Place<br><span style="color: gold;">To Serve Your Professional Needs</span></h1>
                    <p><span class="auto-input">Risk Management By CA Shivam Palan</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true">|</span></p>
                    <div class="row gap-2 mt-2"> 
                        <!--<a class="loginBtn login-btn" href="#">Sign Up</a>--> 
                        <a href="#" class="loginBtn login-btn position-relative" id="iuqkr" style="margin: 0; width:49%">Courses</a> 
                        <a class="heroBtn position-relative" href="#scroll" style="margin: 0; width:49%">Vacancies</a> 
                    </div>
                    <div class="row gap-2 mt-2"> 
                        <!--<a class="loginBtn login-btn" href="#">Sign Up</a>--> 
                        <a href="#" class="loginBtn login-btn position-relative" id="iuqkr" style="margin: 0; width:49%">Mentorship</a> 
                        <a class="heroBtn position-relative" href="#scroll" style="margin: 0; width:49%">Resume Builder</i></a> 
                    </div>
                    <div class="row gap-2 mt-2"> 
                        <!--<a class="loginBtn login-btn" href="#">Sign Up</a>--> 
                        <a href="#" class="loginBtn login-btn position-relative" id="iuqkr" style="margin: 0; width:49%">Ask a Question</a> 
                        <a class="heroBtn position-relative" href="#scroll" style="margin: 0; width:49%">Chat Group</a> 
                    </div>
     <!--               <div class="button-wrapper btn-container-center">-->
					<!--	<a class="loginBtn login-btn position-relative"  id="iuqkr" style="margin: 0; width:49%"><i class="fa-solid fa-user"></i> Sign Up</a>-->
					<!--	<a class="heroBtn position-relative" href="#scroll" style="margin: 0; width:49%">View Courses <i class="fa-solid fa-angle-down"></i></a>-->
					<!--</div>-->
                </div>
                <div class="col-md-6 align-items-center col-md-6 d-flex justify-content-end">
                    <img src="{{asset('../resources/img/ezgif.com-video-to-gif.gif')}}" class="w-75 position-relative"/>
                </div>
            </div>
        </div>
    </section>
     
    <section id="usb-bar">
        <div class="container py-5">
            <div class="box">
                <div class="row justify-content-center">
                    <div class="col-md-3">
                        <div class="usb-tab">
                            <img src="{{asset('../resources/img/nZIwxLt.png')}}" alt="Learners"/>
                            <h3 class="counter" data-target="25000">40000+</h3>
                            <p class="title">Learners</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="usb-tab">
                            <img src="{{asset('../resources/img/RVw7uoZ.png')}}" alt="Mentorship"/>
                            <h3 class="counter" data-target="25000" >1:1</h3>
                            <p class="title">Mentorship</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="usb-tab">
                            <img src="{{asset('../resources/img/jPIuLay.png')}}" alt="Mentors"/>
                            <h3 class="counter" data-target="25000" >400+</h3>
                            <p class="title">Mentors</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="usb-tab">
                            <img src="{{asset('../resources/img/oRkNoplaced.png')}}" alt="Candidates Placed"/>
                            <h3 class="counter" data-target="25000" >400+</h3>
                            <p class="title">Candidates Placed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="courses" style="background-color: rgba(226, 16, 50, 0.03);">
        <div class="container py-5">
            <h2 class="title text-center">Risk Management Courses</h2>
            <p class="sub-title">By CA Shivam Palan</p>
            <div class="row">
                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img red-box">
                            <img src="{{asset('../resources/img/xL0Hj6W.png')}}" alt="Full Batch">
                        </div>
                        <div class="courses-name">
                            <h6>Full Batch</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img blue-box">
                            <img src="{{asset('../resources/img/8nRF9ZL.png')}}" alt="Concept Building">
                        </div>
                        <div class="courses-name">
                            <h6>Concept Building</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img green-box">
                            <img src="{{asset('../resources/img/quSOMet.png')}}" alt="Full Batch">
                        </div>
                        <div class="courses-name">
                            <h6>Books</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box ">
                        <div class="courses-img yellow-box">
                            <img src="{{asset('../resources/img/xFIJ7test.png')}}" alt="Test Series">
                        </div>
                        <div class="courses-name">
                            <h6>Test Series</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box ">
                        <div class="courses-img purple-box">
                            <img src="{{asset('../resources/img/0ffLouQ.png')}}" alt="Free Resources">
                        </div>
                        <div class="courses-name">
                            <h6>Free Resources</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="allcourse" title="" spellcheck="false">View All Course <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <section id="upskill-courses" style="background-color: rgb(235, 252, 252);">
        <div class="container py-5">
            <h2 class="title text-center">Shop</h2>
            <p class="sub-title">Be A Lifelong Learner</p>
            <div class="row">
                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img green-box">
                            <img src="{{asset('../resources/img/7NvZ0ur.png')}}" alt="Excel">
                        </div>
                        <div class="courses-name">
                            <h6>Excel</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img blue-box">
                            <img src="{{asset('../resources/img/aypWgjA.png')}}" alt="Sap Fico">
                        </div>
                        <div class="courses-name">
                            <h6>Sap Fico</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img red-box">
                            <img src="{{asset('../resources/img/ySbV8icons8databaseadministrator80.png')}}" alt="SQL">
                        </div>
                        <div class="courses-name">
                            <h6>SQL</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box ">
                        <div class="courses-img yellow-box">
                            <img src="{{asset('../resources/img/MJmhkicons8python80.png')}}" alt="Python">
                        </div>
                        <div class="courses-name">
                            <h6>Python</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box ">
                        <div class="courses-img purple-box">
                            <img src="{{asset('../resources/img/Yc7gegoogle.png')}}" alt="Financial Modeling">
                        </div>
                        <div class="courses-name">
                            <h6>Financial Modeling</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="allcourse" title="" spellcheck="false">View All Course <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <section id="placement-preparation" style="background-color: rgba(2, 116, 190, 0.1);">
        <div class="container py-5">
            <h2 class="title text-center">Placement Preparation</h2>
            <p class="sub-title">Let's go grab your dream job, Together</p>
            <div class="row">
                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img red-box">
                            <img src="{{asset('../resources/img/EupmoZk.png')}}" alt="Live Workshops">
                        </div>
                        <div class="courses-name">
                            <h6>Live Workshops</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img green-box">
                            <img src="{{asset('../resources/img/jKHQxoK.png')}}" alt="Company Guides">
                        </div>
                        <div class="courses-name">
                            <h6>Company Guides</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box">
                        <div class="courses-img blue-box">
                            <img src="{{asset('../resources/img/Gc8sOJm.png')}}" alt="Aptitude Tests">
                        </div>
                        <div class="courses-name">
                            <h6>Aptitude Tests</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box ">
                        <div class="courses-img yellow-box">
                            <img src="{{asset('../resources/img/MJmhkicons8python80.png')}}" alt="Python">
                        </div>
                        <div class="courses-name">
                            <h6>Python</h6>
                        </div>
                    </div>
                </div>

                <div class="col-md">
                    <div class="courses-box ">
                        <div class="courses-img purple-box">
                            <img src="{{asset('../resources/img/Yc7gegoogle.png')}}" alt="Financial Modeling">
                        </div>
                        <div class="courses-name">
                            <h6>Financial Modeling</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="#" class="allcourse" title="" spellcheck="false">View All Course <i class="fa-solid fa-angle-right"></i></a>
            </div>
        </div>
    </section>
    <!-- Mentorship start -->
    <section id="mentorship" class="mentorship-one">
        <div data-cat="1" class="is-section is-section-100 is-box"> 
            <div class="is-boxes"> 
             <div class="is-box-centered"> 
              <div class="is-container container" style="max-width: 1400px;"> 
               <div class="row clearfix">
                
                <div class="mentorship" spellcheck="false"> 
                 <div class="mentorshipContent"> 
                  <h2>Mentorship</h2> 
                  <p>Have a one-on-one conversation with our, best-in-the-industry mentors.</p> 
                  <div class="mentorshipRow"> 
                   <div class="mentorshipCard" onclick=""> 
                    <div class="courseImg professional"> 
                     <img alt="" class="lazy entered loaded" data-src="https://i.imgur.com/bJ3Bfm4.png" data-ll-status="loaded" src="https://i.imgur.com/bJ3Bfm4.png"> 
                    </div> 
                    <h6>For Professionals</h6> 
                   </div> 
                   <div class="mentorshipCard" onclick=""> 
                    <div class="courseImg student"> 
                     <img alt="" class="lazy entered loaded" data-src="https://i.imgur.com/LquNHZP.png" data-ll-status="loaded" src="https://i.imgur.com/LquNHZP.png"> 
                    </div> 
                    <h6>For Students</h6> 
                   </div> 
                  </div> 
                  <span><a href="#" class="heroBtn" spellcheck="false" title="">Learn More <i class="fa-solid fa-angle-right"></i></a></span> 
                 </div> 
                </div>
               </div> 
              </div> 
             </div> 
            </div> 
           </div>
    </section>
    <!-- Free Courses -->
    <section class="free-courses-one">
        <div class="is-box-centered" > 
            <div class="is-container container" style="max-width: 1400px;"> 
            <div class="row clearfix">
            <div class="free" spellcheck="false"> 
            <div class="freeContent"> 
                <h2>Free Courses</h2> 
                <div class="freeRow"> 
                <div class="freeCard" onclick=""> 
                <div class="courseImg excel"> 
                <img alt="" class="lazy entered loaded" data-src="https://i.imgur.com/7NvZ0ur.png" data-ll-status="loaded" src="https://i.imgur.com/7NvZ0ur.png"> 
                </div> 
                <h6>Excel For Beginners</h6> 
                </div> 
                <div class="freeCard" onclick=""> 
                <div class="courseImg englishspeaking"> 
                <img alt="" class="lazy entered loaded" data-src="https://i.imgur.com/tFglD4Y.png" data-ll-status="loaded" src="https://i.imgur.com/tFglD4Y.png"> 
                </div> 
                <h6>English Speaking</h6> 
                </div> 
                <div class="freeCard" onclick=""> 
                <div class="courseImg rmfree"> 
                <img alt="" class="lazy entered loaded" data-src="https://i.imgur.com/6tD0u6u.png" data-ll-status="loaded" src="https://i.imgur.com/6tD0u6u.png"> 
                </div> 
                <h6>RM Free Resources</h6> 
                </div> 
                <div class="freeCard" onclick=""> 
                <div class="courseImg communication"> 
                <img alt="" class="lazy entered loaded" data-src="https://i.imgur.com/tLTh24T.png" data-ll-status="loaded" src="https://i.imgur.com/tLTh24T.png"> 
                </div> 
                <h6>Communication</h6> 
                </div> 
                <div class="freeCard" onclick=""> 
                <div class="courseImg bitcoin"> 
                <img alt="" class="lazy entered loaded" data-src="https://i.imgur.com/aMBoVzs.png" data-ll-status="loaded" src="https://i.imgur.com/aMBoVzs.png"> 
                </div> 
                <h6>Basics Of Crypto</h6> 
                </div> 
                </div> 
                <span><a href="#" class="heroBtn" spellcheck="false" title="">View All Free Course <i class="fa-solid fa-angle-right"></i></a></span> 
            </div> 
            </div>
            </div> 
            </div> 
        </div>
    </section>
    <!-- testimonial -->
    <section class="testimonial-one">
        <div class="row g-0">
            <div class="testimonial" spellcheck="false"> 
             <div class="testimonialContent"> 
              <h2>What Our Students <span style="color: #0274be">Have To Say</span></h2> 
              <div class="videoTestimonial"> 
               <div class="videoTestimonialCard"> 
                <iframe frameborder="0" class="lazy entered loaded" data-src="https://www.youtube.com/embed/Oc0gkDyA83k" data-ll-status="loaded" src="https://www.youtube.com/embed/Oc0gkDyA83k"></iframe> 
               </div> 
               <div class="videoTestimonialCard"> 
                <iframe frameborder="0" class="lazy entered loaded" data-src="https://www.youtube.com/embed/HtYPCSwNuYU" data-ll-status="loaded" src="https://www.youtube.com/embed/HtYPCSwNuYU"></iframe> 
               </div> 
               <div class="videoTestimonialCard"> 
                <iframe frameborder="0" class="lazy entered loaded" data-src="https://www.youtube.com/embed/25yLWkBawC4" data-ll-status="loaded" src="https://www.youtube.com/embed/25yLWkBawC4"></iframe> 
               </div> 
              </div> 
              <div class="testimonialRow"> 
               <div class="testimonialCard one"> 
                <div class="testimonial-details"> 
                 <img alt="" class="lazy entered loaded" data-src="https://dz8fbjd9gwp2s.cloudfront.net/orgData/606b3abe0cf2821005a32675/pages/assets/images/33nGlyakshabora.jpg" data-ll-status="loaded" src="https://dz8fbjd9gwp2s.cloudfront.net/orgData/606b3abe0cf2821005a32675/pages/assets/images/33nGlyakshabora.jpg"> 
                 <div class="testimonialName"> 
                  <h4>Yaksha Bora</h4> 
                  <h6>PWC</h6> 
                 </div> 
                </div> 
                <div class="testimonialText"> 
                 <p>It made me aware of what things I need to do to land a dream job, it forced me to come out of my comfort zone and think beyond, it also helped me to gain confidence</p> 
                </div> 
               </div> 
               <div class="testimonialCard two"> 
                <div class="testimonial-details"> 
                 <img alt="" class="lazy entered loaded" data-src="https://dz8fbjd9gwp2s.cloudfront.net/orgData/606b3abe0cf2821005a32675/pages/assets/images/ubFEyvrutantgabrani.jpg" data-ll-status="loaded" src="https://dz8fbjd9gwp2s.cloudfront.net/orgData/606b3abe0cf2821005a32675/pages/assets/images/ubFEyvrutantgabrani.jpg"> 
                 <div class="testimonialName"> 
                  <h4>Vrutant Gabrani</h4> 
                  <h6>Bharat Petroleum Corporation Limited</h6> 
                 </div> 
                </div> 
                <div class="testimonialText"> 
                 <p>This is the perfect one-stop solution for Getting Ready for Placements. Hats off to Shivam Sir and Umang Sir for creating such great content and giving it to students. Such great resources, useful technical and aptitude test, the Campus List, the Mentors, the Networking, truly the most worthy session I have ever attended. Thanks, CA Monk</p> 
                </div> 
               </div> 
               <div class="testimonialCard three"> 
                <div class="testimonial-details"> 
                 <img alt="" class="lazy" data-src="https://dz8fbjd9gwp2s.cloudfront.net/orgData/606b3abe0cf2821005a32675/pages/assets/images/Ay8xQkritiagarwal.jpg"  data-ll-status="loaded" src="https://dz8fbjd9gwp2s.cloudfront.net/orgData/606b3abe0cf2821005a32675/pages/assets/images/Ay8xQkritiagarwal.jpg"> 
                 <div class="testimonialName"> 
                  <h4>Kriti Agarwal</h4> 
                  <h6>NTT DATA Services</h6> 
                 </div> 
                </div> 
                <div class="testimonialText"> 
                 <p>Helped me work on my profiles, get a better reach, scale-up my Resume, and most importantly - helped me a lot in driving away from my fear of public speaking by good GD sessions and mocks</p> 
                </div> 
               </div> 
               <div class="testimonialCard four"> 
                <div class="testimonial-details"> 
                 <img alt="" class="lazy" data-src="https://dz8fbjd9gwp2s.cloudfront.net/orgData/606b3abe0cf2821005a32675/pages/assets/images/b4Gfadhruviksheth.jpg" data-ll-status="loaded" src="https://dz8fbjd9gwp2s.cloudfront.net/orgData/606b3abe0cf2821005a32675/pages/assets/images/b4Gfadhruviksheth.jpg"> 
                 <div class="testimonialName"> 
                  <h4>Dhruvik Sheth</h4> 
                  <h6>EY</h6> 
                 </div> 
                </div> 
                <div class="testimonialText"> 
                 <p>It has helped me to identify areas which are important in the selection process and work on it without having to find the best way of doing it - it all has been provided to me by the workshop. Also, peer interviews and mock GDs are a great way of preparing ourselves and making the first mistakes in a closed environment rather than exposing ourselves during our placements.</p> 
                </div> 
               </div> 
              </div> 
              <center>
               <span><a href="#" class="heroBtn" spellcheck="false" title="">View More <i class="fa-solid fa-angle-right"></i></a></span>
              </center> 
             </div> 
            </div>
           </div>
    </section>
    <!-- Team -->
     <section class="team-one">
        <div class="is-box-centered"> 
            <div class="is-container container" style="max-width: 1400px;"> 
             <div class="row clearfix">  
              <div class="meetYourMentor" spellcheck="false"> 
               <h2>Meet Your <span>Mentors</span></h2> 
              </div> 
              <div class="mentorSlider" spellcheck="false"> 
               <div class="slide-track"> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Rashi-Jain-Bharatiya.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Rashi-Jain-Bharatiya.webp"> 
                 <h5>Rashi Jain Bharatiya</h5> 
                 <p>Kumar Chopra Associates</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/12/Aditya-Agarwal.png" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/12/Aditya-Agarwal.png"> 
                 <h5>Aditya Agarwal</h5> 
                 <p>Alvarez &amp; Marsal</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Aashi-Mahipal.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Aashi-Mahipal.webp"> 
                 <h5>Aashi Mahipal</h5> 
                 <p>American Express</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Sanjana-Arora.png" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Sanjana-Arora.png"> 
                 <h5>Sanjana Arora</h5> 
                 <p>Flipkart</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Amul-Agarwal.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Amul-Agarwal.webp"> 
                 <h5>Amul Agrawal</h5> 
                 <p>BAJAJ FINANCE</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Anand-Maheshwari.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Anand-Maheshwari.webp"> 
                 <h5>Anand Maheshwari</h5> 
                 <p>EY</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Yugantar-Gupta.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Yugantar-Gupta.webp"> 
                 <h5>Yugantar Gupta</h5> 
                 <p>ITC</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Siddhant-Jain.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Siddhant-Jain.webp"> 
                 <h5>Siddhant Jain</h5> 
                 <p>AARAYAA ADVISORY SERVICES</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Remaining-Mentors.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Remaining-Mentors.webp"> 
                 <h5>Rohit Daiya</h5> 
                 <p>BANK OF AMERICA</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/07/Harshbir-Oberoi.png" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/07/Harshbir-Oberoi.png"> 
                 <h5>Harshbir Oberoi</h5> 
                 <p>KPMG India Services Limited</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/07/Jainam-Shah.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/07/Jainam-Shah.webp"> 
                 <h5>Jainam Shah</h5> 
                 <p>INFOSYS</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/12/Sandeep-Akde.png" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/12/Sandeep-Akde.png"> 
                 <h5>Sandeep Akde</h5> 
                 <p>PWC</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Shivam-Jaiswal.png" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Shivam-Jaiswal.png"> 
                 <h5>Shivam Jaiswal</h5> 
                 <p>Grant Thornton</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/12/Aman-2-Dec-New.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/12/Aman-2-Dec-New.webp"> 
                 <h5>Ratan Palanki</h5> 
                 <p>Rx Propellant</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Shahid-Khan.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Shahid-Khan.webp"> 
                 <h5>Shahid Khan</h5> 
                 <p>EY GDS</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/08/Kumar-Saumya.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/08/Kumar-Saumya.webp"> 
                 <h5>Kumar Saumya</h5> 
                 <p>EY GDS</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Sandeep-Bvs.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Sandeep-Bvs.webp"> 
                 <h5>Sandeep Bvs</h5> 
                 <p>DELOITTE INDIA</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy entered loaded" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Tejas-Sonar.webp" data-ll-status="loaded" src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Tejas-Sonar.webp"> 
                 <h5>Tejas Sonar</h5> 
                 <p>ICICI BANK</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Mehul-Balia.webp"> 
                 <h5>Mehul Baliya</h5> 
                 <p>ACCENTURE</p> 
                </div> 
                <div class="mentorSlide"> 
                 <img alt="" class="lazy" data-src="https://mentorship.camonk.com/wp-content/uploads/2022/05/Padm-Prag-Pratyush.webp"> 
                 <h5>Padm Prag Pratyush</h5> 
                 <p>Arcesium India Private Limited</p> 
                </div> 
               </div> 
              </div>
             </div> 
            </div> 
           </div>
    </section> 

    <!-- Career Goal -->
    <section class="careergoal-one">
        <div class="is-box-centered"> 
            <div class="is-container container" style="max-width: 1400px;"> 
             <div class="row clearfix">
              <div class="support" spellcheck="false"> 
               <div class="supportContent"> 
                <h2>Crush Your <span style="color: gold;">Career Goals</span></h2> 
                <p>Unsure how? We can help</p> 
                <div class="supportRow"> 
                 <a href="tel:" class="heroBtn" style="margin: 0;"><i class="fa-solid fa-phone"></i> +919078768782</a> 
                 <a href="tel:" class="heroBtn1" style="margin: 0;"><i class="fa-solid fa-phone"></i> <b>+918776690907</b></a> 
                 <a href="mailto:support@example.com" class="login-btn" style="margin: 0;">support@example.com <i class="fa-solid fa-envelope"></i></a> 
                </div> 
                <p class="p-1"><strong>Support Timing:</strong> Monday - Saturday, 10 AM - 7 PM</p> 
               </div> 
              </div>
             </div> 
            </div> 
           </div>
    </section>
    
        <!--code for login and registration model
   
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
                <button type="button" class="close bdr-0" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body p-3">
                    <h3 class="text-center font-weight-bold text-primary">GIT <i><span class="text-danger">SYNERGY</span></i> 2K20 LOGIN</h3>
                    <form>
                        <div class="text-center">
                            <span class="text-warning"><i class="fa fa-users fa-5x"></i></span>
                        </div>
                        <div class="form-group">
                        <label style="color:black">Username</label>
                        <input type="text" class="form-control" Placeholder="Enter Username">
                            </div>
                        <div class="form-group">
                            <label style="color:black">Password</label>
                            <input type="password" class="form-control" Placeholder="Enter Password">>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn rounded-pill btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Registration</button> 
                    </form>
                </div>
            </div>
        </div>  
    </div> -->
    
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

    <!--code for login popup-->
    
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Login</h4>
            <button type="button" class="close bdr-0" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div id="login-form-wrap">
              <form id="login-form">
                 <div class="form-group">
                    <input type="text" id="fullname" name="Fullname" placeholder="FullName" required=""><i class="validation"></i>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="Email" placeholder="Email Address" required=""><i class="validation"></i>
                </div>
                 <input type="submit" id="login" value="Login">
              </form>
              <div id="create-account-wrap">
                <p>Not a member? <a href="#" data-toggle="modal" data-target="#modalSignupForm">Create Account</a></p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- code for registraion -->
    <!--<div class="modal fade" id="modalSignupForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Login</h4>
            <button type="button" class="close bdr-0" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body mx-3">
            <div id="login-form-wrap">
              <form id="login-form">
                <div class="form-group">
                    <input type="text" id="fullname" name="Fullname" placeholder="FullName" required=""><i class="validation"></i>
                </div>
                <div class="form-group">
                    <input type="email" id="email" name="Email" placeholder="Email Address" required=""><i class="validation"></i>
                </div>
                <div class="form-group">
                    <input type="number" id="MobileNo" name="Mobileno" placeholder="Mobile Number" required=""><i class="validation"></i>
                </div>
                <div class="form-group">
                    <input type="text" id="password" name="password" placeholder="Password" required=""><i class="validation"></i>
                </div>
                <div class="form-group">
                    <input type="text" id="cpassword" name="cpassword" placeholder="Confirm Password" required=""><i class="validation"></i>
                </div>
                    <input type="submit" id="register" value="Submit">
              </form>
              
          </div>
        </div>
      </div>
    </div> -->
    
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <script>
    /* ---- particles.js config ---- */

    // particlesJS("particles-js", {
    //   "particles": {
    //     "number": {
    //       "value": 380,
    //       "density": {
    //         "enable": true,
    //         "value_area": 800
    //       }
    //     },
    //     "color": {
    //       "value": "#ffffff"
    //     },
    //     "shape": {
    //       "type": "circle",
    //       "stroke": {
    //         "width": 0,
    //         "color": "#000000"
    //       },
    //       "polygon": {
    //         "nb_sides": 5
    //       },
    //       "image": {
    //         "src": "img/github.svg",
    //         "width": 100,
    //         "height": 100
    //       }
    //     },
    //     "opacity": {
    //       "value": 0.5,
    //       "random": false,
    //       "anim": {
    //         "enable": false,
    //         "speed": 1,
    //         "opacity_min": 0.1,
    //         "sync": false
    //       }
    //     },
    //     "size": {
    //       "value": 3,
    //       "random": true,
    //       "anim": {
    //         "enable": false,
    //         "speed": 40,
    //         "size_min": 0.1,
    //         "sync": false
    //       }
    //     },
    //     "line_linked": {
    //       "enable": true,
    //       "distance": 150,
    //       "color": "#ffffff",
    //       "opacity": 0.4,
    //       "width": 1
    //     },
    //     "move": {
    //       "enable": true,
    //       "speed": 6,
    //       "direction": "none",
    //       "random": false,
    //       "straight": false,
    //       "out_mode": "out",
    //       "bounce": false,
    //       "attract": {
    //         "enable": false,
    //         "rotateX": 600,
    //         "rotateY": 1200
    //       }
    //     }
    //   },
    //   "interactivity": {
    //     "detect_on": "canvas",
    //     "events": {
    //       "onhover": {
    //         "enable": true,
    //         "mode": "grab"
    //       },
    //       "onclick": {
    //         "enable": true,
    //         "mode": "push"
    //       },
    //       "resize": true
    //     },
    //     "modes": {
    //       "grab": {
    //         "distance": 140,
    //         "line_linked": {
    //           "opacity": 1
    //         }
    //       },
    //       "bubble": {
    //         "distance": 400,
    //         "size": 40,
    //         "duration": 2,
    //         "opacity": 8,
    //         "speed": 3
    //       },
    //       "repulse": {
    //         "distance": 200,
    //         "duration": 0.4
    //       },
    //       "push": {
    //         "particles_nb": 4
    //       },
    //       "remove": {
    //         "particles_nb": 2
    //       }
    //     }
    //   },
    //   "retina_detect": true
    // });


/* ---- stats.js config ---- */

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
</body>
</html>