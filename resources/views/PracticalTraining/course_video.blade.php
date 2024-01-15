@extends('layouts.app')
@section('content')
<div class=".container-fluid w-100 bg-primary h-25 p-0 ">
    <h3 class="text-center text-white">{{$courses->course_name}}</h3>
</div>
<div class="container">
   @php
   		$video=explode(',',$courses->video);
   @endphp

    <div class="row">
 @foreach($video as $key=>$vi)
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <video width="300" controls>
                    <source src="{{ asset($vi) }}" type="video/mp4">
                </video>
                <button class="btn btn-primary" data-toggle="modal" data-target="#videoModal{{$key}}" data-src="{{ asset($vi) }}">Open Video</button>
            </div>
        </div>
    </div>
@endforeach
    </div>
</div>
@foreach($video as $key=>$vi)
<div class="modal fade" id="videoModal{{$key}}" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="videoModalLabel">Video Player</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <video style="width: 100% !important;" controls>
                            <source src="{{ asset($vi) }}" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection

