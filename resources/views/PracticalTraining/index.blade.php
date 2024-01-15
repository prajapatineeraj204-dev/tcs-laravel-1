@extends('layouts.app')

@section('content')
<h1 class="text-center">Courses</h1>
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach($courses as $course)
        <div class="card m-3" style="width: 18rem;">
            <img src="{{ asset('/assets/img/couress.png') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$course->course_name}}</h5>
                <p class="card-text">{{$course->course_desc}}</p>
                
                <a href="{{route('practicalTrainingsDetails',$course->id)}}" class="btn btn-primary w-100">View Details</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
