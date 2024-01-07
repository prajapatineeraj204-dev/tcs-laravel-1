@extends('layouts.web')
@section('content')


<section style="background: #fff;">
    <div class="container-fluid">
      <div class="job-header text-center job-card">
        <h2 class="p-title text-black">Book Your Appointment With Expert </h2>
      </div>
    </div>
    <div class="container" style="background: rgb(244, 245, 249);">
        <div class="row">
            <div class="col-md-6">
                <div class="formbold-main-wrapper">
                    <div class="profile__image">
                        <img src="/Mentor/profile/{{$mentor->profile_image}}" style="width: 500px; height: 100%;"/>
                    </div>
                    <div class="expert__detail">
                        <p class="text-capitalize">{{$mentor->first_name}}</p>
                    </div>
                    <div class="expert__detail">
                        <p class="text-capitalize">Domain – {{$mentor->domain_work}}</p>
                        
                    </div>
                    <div class="expert__detail">
                        <p class="text-capitalize">
                            Company – {{$mentor->current_company}}</p>
                        </p>
                    </div>
                    <div class="text-center">
                        <a href="https://linkedin.com/{{$mentor->linkedin_profile}}" target="_blank" class="btn btn-primary">
                            <i class="fab fa-linkedin-in" aria-hidden="true"></i> LinkedIn 
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="formbold-main-wrapper">
                    @if(session('success'))
                     <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif
                  <!-- Author: FormBold Team -->
                  <!-- Learn More: https://formbold.com -->
                  <div class="formbold-form-wrapper">
                    <form action="{{route('bookAppointment', ['mentorId'=> $mentor->id])}}" method="POST">
                        @csrf
                      <div class="formbold-mb-5">
                        <label for="name" class="formbold-form-label"> Full Name </label>
                        <input
                          type="text"
                          name="name"
                          id="name"
                          placeholder="Full Name"
                          class="form-control"
                          value="{{old('name')}}"
                        />
                        <span class="text-danger">@error('name'){{$message}} @enderror</span>
                      </div>
                      <div class="formbold-mb-5">
                        <label for="phone" class="formbold-form-label"> Phone Number </label>
                        <input
                          type="text"
                          name="phone"
                          id="phone"
                          placeholder="Enter your phone number"
                          class="form-control"
                          value="{{old('phone')}}"
                        />
                        <span class="text-danger">@error('phone'){{$message}} @enderror</span>
                      </div>
                      <div class="formbold-mb-5">
                        <label for="email" class="formbold-form-label"> Email Address </label>
                        <input
                          type="email"
                          name="email"
                          id="email"
                          placeholder="Enter your email"
                          class="form-control"
                          value="{{old('email')}}"
                        />
                        <span class="text-danger">@error('email'){{$message}} @enderror</span>
                      </div>
                      <div class="flex flex-wrap formbold--mx-3">
                        <div class="w-full sm:w-half formbold-px-3">
                          <div class="formbold-mb-5 w-full">
                            <label for="date" class="formbold-form-label"> Date </label>
                            <input
                              type="date"
                              name="date"
                              id="date"
                              class="form-control"
                              value="old('date')"
                            />
                            <span class="text-danger">@error('date'){{$message}} @enderror</span>
                          </div>
                        </div>
                        <div class="w-full sm:w-half formbold-px-3">
                          <div class="formbold-mb-5">
                            <label for="time" class="formbold-form-label"> Time </label>
                            <input
                              type="time"
                              name="time"
                              id="time"
                              class="form-control"
                              value="{{old('time')}}"
                            />
                            <span class="text-danger">@error('time'){{$message}} @enderror</span>
                          </div>
                        </div>
                      </div>

                      <div class="formbold-mb-5 formbold-pt-3">
                        <label class="formbold-form-label formbold-form-label-2">
                          Address Details
                        </label>
                        <div class="flex flex-wrap formbold--mx-3">
                          <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                              <input
                                type="text"
                                name="area"
                                id="area"
                                placeholder="Enter area"
                                class="form-control"
                                value="{{old('area')}}"
                              />
                              <span class="text-danger">@error('area'){{$message}} @enderror</span>
                            </div>
                          </div>
                          <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                              <input
                                type="text"
                                name="city"
                                id="city"
                                placeholder="Enter city"
                                class="form-control"
                                value="{{old('city')}}"
                              />
                              <span class="text-danger">@error('city'){{$message}} @enderror</span>
                            </div>
                          </div>
                          <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                              <input
                                type="text"
                                name="state"
                                id="state"
                                placeholder="Enter state"
                                class="form-control"
                                value="{{old('state')}}"
                              />
                              <span class="text-danger">@error('state'){{$message}} @enderror</span>
                            </div>
                          </div>
                          <div class="w-full sm:w-half formbold-px-3">
                            <div class="formbold-mb-5">
                              <input
                                type="text"
                                name="post_code"
                                id="post-code"
                                placeholder="Post Code"
                                class="form-control"
                                value="{{old('post_code')}}"
                              />
                              <span class="text-danger">@error('post_code'){{$message}} @enderror</span>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div>
                        <button class="formbold-btn">Book Appointment</button>
                      </div>
                    </form>
                  </div>
                </div>
            </div>
        </div>            
    </div>
</section>

@endsection
