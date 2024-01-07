@extends('layouts.app')

@section('content')
<h1 class="text-center">Courses</h1>
    <div class="container d-flex flex-wrap justify-content-center">
        <div class="card m-3" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                    content.</p>
                <a href="{{route('practicalTrainingsDetails')}}" class="btn btn-primary w-100">View Details</a>
            </div>
        </div>
@endsection
