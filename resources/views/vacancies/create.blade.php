@extends('layouts.web')

@section('content')
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
@endsection