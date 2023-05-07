@extends('layouts.web')

@section('content')
<section style="background:#fff">
    <div class="container-fluid">
      <div class="job-header text-center job-card">
        <h2 class="job-title"> Vacancy </h2>
      </div>
    </div>
    <div class="container-fluid" style="background:#f4f5f9">
      <div class="container job-card">
        @if(!empty($vacancies))
            @foreach ($vacancies as $vacancie)
            <div class="basic-details card-box mb-2">
                <div class="row">
                    <div class="col-md-9">
                        <div class="text-start ps-4">
                            <h5 class="">{{ $vacancie->job_title }}</h5>
                            <div class="mb-3">
                                <small>Company: {{ $vacancie->company_name }}</small>
                            </div>
                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$vacancie->city}}</span>
                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>Full Time</span>
                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>{{$vacancie->salary}}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="d-flex mb-3">
                            <a class="heroBtn m-0" href="{{route('vacancie.show',['vacancie'=>1])}}">Apply Now</a>
                        </div>
                        <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Post Date: {{date("d/m/Y",strtotime($vacancie->created_at))}}</small>
                    </div>
                </div>
            </div>
            @endforeach
        @endif
        
      </div>
    </div>
</section>
@endsection