@extends('layouts.admin')

@section('content')
<div class="container-fluid py-6">
  <div class="row">
    <div class="card">
      <ul class="d-flex justify-content-around nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item w-50" role="presentation">
          <button class="nav-link active w-100 m-auto" id="catlist-tab" data-bs-toggle="tab" data-bs-target="#catlist" type="button" role="tab" aria-controls="catlist" aria-selected="true">Sub Category List</button>
        </li>
        <li class="nav-item w-50" role="presentation">
          <button class="nav-link w-100 m-auto" id="cat-tab" data-bs-toggle="tab" data-bs-target="#cat" type="button" role="tab" aria-controls="cat" aria-selected="false">Add Sub Category</button>
        </li>
      </ul>

      <div class="card-body">
       <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="catlist" role="tabpanel" aria-labelledby="catlist-tab">
          <table id="catlist" class="table table-striped" style="width:100%">
             <thead class="thead-light">
               <tr>
                 <th scope="col" class="sort" data-sort="image">S No.</th>
                 <th scope="col" class="sort" data-sort="image">Image</th>
                 <th scope="col" class="sort" data-sort="name">Category Name</th>
                 <th scope="col" class="sort" data-sort="name">Sub Category Name</th>
                 <th scope="col" class="sort" data-sort="status">Status</th>
                 <th scope="col" class="sort" data-sort="action">Action</th>
               </tr>
             </thead>
             <tbody class="list">
               @if(isset($categorylist)) 
               @foreach($categorylist as $list)
               <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td><img src="{{ asset('subcategoryimg/'.$list->subcat_img ) }}" class="img-fluid" style="width: 100px;"></td>
                 <td> 
                      @if($maincat)
                         @foreach($maincat as $value)
                            @if($value->id == $list->catid)
                            {{ $value->cat_name }}
                            @endif
                         @endforeach
                       @endif
                  </td>
                  <td>{{ $list->subcat_name }}</td>
                  <td>{{ ($list->status==1)?"active":"In active" }}</td>
                 <td>
                   <a href="" class="me-2 btn btn-primary btn-sm"><i class="fas fa-eye"></i>
                   </a>
                   <a href="{{ route('subcatdelete',base64_encode($list->id))}}"  class="btn btn-danger me-2 btn-sm"><i class="fas fa-trash"></i>
                   </a>
                   <a href="{{ route('editsubcategory',base64_encode($list->id))}}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                   </a>
                 </td>                   
               </tr>
                @endforeach
                @endif
             </tbody>
           </table>
        </div>
        <div class="tab-pane fade" id="cat" role="tabpanel" aria-labelledby="cat-tab">
         <form action="{{ route('addsubcategory') }}" method="post" enctype="multipart/form-data">
          @csrf
             <div class="row">
               <div class="col-md-6">
                 <div class="mb-3">
                   <label class="form-label" for="validationCustom01">Select Parent Category</label>
                    <select class="form-select" name="catid">
                      @if($maincat)
                      @foreach($maincat as $value)
                      <option value="{{ $value->id }}">{{ $value->cat_name }}</option>
                      @endforeach
                      @endif
                    </select>
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="mb-3">
                   <label class="form-label" for="validationCustom01">Sub Category Name</label>
                   <input name="subcat_name" type="text" class="form-control" id="validationCustom01" placeholder="Enter name" required="">
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
                   <textarea name="subcat_des" required="" class="form-control" placeholder="Description" rows="5"></textarea>
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
                        <span class="file-message">Drag and drop <span style="color: blue;">Browse</span> Your Computer</span>
                        <input class="file-input" type="file" name="file">
                        @error('subcat_img')
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
                         <option value="1">Active</option>
                         <option value="0">In Active</option>
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
     </div>
   </div>
   @endsection