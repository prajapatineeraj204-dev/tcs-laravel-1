@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-6">
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data" id="productsubmit">
            @csrf
            <div class="col-md-4 ">
                <div class="mb-3">
                    <label class="form-label" for="validationCustom01">Course Name</label>
                    <input name="product_name" type="text" class="form-control" id="validationCustom01" placeholder="Course Name" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label" for="validationCustom01">Course Description</label>
                    <input name="product_name" type="text" class="form-control" id="validationCustom01" placeholder="Course Description" required="">
                    @error('product_name')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                    <label class="form-label" for="validationCustom01">Playlist Name</label>
                    <input name="product_name" type="text" class="form-control" id="validationCustom01" placeholder="Playlist Name" required="">
                    @error('product_name')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                    <label class="form-label" for="validationCustom01">Scope</label>
                    <input name="product_name" type="text" class="form-control" id="validationCustom01" placeholder="Scope" required="">
                    @error('product_name')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                    <label class="form-label" for="validationCustom01">Career</label>
                    <input name="product_name" type="text" class="form-control" id="validationCustom01" placeholder="Career" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label" for="validationCustom01">Faculty Name</label>
                    <input name="product_name" type="text" class="form-control" id="validationCustom01" placeholder="Faculty Name" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label" for="validationCustom01">Duration </label>
                    <input name="product_name" type="number" class="form-control" id="validationCustom01" placeholder="Duration" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label" for="validationCustom01">Validity </label>
                    <input name="product_name" type="date" class="form-control" id="validationCustom01" placeholder="Validity" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label" for="validationCustom01">Pricing</label>
                    <input name="product_name" type="text" class="form-control" id="validationCustom01" placeholder="Pricing" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
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
                url: "/admin/getsubcategory/",
                type: "GET",
                data: {
                    id: catid
                },
                success: function(result) {
                    $('#subcategory').html(result);
                    console.log(result);
                }
            });
        });
    </script>

    <script type="text/javascript">
        $('#validationChech').click(function() {
            if (this.checked == true) {
                $('#stock').attr('disabled', 'disabled');
            } else {
                $('#stock').removeAttr('disabled');
            }
        });
    </script>

    <script type="text/javascript">
        $('#productsubmit').on('submit', function() {
            var saleprice = $('#saleprice').val();
            var regprice = $('#regprice').val();
            if (regprice > saleprice) {
                alert('Warning!! Saleing Price Will be greater then Regural Price');
                event.preventDefault();
            }
        })
    </script>
@endpush
