@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-6">
        @if(session()->get('success'))
            <div class="alert alert-primary text-white" role="alert">
             {{session()->get('success')}}
            </div>
        @endif
        <form action="{{ url('admin/upload_course') }}" method="post" enctype="multipart/form-data" multiple>
            @csrf
            <div class="col-md-4 ">
                <div class="mb-3">
                    <label class="form-label">Course Name</label>
                    <input name="course_name" type="text" class="form-control"  placeholder="Course Name" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label">Course Description</label>
                    <textarea name="course_desc" placeholder="Course Description" class="form-control"></textarea>
                    @error('product_name')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                    <label class="form-label">Playlist Name</label>
                    <input name="playlist_name[]" type="text" class="form-control"  placeholder="Playlist Name" required="">
                    <div class="plalistname"></div>
                    <div onclick="playlist()" class="btn btn-danger">+</div><br>
                    @error('product_name')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                    <label class="form-label">Scope</label>
                    <input name="scope" type="text" class="form-control"  placeholder="Scope" required="">
                    @error('product_name')
                    <span class="invalid-feedback" role="alert">
                        {{-- <strong>{{ $message }}</strong> --}}
                    </span>
                    @enderror
                    <label class="form-label">Career</label>
                    <input name="career" type="text" class="form-control"  placeholder="Career" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label">Faculty Name</label>
                    <input name="faculty_name" type="text" class="form-control"  placeholder="Faculty Name" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label">Duration </label>
                    <input name="duration" type="number" class="form-control"  placeholder="Duration" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label">Validity </label>
                    <input name="validity" type="date" class="form-control"  placeholder="Validity" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                    <label class="form-label">Pricing</label>
                    <input name="pricing" type="number" class="form-control"  placeholder="Pricing" required="">
                    @error('product_name')
                        <span class="invalid-feedback" role="alert">
                            {{-- <strong>{{ $message }}</strong> --}}
                        </span>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
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
    <script type="text/javascript">
        function playlist(){
            var html='<input name="playlist_name[]" type="text" class="form-control"  placeholder="Playlist Name" >';
            $('.plalistname').append(html);
        }
    </script>
@endpush
