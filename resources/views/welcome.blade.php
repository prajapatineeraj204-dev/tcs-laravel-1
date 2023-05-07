@extends('layouts.web')

@section('content')
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
@endsection