@extends('layouts.web')
@section('content')
<section class="bg-light section__profile">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 mb-4 mb-sm-5">
              <div class="card__profile card-style1 border-0">
                  <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                      <div class="row align-items-center">
                          <div class="col-lg-6 mb-4 mb-lg-0">
                              {{-- /<img src="Mentor/profile/{{$mentorProfile->profile_image}}" alt="..." height="300" width="300"> --}}
                          </div>
                          <div class="col-lg-6 px-xl-10">
                              <div class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                  <h3 class="h2 text-white mb-0">{{auth()->user()->name}}</h3>
                                  {{-- <span class="text-primary">{{$mentorProfile->career_guidance}}</span> --}}
                              </div>
                              <ul class="list-unstyled mb-1-9">
                                  {{-- <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Position:</span> {{$mentorProfile->job_title}}</li>
                                  <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Experience:</span> {{$mentorProfile->work_experience}}</li>
                                  <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Email:</span> {{$mentorProfile->email}}</li>
                                  <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-secondary me-2 font-weight-600">Website:</span> {{$mentorProfile->domain_work}}</li>
                                  <li class="display-28"><span class="display-26 text-secondary me-2 font-weight-600">Phone:</span> {{$mentorProfile->phone}}</li> --}}
                              </ul>
                              <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                  <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                  <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                  <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                  <li><a href="#!"><i class="ti-instagram"></i></a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-12 mb-4 mb-sm-5">
              <div>
                  <span class="section__profile__title text-primary mb-3 mb-sm-4">About Me</span>
                  <p>Edith is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                  <p class="mb-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed.</p>
              </div>
          </div>
          
      </div>
  </div>
</section>
@endsection
@push('js')
        
<script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/argon-dashboard.min.js?v=2.0.4"></script>
@endpush