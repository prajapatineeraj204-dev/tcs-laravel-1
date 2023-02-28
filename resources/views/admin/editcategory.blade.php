@extends('layouts.admin')

@section('content')
<div class="container-fluid py-6">
  <div class="row">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('updatecategory') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Category Name</label>
                    <input type="hidden" name="catid" value="{{$categorydata->id }}">
                    <input name="cat_name" type="text" class="form-control"  value="{{ $categorydata->cat_name }}"  id="validationCustom01" placeholder="Category name" required="">
                    @error('cat_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom02">Description</label>
                    <textarea name="cat_des" required="" class="form-control" placeholder="Description" rows="5">{{ $categorydata->cat_des }}</textarea>
                    @error('cat_des')
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
                      <span class="file-message">{{ $categorydata->cat_img }}</span>
                      <input class="file-input" type="file" name="file" value="{{ $categorydata->cat_img }}">
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