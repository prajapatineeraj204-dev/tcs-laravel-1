@extends('layouts.app')

@section('content')
<h1 class="text-center">Courses</h1>
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach($courses as $course)
        <div class="card m-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$course->course_name}}</h5>
                <p class="card-text">{{$course->course_desc}}</p>
                @if(auth()->check())
                <a href="{{route('practicalTrainingsDetails',$course->id)}}" class="btn btn-primary w-100">View Details</a>
                @else
                <a href="{{route('login')}}" class="btn btn-primary w-100">View Details</a>
                @endif
            </div>
        </div>
        @endforeach
    </div>
@endsection
