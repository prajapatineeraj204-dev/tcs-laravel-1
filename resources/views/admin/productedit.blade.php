@extends('layouts.admin')

@section('content')
<div class="container-fluid py-6">
  <div class="row">
    <div class="card">
      <div class="card-body">
        <h5 class="mb-3">Product Edit</h5>
        <form action="{{ route('product.update',base64_encode($productlist->id)) }}" method="post" enctype="multipart/form-data" id="productsubmit" >
          {{ method_field('PUT') }}
          @csrf
          <div class="row">
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label" for="validationCustom01">Select Category</label>
                <select class="form-select" name="catid" id="parentcat">
                  <option>Select Category</option>
                  @if($catlist)
                  @foreach($catlist as $value)
                  <option value="{{ $value->id }}" {{ ($productlist['catid']==$value->id)?"selected":"" }} >{{ $value->cat_name }}</option>
                  @endforeach
                  @endif
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label" for="validationCustom01">Select Sub Category</label>
                <select class="form-select" name="subcatid" id="subcategory">
                  <option>Select Sub Category</option>
                  @if($subcatlist)
                  @foreach($subcatlist as $value)
                  <option value="{{ $value->id }}" {{ ($productlist['subcatid']==$value->id)?"selected":"" }}>{{ $value->subcat_name }}</option>
                  @endforeach
                  @endif
                </select>
              </div>
            </div>
            <div class="col-md-4">
              <div class="mb-3">
                <label class="form-label" for="validationCustom01">Product Name</label>
                <input name="product_name" type="text" class="form-control" id="validationCustom01" placeholder="Product name" required="" value="{{ $productlist['product_name']}}">
                @error('product_name')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label" for="validationCustom02">Description</label>
                <textarea name="product_des" required="" class="form-control" placeholder="Description" rows="5">{{ $productlist['product_des']}}</textarea>
                @error('cat_des')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror

              </div>
            </div>

            <div class="col-md-3">
              <div class="mb-3">
                <label class="form-label" for="validationCustom02">Regular Price (Rs.) *</label>
                <input type="number" name="regprice" class="form-control" id="regprice" value="{{ $productlist['regprice']}}">
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
                <input type="number" name="saleprice" required class="form-control" id="saleprice" value="{{ $productlist['saleprice']}}" >
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
                <input type="number" name="stock" class="form-control" id="stock" value="{{ $productlist['stock']}}">
              </div>
            </div>

            <div class="col-md-12">
              <div class="mb-3">
                <div class="w-100 d-flex file-drop-area flex-column justify-content-center">
                  <span class="choose-file-button">The higher the resolution, the better your upload will look on your gear.</span>
                  <span class="file-message">{{ $productlist['product_img']}}</span>
                  <input class="file-input" type="file" name="file">
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="mb-3">
                <label class="form-label" for="validationCustom02">Status</label>
                <select class="form-select" name="status">
                      <option value="1" {{ ($productlist['status']==1)?"selected":"" }}>Active</option>
                      <option value="0" {{ ($productlist['status']==0)?"selected":"" }}>In Active</option>
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
@push('js')
<script type="text/javascript">
  $('#parentcat').on('change', function() {
    var catid = this.value;
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
      url:"/admin/getsubcategory/",
      type:"GET",
      data:{id:catid},
      success:function(result){
        $('#subcategory').html(result);
        console.log(result);
      }
    });
  });
</script>

<script type="text/javascript">
  $('#validationChech').click(function(){
    if(this.checked == true){
      $('#stock').attr('disabled','disabled');
    }else{
      $('#stock').removeAttr('disabled');
    }
  });
</script>

<script type="text/javascript">
  $('#productsubmit').on('submit',function() {
    var saleprice = $('#saleprice').val();
    var regprice = $('#regprice').val();
    if(regprice > saleprice){
      alert('Warning!! Saleing Price Will be greater then Regural Price')
      event.preventDefault();
    }
  })
</script>
@endpush
