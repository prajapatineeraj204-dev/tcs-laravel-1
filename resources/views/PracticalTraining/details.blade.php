@extends('layouts.app')
@section('content')

    <div class=".container-fluid w-100 bg-primary h-25 p-0 ">
        <h3 class="text-center text-white">{{$courses->course_name}} </h3>
    </div>
                        @if($message = session()->get('success'))
                            
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            
                        @endif
    <div class="container d-flex h-50  flex-column ">
        <img src="{{ asset('/assets/img/couress.png') }}" alt="coures details" class="h-25 w-75" width="400px" height="200px" style="margin: auto">
        @if(Auth::check())
                @if($payment==null)
                <a href="{{url('/razorpay-payment',$courses->id)}}" class="btn btn-primary w-100" style="margin: auto">Rs.{{$courses->pricing}} BUY NOW</a>
                @endif
           
         @else
         <a href="{{route('login')}}" class="btn btn-primary w-100">Rs.{{$courses->pricing}} BUY NOW</a>

         @endif

    </div>
    <div class="container">
        <h3>Description</h3>

        <p> {{$courses->course_desc}}   </p>
        <h3>Career</h3>
        <p>L{{$courses->career}}/p>
        <h3>Scope</h3>
        <ul>
            <li>{{$courses->scope}}</li>
            
            
        </ul>
        <h3>Faculty Name</h3>
        <p>{{$courses->faculty_name}}</p>
        <h3>PlayList Video</h3>
        @php
            $list=explode(',',$courses->playlist_name)
        @endphp
        <div class="row">
        @foreach($list as $key=>$val)
            @if($key<=1)
            <div class="col-md-4">
                <div class="card m-3">
                    <div class="card-body">
                        <iframe src="{{$val}}" height="100px" width="100%"></iframe>
                    </div>
                </div>
            </div>
            @else
            <div class="col-md-4">
                <div class="card m-3">
                    <div class="card-body">
                         <iframe src="{{ $val }}" height="100px" width="100%" style="pointer-events:none;" frameborder="0"></iframe>

                    </div>
                </div>
            </div>
            @endif
        @endforeach
        </div>
    </div>
@endsection
