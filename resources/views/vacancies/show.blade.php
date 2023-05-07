@extends('layouts.web')

@section('content')
<section style="background:#fff">
    <div class="container-fluid">
      <div class="job-header text-center job-card">
        <h2 class="job-title"> Job Detail </h2>
      </div>
    </div>
    <div class="container-fluid" style="background:#f4f5f9">
      <div class="container job-card pt-0">
        <div class="basic-details card-box mb-2">
            <ul class="list-group">
                <li class="list-group-item"><label class="fw-bold me-2">Position:</label>{{$vacancie->job_title}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Eligibility:</label>{{$vacancie->eligibility}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">No Of Openings:</label>{{$vacancie->jobopening}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Job Location:</label>{{$vacancie->city}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">CTC:</label>{{$vacancie->salary}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Job Timings:</label>{{$vacancie->job_timings}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Interview Details:</label>{{$vacancie->intreview_time}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Job Info / Job Description:</label>{{$vacancie->job_description}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Company Name:</label>{{$vacancie->company_name}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Contact Person Name:</label>{{$vacancie->user_name}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Phone Number:</label>{{$vacancie->phone_number}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Email Id:</label>{{$vacancie->email}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Contact Person Profile:</label>{{$vacancie->contact_persan}}</li>
                <li class="list-group-item"><label class="fw-bold me-2">Job Address:</label>{{$vacancie->job_address}}</li>
            </ul>
        </div>
        <h3>Apply For The Job</h3>
        <div class="basic-details card-box">
            <form>
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="email" name="email" class="form-control" placeholder="Your Email">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="text" name="phone" class="form-control" placeholder="Your Mobile">
                    </div>
                    <div class="col-12 col-sm-6">
                        <input type="file" class="form-control bg-white">
                    </div>
                    <div class="col-12">
                        <textarea class="form-control" name="message" rows="5" placeholder="Coverletter"></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
</section>
@endsection