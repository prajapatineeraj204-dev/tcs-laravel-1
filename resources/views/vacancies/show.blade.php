@extends('layouts.web')

@section('content')
<div class="container-xxl py-5 bg-dark page-header mb-5">
    <div class="container my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3">Job List</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white active" aria-current="page">Job Detail</li>
            </ol>
        </nav>
    </div>
</div>

<!-- ============types of vacancy section ================ -->

<div class="container-xxl py-5">
    <div class="container">
        <div class="row gy-5 gx-4">
            <div class="col-lg-8">
                <div class="d-flex align-items-center mb-5">
                    <img class="flex-shrink-0 img-fluid border rounded" src="{{asset('assets/img/logos/com-logo-2.jpg')}}" alt="" style="width: 80px; height: 80px;">
                    <div class="text-start ps-4">
                        <h3 class="mb-3 heading">{{$vacancie->job_title}}</h3>
                        <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$vacancie->job_address}}</span>
                        <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$vacancie->job_timings}}</span>
                        <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{$vacancie->salary}}</span>
                    </div>
                </div>

                <div class="mb-5">
                    <h4 class="mb-3 heading">Job description</h4>
                    <p>{{$vacancie->job_description}}</p>
                    <h4 class="mb-3 heading">Responsibility</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul>
                    <h4 class="mb-3 heading">Qualifications</h4>
                    <p>Magna et elitr diam sed lorem. Diam diam stet erat no est est. Accusam sed lorem stet voluptua sit sit at stet consetetur, takimata at diam kasd gubergren elitr dolor</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Dolor justo tempor duo ipsum accusam</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Elitr stet dolor vero clita labore gubergren</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Rebum vero dolores dolores elitr</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Est voluptua et sanctus at sanctus erat</li>
                        <li><i class="fa fa-angle-right text-primary me-2"></i>Diam diam stet erat no est est</li>
                    </ul>
                </div>

                <div class="">
                    <h4 class="mb-4 heading">Apply For The Job</h4>
                    <form>
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" class="form-control" id="" placeholder="Your Name" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control" id="" placeholder="Your Email" required>
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="website" class="form-control" id="" placeholder="Portfolio Website">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="file" name="resume" class="form-control bg-white" id="" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="coverletter" rows="5" placeholder="Coverletter" id=""></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bg-thin rounded p-job mb-4">
                    <h4 class="mb-4 heading">Job Summery</h4>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: {{$vacancie->created_at}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: {{$vacancie->job_opaning}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: {{$vacancie->job_timings}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: {{$vacancie->salary}}</p>
                    <p><i class="fa fa-angle-right text-primary me-2"></i>Location: {{$vacancie->job_address}}</p>
                    <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 Jan, 2045</p>
                </div>
                <div class="bg-thin rounded p-job">
                    <h4 class="mb-4 heading">Company Detail</h4>
                    <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr vero dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata aliquyam et rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd clita labore.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection