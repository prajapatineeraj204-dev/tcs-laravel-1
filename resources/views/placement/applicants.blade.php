@extends('layouts.web')
@section('content')
<section class="list__mentor">
    <div class="container">
        <div class="row">
            @foreach ($applicants as $applicant)
            <div class="col-md-4 col-lg-4">
                <div class="card__image card__box-v1">
                    {{-- <div class="card__image-header h-250">
                        <img src="{{ asset('Mentor/profile/' . $mentor->profile_image) }}" alt="profile image"
                            class="img-fluid w100 img-transition">
                    </div> --}}
                    <div class="card__image-body">
                        <h6 class="text-capitalize text__name">
                            {{$applicant->name}}
                        </h6>
                        <p class="text-capitalize">
                            <i class="fa-solid fa-user-tie"></i>
                            <span>{{$applicant->company_name}}</span>
                        </p>
                        <p class="text-capitalize">
                            <i class="fas fa-suitcase"></i>
                            <span>{{$applicant->education}}</span>
                        </p>
                        <p class="text-capitalize">
                            <i class="far fa-building"></i>
                            <span>{{$applicant->phone}}</span>
                        </p>
                        
                    </div>
                    {{-- <div class="card__image-footer">
                        <div>
                            <a href="{{$mentor->linkedin_profile}}" target="_blank" class="btn btn-primary"> <i class="fab fa-linkedin-in"></i> LinkedIn </a>
                        </div>
                        <div class="btn__whatsApp">
                            <a href="https://wa.me/{{$mentor->phone}}" target="_blank" class="btn whatsApp-button"> <i class="fa-brands fa-whatsapp"></i> WhatsApp </a>
                        </div>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection