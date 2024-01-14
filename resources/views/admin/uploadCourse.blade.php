@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-6">
        @if(session()->get('success'))
            <div class="alert alert-primary text-white" role="alert">
             {{session()->get('success')}}
            </div>
        @endif
        <a href="{{url('/admin/courseAll')}}" class="btn btn-primary">Course List</a>
        <form action="{{ isset($course) ?url('admin/courseUpdate',$course->id): url('admin/upload_course') }}" method="post" enctype="multipart/form-data" multiple>
            @if(isset($course))
                @method('put')
            @endif
            @csrf
            <div class="col-md-12 ">
                <div class="mb-3">
                    <div class="row">
                       <div class="col-md-6">
                          <label class="form-label">Course Name</label>
                            <input name="course_name" value="{{isset($course)?$course->course_name:''}}" type="text" class="form-control"  placeholder="Course Name" required="">
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{ $message }}</strong> --}}
                                </span>
                            @enderror 
                       </div> 
                       <div class="col-md-6">
                          <label class="form-label">Course Description</label>
                            <textarea name="course_desc" placeholder="Course Description" class="form-control">{{isset($course)?$course->course_desc:''}}</textarea>
                            @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                            </span>
                            @enderror 
                       </div> 
                       <div class="col-md-6">
                           <label class="form-label">Playlist Name</label>
                            <input name="playlist_name[]" type="text" class="form-control"  placeholder="Playlist Name" required="">
                            
                            @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                            </span>
                            @enderror
                       </div> 
                       
                           @if(isset($course))
                            @php 
                                $list=explode(',',$course->playlist_name);
                               
                            @endphp
                                 <label class="form-label"></label>

                                @foreach($list as $val)
                                <div class="col-md-6">
                                    <input name="playlist_name[]" value="{{$val}}" type="text" class="form-control"  placeholder="Playlist Name" required="">
                                </div>
                                @endforeach
                            @endif
                            <div class="plalistname"></div>
                            
                       
                       <div class="col-md-12"><div onclick="playlist()" class="btn btn-danger">+</div><br></div>
                       <div class="col-md-6">
                           <label class="form-label">Scope</label>
                            <input name="scope" type="text" value="{{isset($course)?$course->scope:''}}" class="form-control"  placeholder="Scope" required="">
                            @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                            </span>
                            @enderror
                       </div> 
                        <div class="col-md-6">
                           <label class="form-label">Video File</label>
                            <input name="file[]" type="file" class="form-control"  placeholder="" required="" multiple>
                            @error('product_name')
                            <span class="invalid-feedback" role="alert">
                                {{-- <strong>{{ $message }}</strong> --}}
                            </span>
                            @enderror
                       </div> 
                       <div class="col-md-6">
                            <label class="form-label">Career</label>
                            <input name="career" type="text" value="{{isset($course)?$course->career:''}}" class="form-control"  placeholder="Career" required="">
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{ $message }}</strong> --}}
                                </span>
                            @enderror
                       </div> 
                       <div class="col-md-6">
                           <label class="form-label">Faculty Name</label>
                            <input name="faculty_name" value="{{isset($course)?$course->faculty_name:''}}" type="text" class="form-control"  placeholder="Faculty Name" required="">
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{ $message }}</strong> --}}
                                </span>
                            @enderror
                       </div> 
                       <div class="col-md-6">
                           <label class="form-label">Duration </label>
                            <input name="duration" value="{{isset($course)?$course->duration:''}}" type="number" class="form-control"  placeholder="Duration" required="">
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{ $message }}</strong> --}}
                                </span>
                            @enderror
                       </div> 
                       <div class="col-md-6">
                           <label class="form-label">Validity </label>
                            <input name="validity" value="{{isset($course)?$course->validity:''}}" type="date" class="form-control"  placeholder="Validity" required="">
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{ $message }}</strong> --}}
                                </span>
                            @enderror
                       </div> 
                       <div class="col-md-6">
                           <label class="form-label">Pricing</label>
                            <input name="pricing" value="{{isset($course)?$course->pricing:''}}" type="number" class="form-control"  placeholder="Pricing" required="">
                            @error('product_name')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{ $message }}</strong> --}}
                                </span>
                            @enderror
                       </div> 
                       
                    </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">{{isset($course)?'Update':'Submit'}}</button>
        </form>
    </div>
@endsection
@push('js')
    
    <script type="text/javascript">
        function playlist(){
            var html='<div class="col-md-6"><input name="playlist_name[]" type="text" class="form-control"  placeholder="Playlist Name" ></div>';
            $('.plalistname').append(html);
        }
    </script>
@endpush
