@extends('layouts.web')

@section('content')
<section class="multiform">
    <div class="container">
        <div class="justify-content-center">           
            <div class="">
            @if(session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{session()->get('success')}}
                </div>
            @endif
            @if($errors->all())
                <div class="alert alert-danger" role="alert"> All fields are required</div>
             @endif
                <div class="card mt-3 mb-3">
                    <h2 id="heading">Mentor Onboarding</h2>
                    <form id="msform" action="/applyMentor" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-card row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fname">First Name: <sup>*<sup></label> 
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="{{old('first_name')}}" />
                                    <span class="text-danger">@error('first_name') {{$message}} @enderror</span>
                                </div> 
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="lname">Last Name: <sup>*<sup></label> 
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{old('last_name')}}" />
                                    <span class="text-danger">@error('last_name') {{$message}} @enderror</span>
                                </div> 
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label class="email">Email: <sup>*<sup></label> 
                                    <input type="email" name="email" placeholder="Email Id" class="form-control" value="{{old('email')}}"/> 
                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
                                </div>
                            </div> --}}
                        </div>
                        <div class="form-card row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="dob">Year Date of Birth: <sup>*<sup></label> 
                                    <input type="date" name="dob" class="form-control" placeholder="Date of birth" value="{{old('dob')}}"/>
                                    <span class="text-danger">@error('dob') {{$message}} @enderror</span>
                                </div>
                            </div>
                            {{-- <div class="col-md-4">
                                <div class="form-group">
                                    <label class="mobile">Phone Number: <sup>*<sup></label> 
                                    <input type="number" name="phone" placeholder="Phone Number" class="form-control" value="{{old('phone')}}"/> 
                                    <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                                </div>
                            </div> --}}
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="photo">Please upload your candid headshot photo: <sup>*<sup></label>
                                    <input type="file" name="profile_image" class="form-control" value="{{old('profile_image')}}"/>
                                    <span class="text-danger">@error('profile_image') {{$message}} @enderror</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-card">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="photo">City/Town: <sup>*<sup></label>
                                        <select class="form-control" name="city_town" id="city">
                                            <option value="">--- Select city ---</option>
                                            <option value="Delhi"{{ old('city_town') === 'Delhi' ? ' selected' : '' }}>Delhi</option>
                                            <option value="Mumbai"{{ old('city_town') === 'Mumbai' ? ' selected' : '' }}>Mumbai</option>
                                            <option value="Kolkata"{{ old('city_town') === 'Kolkata' ? ' selected' : '' }}>Kolkata</option>
                                            <option value="Bhopal"{{ old('city_town') === 'Bhopal' ? ' selected' : '' }}>Bhopal</option>
                                            <option value="Bengaluru"{{ old('city_town') === 'Bengaluru' ? ' selected' : '' }}>Bengaluru</option>
                                            <option value="Ranchi"{{ old('city_town') === 'Ranchi' ? ' selected' : '' }}>Ranchi</option>
                                            <option value="Patna"{{ old('city_town') === 'Patna' ? ' selected' : '' }}>Patna</option>
                                        </select>
                                        <span class="text-danger">@error('city_town') {{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="photo">Pincode: <sup>*<sup></label>
                                        <input type="text" name="pincode" class="form-control" placeholder="Pincode" value="{{old('pincode')}}"/>
                                        <span class="text-danger">@error('pincode') {{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="photo">State: <sup>*<sup></label>
                                        <select class="form-control" name="state" id="city">
                                            <option value="">--- Select state ---</option>
                                            <option value="Delhi"{{old('state')==='Delhi'? ' selected':''}}>Delhi</option>
                                            <option value="Haryana"{{old('state'==='Haryana'? ' selected': '')}}>Haryana</option>
                                            <option value="Uttar Pradesh" {{old('Uttar Pradesh'? ' selected':'')}}>Uttar Pradesh</option>
                                            <option value="Madhya Pradesh" {{old('state'==='Madhya Pradesh' ? ' selected':'')}}>Madhya Pradesh</option>
                                            <option value="Orisa" {{old('state')==='Orisa' ? ' selected' :''}}>Orisa</option>
                                            <option value="Uttarkhand"{{old('state')==='Uttarkhand' ? ' selected' :''}}>Uttarakhand</option>
                                            <option value="Bihar"{{old('state')==='Bihar' ? ' selected' :''}}>Bihar</option>
                                        </select>
                                        <span class="text-danger">@error('state'){{$message}}@enderror</span>
                                    </div>
                                </div>
                            </div> 
                        
                        
                        <div class="row form-card">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="company">Current Company: <sup>*<sup></label> 
                                    <input type="text" name="current_company" class="form-control" placeholder="Eg. infosys" value="{{old('current_company')}}"/> 
                                    <span class="text-danger">@error('current_company') {{$message}} @enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="job">Job Title: <sup>*<sup></label> 
                                    <input type="text" name="job_title" class="form-control" placeholder="Eg. Software Developer" value="{{old('job_title')}}"/> 
                                    <span class="text-danger">@error('job_title') {{$message}} @enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="fieldlabels">Total post qualification work experience (in yrs)<sup>*<sup></label> 
                                    <select class="form-control" name="work_experience" id="city">
                                        <option value="">--- Work experience ---</option>
                                        <option value="fresher"{{old('work_experience')==='Fresher'? ' selected':''}} >fresher</option>
                                        <option value="1 Years" {{old('work_experience')==='1 Years'? ' selected':''}}>1 Years</option>
                                        <option value="2 Years" {{old('work_experience')==='2 Years'? ' selected':''}}>2 Years</option>
                                    </select>
                                    <span class="text-danger">@error('work_experience') {{$message}} @enderror</span>
                                </div> 
                            </div>
                            
                        </div>
                        <div class="form-card row">
                        
                            <div class="col-md-3">
                                <div class="form-group mb-3">
                                    <label class="fieldlabels">What do you do? <sup>*<sup></label> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mentor_type" value="Mentor to Students"{{ old('mentor_type') === 'Mentor to Students' ? ' checked' : '' }} id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Mentor to Students
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mentor_type" value="Mentor to Professionals"{{ old('mentor_type') === 'Mentor to Professionals' ? ' checked' : '' }} id="flexRadioDefault2">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Mentor to Professionals
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="mentor_type" value="Both of the above"{{ old('mentor_type') === 'Both of the above' ? ' checked' : '' }} id="flexRadioDefault3">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Both of the above
                                        </label>
                                    </div>
                                    <span class="text-danger">@error('mentor_type') {{ $message }} @enderror</span>
                                </div>
                                
                            </div>    
                            
                            <div class="col-md-4">
                                <div class="form-group mb-3">
                                    <label class="fieldlabels">Highest Professional Degree <sup>*<sup></label> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="highest_degree[]" value="CA (Chartered Accountant)" id="degreeCA"{{ old('highest_degree.0') === 'CA (Chartered Accountant)' ? ' checked' : '' }}>
                                        <label class="form-check-label" for="degreeCA">
                                            CA (Chartered Accountant)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="highest_degree[]" value="CS (Company Secretary)" id="degreeCS"{{ old('highest_degree.0') === 'CS (Company Secretary)' ? ' checked' : '' }}>
                                        <label class="form-check-label" for="degreeCS">
                                            CS (Company Secretary)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="highest_degree[]" value="CMA (Cost and Management Accountant)" id="degreeCMA"{{ old('highest_degree.0') === 'CMA (Cost and Management Accountant)' ? ' checked' : '' }}>
                                        <label class="form-check-label" for="degreeCMA">
                                            CMA (Cost and Management Accountant)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="highest_degree[]" value="B.Com." id="degreeBCom"{{ old('highest_degree.0') === 'B.Com.' ? ' checked' : '' }}>
                                        <label class="form-check-label" for="degreeBCom">
                                            B.Com.
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="highest_degree[]" value="Other" id="degreeOther"{{ old('highest_degree.0') === 'Other' ? ' checked' : '' }}>
                                        <label class="form-check-label" for="degreeOther">
                                            Other
                                        </label>
                                    </div>
                                    <span class="text-danger">@error('highest_degree') {{ $message }} @enderror</span>
                                </div>
                            </div>                            
                            
                            <div class="col-md-5">
                                <div class="form-group mb-3">
                                    <label class="fieldlabels">You would like to be involved in which of these 1-on-1 mentorship sessions: <sup>*<sup></label> 
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="mentorship_sessions[]" value="Career Counselling" id="Counselling"{{ in_array('Career Counselling', old('mentorship_sessions', [])) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="Counselling">Career Counselling</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="mentorship_sessions[]" value="Resume Review" id="Resume"{{ in_array('Resume Review', old('mentorship_sessions', [])) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="Resume"> Resume Review</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="mentorship_sessions[]" value="Interview Preparation" id="Interview"{{ in_array('Interview Preparation', old('mentorship_sessions', [])) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="Interview"> Interview Preparation</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="mentorship_sessions[]" value="Professional Consultation" id="Consultation"{{ in_array('Professional Consultation', old('mentorship_sessions', [])) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="Consultation"> Professional Consultation </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="mentorship_sessions[]" value="Exam Preparation Tips" id="Preparation"{{ in_array('Exam Preparation Tips', old('mentorship_sessions', [])) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="Preparation"> Exam Preparation Tips </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="mentorship_sessions[]" value="Spiritual Guidance" id="Spiritual"{{ in_array('Spiritual Guidance', old('mentorship_sessions', [])) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="Spiritual"> Spiritual Guidance</label>
                                    </div>
                                    <span class="text-danger">@error('mentorship_sessions') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            
                            
                        </div>
                        
                        <div class="form-card row">
                            <div class="col-md-4">
                                <div class="form-group ">
                                    <label class="LinkedIn">Your LinkedIn Profile Link: <sup>*<sup></label> 
                                    <input type="text" name="linkedin_profile" class="form-control" placeholder="LinkedIn Profile Link" value="{{old('linkedin_profile')}}"/>
                                    <span class="text-danger">@error('linkedin_profile') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="job">Domain of work: <sup>*<sup></label> 
                                    <input type="text" name="domain_work" class="form-control" placeholder="Eg. Tranfer pricing, Statutory Audit, Equity Research etc" value="{{old('domian_work')}}"/> 
                                    <span class="text-danger">@error('domain_work') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="job">Enter Your Fee: <sup>*<sup></label> 
                                    <input type="text" name="domain_work" class="form-control" placeholder="Eg. Tranfer pricing, Statutory Audit, Equity Research etc" value="{{old('domian_work')}}"/> 
                                    <span class="text-danger">@error('fee') {{ $message }} @enderror</span>
                                </div>
                            </div>
                            
                        </div> 
                            
                        <div class="form-card">
                            <div class="form-group">
                                <label class="guidance">For which domain(s) would you want to provide career guidance? <sup>*<sup></label>
                                <input type="text" name="career_guidance" class="form-control" placeholder="Eg. Statutory Audit, Equity Research, Investment Banking, General, etc..."
                                       value="{{ old('career_guidance') }}">
                                <span class="text-danger">@error('career_guidance') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label class="preparation">For which company(ies) would you want to guide on interview processes and preparation? <sup>*<sup></label>
                                <input type="text" name="interview_processes_preparation" class="form-control" placeholder="Eg. Deloitte, KPMG, ICICI Bank, O3 Capital, JP Morgan, etc..."
                                       value="{{ old('interview_processes_preparation') }}">
                                <span class="text-danger">@error('interview_processes_preparation') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group">
                                <label class="experience">How many years of experience do you have? <sup>*<sup></label>
                                <input type="text" name="post_qualification_experience" class="form-control" placeholder="Please mention the years of experience you have post qualification."
                                       value="{{ old('post_qualification_experience') }}">
                                <span class="text-danger">@error('post_qualification_experience') {{ $message }} @enderror</span>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label class="fieldlabels">If given a chance, would you like to take a webinar/workshop on a specific tool/topic?</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="specific_tool_topic[]" value="Yes" id="flexRadioDefault1"
                                           {{ old('specific_tool_topic') === 'Yes' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="specific_tool_topic[]" value="No" id="flexRadioDefault2"
                                           {{ old('specific_tool_topic') === 'No' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        No
                                    </label>
                                </div>
                                <span class="text-danger">@error('specific_tool_topic') {{ $message }} @enderror</span>
                            </div>
                            
                            <div class="form-group mb-3">
                                <label class="fieldlabels">We work with our mentors to create awesome content for the community. Choose which forms of content you'd be open to collaborating on.</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="forms_of_content[]" value="Blogs" id="flexRadioDefault1"
                                           {{ old('forms_of_content') === 'Blogs' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Blogs
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="forms_of_content[]" value="Video Interview / Events (AMA)" id="flexRadioDefault2"
                                           {{ old('forms_of_content') === 'Video Interview / Events (AMA)' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Video Interview / Events (AMA)
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="forms_of_content[]" value="Podcast" id="flexRadioDefault3"
                                           {{ old('forms_of_content') === 'Podcast' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault3">
                                        Podcast
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="forms_of_content[]" value="Other" id="flexRadioDefault4"
                                           {{ old('forms_of_content') === 'Other' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="flexRadioDefault4">
                                        Other
                                    </label>
                                </div>
                                <span class="text-danger">@error('forms_of_content') {{ $message }} @enderror</span>
                            </div>
                            <div class="form-group mb-3">
                                 <label class="form-check-label" for="flexRadioDefault4">
                                     Write Short Notes about yourself! <sup>*<sup>
                                    </label>
                                <textarea id="w3review" name="" rows="4" cols="50" class="form-control"></textarea>
                            </div>
                            <div class="d-flex">
                                <input type="checkbox" id="termAndCondtion" name="termAndCondtion" value="policy" class="form-check-input">
                               <p style="margin-left:10px">I have read and agree to the <a href="#">Term and Condition</a>!.</p> 
                            </div>
                        </div>                       
                        <input type="submit" name="next" class="next action-button" value="Submit" /> 
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection