@extends('layouts.web')
@section('content')
<section class="list__mentor">
    <div class="container">
        <div class="row">
            @foreach ($mentors as $mentor)
            <div class="col-md-4 col-lg-4">
                <div class="card__image card__box-v1">
                    <div class="card__image-header h-250">
                        <img src="{{ asset('Mentor/profile/' . $mentor->profile_image) }}" alt="profile image"
                            class="img-fluid w100 img-transition">
                    </div>
                    <div class="card__image-body">
                        <h6 class="text-capitalize text__name">
                            {{$mentor->first_name}} {{$mentor->last_name}}
                        </h6>
                        <p class="text-capitalize">
                            <i class="fa-solid fa-user-tie"></i>
                            <span>{{$mentor->domain_work}}</span>
                        </p>
                        <p class="text-capitalize">
                            <i class="fas fa-suitcase"></i>
                            <span>{{$mentor->career_guidance}}</span>
                        </p>
                        <p class="text-capitalize">
                            <i class="far fa-building"></i>
                            <span>{{$mentor->current_company}}</span>
                        </p>
                        
                    </div>
                    <div class="card__image-footer">
                        <div>
                            <a href="{{$mentor->linkedin_profile}}" target="_blank" class="btn btn-primary" style="float:left"> <i class="fab fa-linkedin-in"></i> LinkedIn </a>
                            
                            <a href="appointment_booking/{{$mentor->id}}" class="btn whatsApp-button" style="float:right"> <i class="far fa-calendar-check"></i> Book Now </a>
                        </div>
                        <!--<div class="btn__whatsApp">-->
                            
                        <!--</div>-->
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection