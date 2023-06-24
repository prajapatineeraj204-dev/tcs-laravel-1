@extends('layouts.web')

@section('content')
<section class="multiform">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
                <div class="card mt-3 mb-3">
                    <h2 id="heading">Mentor Onboarding</h2>
                    <form id="msform" action="" method="post">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Personal</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="Experience"><strong>Experience</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div> <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal details:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 1 - 4</h2>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="fname">First Name: *</label> 
                                    <input type="text" name="fname" class="form-control" placeholder="First Name" />
                                </div> 
                                <div class="form-group">
                                    <label class="lname">Last Name: *</label> 
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" />
                                </div> 
                                <div class="form-group">
                                    <label class="email">Email: *</label> 
                                    <input type="email" name="email" placeholder="Email Id" class="form-control" /> 
                                </div>
                                <div class="form-group">
                                    <label class="dob">Year Date of Birth: *</label> 
                                    <input type="date" name="dob" class="form-control" placeholder="UserName" />
                                </div>
                                <div class="form-group">
                                    <label class="mobile">Phone Number: *</label> 
                                    <input type="number" name="mobile" placeholder="Password" class="form-control" /> 
                                </div>
                                <div class="form-group">
                                    <label class="photo">Please upload your candid headshot photo: *</label>
                                    <input type="file" name="photo" class="form-control" placeholder="Confirm Password" />
                                </div>
                                <div class="form-group">
                                    <label class="photo">City/Town: *</label>
                                    <select class="form-control" name="city" id="city">
                                        <option>--- Select City ---</option>
                                        <option>Delhi</option>
                                        <option>Mumbai</option>
                                        <option>Kolkata</option>
                                        <option>Bhopal</option>
                                        <option>Bengaluru</option>
                                        <option>Ranchi</option>
                                        <option>Patna</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="photo">Pincode: *</label>
                                    <input type="text" name="pincode" class="form-control" placeholder="Pincode" />
                                </div>
                                <div class="form-group">
                                    <label class="photo">State: *</label>
                                    <select class="form-control" name="city" id="city">
                                        <option>--- Select state ---</option>
                                        <option>Delhi</option>
                                        <option>Haryana</option>
                                        <option>Uttar Pradesh</option>
                                        <option>Madhya Pradesh</option>
                                        <option>Orisa</option>
                                        <option>Uttarakhand</option>
                                        <option>Bihar</option>
                                    </select>
                                </div>
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 2 - 4</h2>
                                    </div>
                                </div> 
                                <div class="form-group mb-3">
                                    <label class="fieldlabels">what do you do ? *</label> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        Mentor to Students
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        Mentor to Professionals
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" checked>
                                        <label class="form-check-label" for="flexRadioDefault3">
                                        Both of the above
                                        </label>
                                    </div>
                                </div> 
                                <div class="form-group">
                                    <label class="company">Current Company: *</label> 
                                    <input type="text" name="company" class="form-control" placeholder="Eg. infosys" /> 
                                </div>
                                <div class="form-group">
                                    <label class="job">Job Title: *</label> 
                                    <input type="text" name="job" class="form-control" placeholder="Eg. Software Developer" /> 
                                </div>
                                <div class="form-group">
                                    <label class="job">Domain of work: *</label> 
                                    <span> ( Eg Tranfer pricing, Statutory Audit, Equity Research etc)</span>
                                    <input type="text" name="job" class="form-control"/> 
                                </div>
                                <div class="form-group mb-3">
                                    <label class="fieldlabels">Highest Professional Degree *</label> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        CA (Chartered Accountant)
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                        CS (Company Secretary)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                        CMA (Cost and Management Accountant)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                        B.Com.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                        Other
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="LinkedIn">Your LinkedIn Profile Link: *</label> 
                                    <input type="text" name="LinkedIn" class="form-control" placeholder="LinkedIn Profile Link" />
                                </div>
                                <div class="form-group">
                                    <label class="fieldlabels">Total post qualification work experience (in yrs)*</label> 
                                    <select class="form-control" name="city" id="city">
                                        <option>--- Select state ---</option>
                                        <option>fresher</option>
                                        <option>1 Years</option>
                                        <option>2 Years</option>
                                        <option>3 Years</option>
                                        <option>4 Years</option>
                                        <option>5 Years</option>
                                        <option>6 Years</option>
                                        <option>7 Years</option>
                                        <option>8 Years</option>
                                        <option>9 Years</option>
                                        <option>10+ Years</option>
                                    </select>
                                </div> 
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Next" /> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Personal Information:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div> 
                               <div class="form-group">
                                    <label class="guidance">For which domain(s) would you want to provide career guidance? *</label> 
                                    <span> Eg. Statutory Audit, Equity Research, Investment Banking, General, etc.</span>
                                    <input type="text" name="guidance" class="form-control" placeholder="Your answer" /> 
                                </div>
                                <div class="form-group">
                                    <label class="preparation">For which company(ies) would you want to guide on interview processes and preparation? *</label> 
                                    <span>(Eg. Deloitte, KPMG, ICICI Bank, O3 Capital, JP Morgan, etc)</span>
                                    <input type="text" name="preparation" class="form-control" placeholder="Your answer" /> 
                                </div>
                                <div class="form-group">
                                    <label class="experience">How many year of experience you have? *</label> 
                                    <span>Please mention the year of experience you have post qualification.</span>
                                    <input type="text" name="experience" class="form-control" placeholder="Your answer" /> 
                                </div>
                                <div class="form-group mb-3">
                                    <label class="fieldlabels">You would like to be involved in which of these 1-on-1 mentorship sessions: *</label> 
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="Career Counselling" id="Counselling" checked>
                                      <label class="form-check-label" for="Counselling">Career Counselling</label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="Resume Review" id="Resume" >
                                      <label class="form-check-label" for="Resume"> Resume Review</label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="Interview Preparation" id="Interview" >
                                      <label class="form-check-label" for="Interview"> Interview Preparation</label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="Professional Consultation" id="Consultation" >
                                      <label class="form-check-label" for="Consultation"> Professional Consultation </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="Exam Preparation Tips" id="Preparation" >
                                      <label class="form-check-label" for="Preparation"> Exam Preparation Tips </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="Exam Preparation Tips" id="Spiritual" >
                                      <label class="form-check-label" for="Spiritual"> Spiritual Guidance</label>
                                    </div>
                                </div> 
                                <div class="form-group mb-3">
                                    <label class="fieldlabels">If given a chance would you like to take a webinar/workshop on a specific tool/topic?</label> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                       No
                                        </label>
                                    </div>
                                </div> 
                                <div class="form-group mb-3">
                                    <label class="fieldlabels">We work with our mentors to create awesome content for the community. Choose which forms of content you'd be open to collaborating on.</label> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                        Blogs
                                      </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                        <label class="form-check-label" for="flexRadioDefault2">
                                       Video Interview / Events (AMA)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" >
                                        <label class="form-check-label" for="flexRadioDefault3">
                                       Podcast
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4" >
                                        <label class="form-check-label" for="flexRadioDefault4">
                                       Other
                                        </label>
                                    </div>
                                </div> 
                            </div> 
                            <input type="button" name="next" class="next action-button" value="Submit" /> 
                            <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div> <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"> <img src="https://i.imgur.com/GwStPmg.png" class="fit-image"> </div>
                                </div> <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection