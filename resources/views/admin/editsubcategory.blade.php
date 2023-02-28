@extends('layouts.admin')

@section('content')
<div class="container-fluid py-6">
  <div class="row">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('updatesubcategory') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Select Parent Category</label>
                     <select class="form-select" name="catid">
                       @if($maincat)
                       @foreach($maincat as $value)
                       <option value="{{ $value->id }}" {{ ($value->id==$categorydata->catid)?"selected":"" }}>{{ $value->cat_name }}</option>
                       @endforeach
                       @endif
                     </select>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Sub Category Name</label>
                    <input type="hidden" name="id" value="{{$categorydata->id }}">
                    <input name="subcat_name" type="text" class="form-control"  value="{{ $categorydata->subcat_name }}"  id="validationCustom01" placeholder="Category name" required="">
                    @error('subcat_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom02">Description</label>
                    <textarea name="subcat_des" required="" class="form-control" placeholder="Description" rows="5">{{ $categorydata->subcat_des }}</textarea>
                    @error('subcat_des')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <div class="w-100 d-flex file-drop-area flex-column justify-content-center">
                      <span class="choose-file-button">The higher the resolution, the better your upload will look on your gear.</span>
                      <span class="file-message">{{ $categorydata->subcat_img }}</span>
                      <input class="file-input" type="file" name="file" value="{{ $categorydata->subcat_img }}">
                      @error('cat_img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom02">Status</label>
                    <select class="form-select" name="status">
                      <option value="1" {{ ($categorydata->status==1)?"selected":"" }}>Active</option>
                      <option value="0" {{ ($categorydata->status==0)?"selected":"" }}>In Active</option>
                    </select>
                     @error('status')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection