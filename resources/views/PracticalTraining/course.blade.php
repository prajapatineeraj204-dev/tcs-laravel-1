@extends('layouts.app')
@section('content')
<div class=".container-fluid w-100 bg-primary h-25 p-0 ">
    <h3 class="text-center text-white">Course List</h3>
</div>
<div class="container">
   

    <div class="row">
          @php
            $paycourse=DB::table('payments')->where('user_id',Auth::user()->id)->get();
         @endphp
            @if(Auth::check())
             @if($paycourse)
                @foreach($paycourse as $course)
                @php
                    $courses=DB::table('tcs_upload_course')->where('id',$course->course_id)->first();
                @endphp
            <div class="col-md-4">
           
               <div class="card" style="width: 18rem;">
                  <img src="{{ asset('/assets/img/couress.png') }}" class="card-img-top" alt="...">

                  <div class="card-body">
                    <h5 class="card-title">{{$courses->course_name}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="{{url('/course',Crypt::encrypt($courses->id))}}" class="btn btn-primary">All Video</a>
                  </div>
                </div>
            </div>
                
                 @endforeach
            @endif
            @endif
            </div>
</div>

@endsection
