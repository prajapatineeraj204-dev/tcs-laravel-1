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
    <section style="background:#fff">
        <div class="container-fluid">
          <div class="job-header text-center job-card">
            <h2 class="job-title"> Post a Vacancy </h2>
          </div>
        </div>
        <div class="container-fluid" style="background:#f4f5f9">
          <div class="container job-card">
            <form action="{{route('vacancie.store')}}" method="post">
                @csrf
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong>{{ $message }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif 
                    
                @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>{{ $message }}</strong>
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
              <h3>Basic Job Details</h3>
              <div class="basic-details card-box">
                <div class="form-group mb-3">
                  <label for="txtJobTitle">Position </label>
                  <input required type="text" name="jobtitle" value="" class="form-control" id="textJobTitle" placeholder="Eg. Back Office Job">
                </div>
                <div class="form-group mb-3">
                  <label for="txtJobTitle">Eligibility </label>
                  <input required type="text" name="eligibility" value="" class="form-control" id="eligibility" placeholder="Eg. MBA, CA , CS, B.Com, M.com, etc">
                </div>
                <div class="form-group mb-3">
                  <label for="txtJobOpening">No Of Openings *</label>
                  <input required type="number" name="jobopening" value="" class="form-control" id="txtJobOpening" placeholder="Eg. 2">
                </div>
                <div class="form-group mb-3">
                  <label for="txtJobTitle">Job Location *</label>
                  <select required name="city" class="form-control">
                  <option value="">--- Select City ---</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Maharashtra">Pune</option>
                    <option value="Madhya Pradesh">Bangalore</option>
                    <option value="Haryana">Mumbai</option>
                    <option value="Delhi">Indore</option>
                  </select>
                </div>
              </div>
              <div class="mt-4">
                <h3>Candidate requirement</h3>
                <div class="basic-details card-box">
                <label for="SalaryInhand">CTC *</label>
                  <div class="d-flex form-group mb-3">
                    <div style="width:48%">
                      <input required type="number" name="salary_from" value="" class="form-control" placeholder="Eg. 10000">
                    </div>&nbsp; &nbsp; <span>To</span>&nbsp; &nbsp;
                    <div style="width:48%">
                      <input required type="number" name="salary_to" value="" class="form-control" placeholder="Eg. 10000">
                    </div>
                  </div>
                   <div class="row  mb-3">
                    <div class="col-md-6">
                    <label for="SalaryInhand">Job Timings *</label>
                      <textarea required name="job_timings" rows="3" cols="6" placeholder="9:30 AM - 6:3000 PM | Monday to Saturday" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6">
                      <label for="intreviewTime">Interview Details *</label>
                      <textarea required name="intreviewTime" rows="3" cols="6" placeholder="11:00 AM - 4:00 PM | Monday to Saturday" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="">Job Info / Job Description *</label>
                    <textarea required name="job_description" rows="3" cols="5" class="form-control"></textarea>
                  </div>
                </div>
              </div>
              
              <div class="mt-4">
                <h3>About Your Company</h3>
                <div class="basic-details card-box">
                  <div class="row  mb-3">
                    <div class="col-md-6">
                      <label for="SalaryInhand">Company Name *</label>
                      <input type="text" required name="company_name" value="" class="form-control" placeholder="Eg. Eloquent info Solutions">
                    </div>
                    <div class="col-md-6">
                      <label for="SalaryInhand">Contact Person Name *</label>
                      <input type="text" required name="user_name" value="" class="form-control" placeholder="Eg. Nikhil">
                    </div>
                  </div>   
                  <div class="row  mb-3">
                    <div class="col-md-6">
                      <label for="SalaryInhand">Phone Number *</label>
                      <input type="Number" name="phone_number" required value="" class="form-control" placeholder="XXXXXXXXXX">
                    </div>
                    <div class="col-md-6">
                      <label for="SalaryInhand">Email Id*</label>
                      <input type="email"  name="email" value="" required class="form-control" placeholder="Eg. example@gmail.com">
                    </div>
                  </div>   
                  <div class="row  mb-3">
                    <div class="col-md-6">
                      <label for="SalaryInhand">Contact Person Profile *</label>
                      <select name="contact_persan" id="" required class="form-control">
                        <option value="HR/Recuiter">HR/Recuiter</option>
                        <option value="Manager">Manager</option>
                        <option value="Other">Other</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label for="SalaryInhand">Job Address *</label>
                      <textarea name="job_address" rows="3" cols="6" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" class="heroBtn">Save</button>
                    </div>
                  </div>                  
                </div>
              </div>
            </form>
          </div>
        </div>
    </section>

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
</body>
</html>