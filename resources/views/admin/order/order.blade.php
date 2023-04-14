@extends('layouts.admin')

@section('content')
<div class="container-fluid py-6">
  <div class="row">
    <div class="card">
      <ul class="d-flex justify-content-around nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item w-50" role="presentation">
          <button class="nav-link active w-100 m-auto" id="catlist-tab" data-bs-toggle="tab" data-bs-target="#catlist" type="button" role="tab" aria-controls="catlist" aria-selected="true"> Order List</button>
        </li>
        <li class="nav-item w-50" role="presentation">
          <button class="nav-link w-100 m-auto" id="cat-tab" data-bs-toggle="tab" data-bs-target="#cat" type="button" role="tab" aria-controls="cat" aria-selected="false">Add Order</button>
        </li>
      </ul>
      <div class="card-body">
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="catlist" role="tabpanel" aria-labelledby="catlist-tab">
            <table id="catlist" class="table table-striped" style="width:100%">
              <thead class="thead-light">
                 <tr>
                  <th scope="col" class="sort" data-sort="image">S No.</th>
                  <th scope="col" class="sort" data-sort="image">Product Image</th>
                  <th scope="col" class="sort" data-sort="name">Product Name</th>
                  <th scope="col" class="sort" data-sort="name">Category Name</th>
                  <th scope="col" class="sort" data-sort="name">Sub Category Name</th>
                  <th scope="col" class="sort" data-sort="status">Status</th>
                  <th scope="col" class="sort" data-sort="action">Action</th>
                </tr>
              </thead>
              <tbody class="list">
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <a href="" class="me-2 btn btn-primary btn-sm"><i class="fas fa-eye"></i>
                    </a>

                    <a href="" class="btn btn-info btn-sm"><i class="fas fa-edit"></i>
                    </a>
                    <a class="btn btn-danger me-2 btn-sm" href="javascript:void(0)" onclick="event.preventDefault();document.getElementById('destroy-form').submit();"><i class="fas fa-trash"></i></a>

                    <form id="destroy-form" action="" method="POST" style="display: none;">
                    </form>
                  </td> 
                  <td></td>
                  <td></td>                  
                </tr>
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="cat" role="tabpanel" aria-labelledby="cat-tab">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" id="productsubmit">
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Select User</label>
                    <select class="form-select" name="catid" id="parentcat">
                      <option>Select User</option>  
                      @foreach($users as $value)                     
                      <option value="{{ $value['name'] }}">{{ $value['name'] }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <h6 class="my-4 font-weight-bolder">Billing Details</h6>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Billing Name</label>
                    <input name="billing_name" type="text" class="form-control" id="validationCustom01" placeholder="Billing name" required="">
                    @error('billing_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Billing Email</label>
                    <input name="billing_email" type="email" class="form-control" id="validationCustom01" placeholder="Billing Email" required="">
                    @error('billing_email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Billing Phone</label>
                    <input name="billing_phone" type="text" class="form-control" id="validationCustom01" placeholder="Billing Phone" required="">
                    @error('billing_phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>



                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Billing City</label>
                    <input name="billing_city" type="text" class="form-control" id="validationCustom01" placeholder="Billing City" required="">
                    @error('billing_city')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Billing State</label>
                    <input name="billing_state" type="text" class="form-control" id="validationCustom01" placeholder="Billing State" required="">
                    @error('billing_state')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Billing Pincoode</label>
                    <input name="billing_pincode" type="number" class="form-control" id="validationCustom01" placeholder="Billing Pincode" required="">
                    @error('billing_pincode')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Billing Address</label>
                    <input name="billing_address" type="text" class="form-control" id="validationCustom01" placeholder="Billing Address" required="">
                    @error('billing_address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">
                <h6 class="my-4 font-weight-bolder">Shiping Details</h6>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Shiping Name</label>
                    <input name="shiping_name" type="text" class="form-control" id="validationCustom01" placeholder="Shiping name" required="">
                    @error('shiping_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Shiping Email</label>
                    <input name="shiping_email" type="email" class="form-control" id="validationCustom01" placeholder="Shiping Email" required="">
                    @error('shiping_email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Shiping Phone</label>
                    <input name="shiping_phone" type="text" class="form-control" id="validationCustom01" placeholder="Shiping Phone" required="">
                    @error('shiping_phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>



                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Shiping City</label>
                    <input name="shiping_city" type="text" class="form-control" id="validationCustom01" placeholder="Shiping City" required="">
                    @error('shiping_city')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Shiping State</label>
                    <input name="shiping_state" type="text" class="form-control" id="validationCustom01" placeholder="Shiping State" required="">
                    @error('shiping_state')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Shiping Pincoode</label>
                    <input name="shiping_pincode" type="number" class="form-control" id="validationCustom01" placeholder="Shiping Pincode" required="">
                    @error('shiping_pincode')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Shiping Address</label>
                    <input name="shiping_address" type="text" class="form-control" id="validationCustom01" placeholder="Shiping Address" required="">
                    @error('shiping_address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row">

                <div class="col-md-3">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom02">Regular Price (Rs.) *</label>
                    <input type="number" name="regprice" class="form-control" id="regprice">
                    @error('regprice')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="mb-3">
                    <label class="form-label" for="validationCustom02">Sale Price (Rs.) *</label>
                    <input type="number" name="saleprice" required class="form-control" id="saleprice">
                    @error('saleprice')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="mb-3">
                    <label class="form-label" for="validationChech">Stock Unlimited</label>
                    <input type="checkbox" name="check" id="validationChech" >
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="mb-3">
                    <label class="form-label" for="stock">Stock Quntity *</label>
                    <input type="number" name="stock" class="form-control" id="stock" value="0">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="mb-3">
                    <div class="w-100 d-flex file-drop-area flex-column justify-content-center">
                      <span class="choose-file-button">The higher the resolution, the better your upload will look on your gear.</span>
                      <span class="file-message">Drag and drop <span style="color: blue;">Browse</span> Your Computer</span>
                      <input class="file-input" type="file" name="file">
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
@push('js')
@endpush
