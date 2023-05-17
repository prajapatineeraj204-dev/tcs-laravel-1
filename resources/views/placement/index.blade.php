@extends('layouts.web')

@section('content')
<section style="background: #fff;">
    <div class="container-fluid">
      <div class="job-header text-center job-card">
        <h2 class="p-title text-black">Apply for Placement </h2>
      </div>
    </div>
    <div class="container-fluid" style="background: rgb(244, 245, 249);">
         <div class="container job-card">
            <form action="http://narayan.live/vacancie" method="post">
                <input type="hidden" name="_token" value="jPoCTxKJN91sPKftChJP7VAQ2JuIO5PG2W44f5pM">
                <h3>Basic Details</h3>
                <div class="basic-details card-box">
                    <div class="form-group mb-3">
                        <label for="txtName">Full Name </label>
                        <input required="" type="text" name="name" class="form-control" id="txtName" placeholder="Eg. john ">
                    </div>
                    <div class="form-group mb-3">
                        <label for="txtemail">Email Id </label>
                        <input required="" type="text" name="email" class="form-control" id="txtEmail" placeholder="Eg. example@gmail.com">
                    </div>
                    <div class="form-group mb-3">
                        <label for="MobileNo">Mobile No.</label>
                        <input required="" type="number" name="MobileNo" class="form-control" id="MobileNo" placeholder="Eg. 987 XXX XXXX">
                    </div>
                    <div class="form-group mb-3 " style="text-align: right;">
                        <button type="button" class="btn btn-primary next-one">Next</button>
                    </div>
                </div> 

                <div class="mt-3 showSecondForm" style="display:none;">
                    <h3>Education Details</h3>
                    <div class="basic-details card-box">
                        <div class="row">
                            <div class="form-group mb-3">
                                <label for="txtschoolName">Matriculation School Name </label>
                                <input required="" type="text" name="txtschoolName" class="form-control" id="txtschoolName" placeholder="Eg. Xavier Public School">
                            </div>
                        </div>
                        <div class="row border-bottom">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="txtPercentage">Percentage( % ) </label>
                                    <input required="" type="text" name="txtPercentage" class="form-control" id="txtPercentage">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="txtMarksheet">Marksheet</label>
                                    <input required="" type="file" name="txtMarksheet" class="form-control" id="txtMarksheet">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-3">
                                <label for="txtCollegeName">Intermediate College Name </label>
                                <input required="" type="text" name="txtCollegeName" class="form-control" id="txtCollegeName" placeholder="Eg. Xavier Public School">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="txtClgPer">Percentage( % ) </label>
                                    <input required="" type="text" name="txtClgPer" class="form-control" id="txtClgPer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="txtIntMarsheet">Marksheet</label>
                                    <input required="" type="file" name="txtIntMarsheet" class="form-control" id="txtIntMarsheet">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 " style="text-align: right;">
                            <button type="button" class="btn btn-primary next-two">Next</button>
                        </div>
                    </div> 
                </div>
                <div class="mt-3 showThirdForm" style="display: none;">
                    <h3>Professional Eductaion Details</h3>
                    <div class="basic-details card-box">
                        <div class="row">
                            <div class="form-group mb-3">
                                <label for="txtUitName">University / College Name </label>
                                <input required="" type="text" name="txtUitName" class="form-control" id="txtUitName" placeholder="Eg. Xavier Public School">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="txtUitPer">Percentage( % ) </label>
                                    <input required="" type="text" name="txtUitPer" class="form-control" id="txtUitPer">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="txtUitMarsheet">Marksheet</label>
                                    <input required="" type="file" name="txtUitMarsheet" class="form-control" id="txtUitMarsheet">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="txtUitPer">Years of Experiences </label>
                                    <select class="form-control" name="experince">
                                        <option>--- Select Experience ---</option>
                                        <option value="Fresher">Fresher</option>
                                        <option value="Fresher">1 Years</option>
                                        <option value="Fresher">2 Years</option>
                                        <option value="Fresher">3 Years</option>
                                        <option value="Fresher">4 Years</option>
                                        <option value="Fresher">5 Years</option>
                                        <option value="Fresher">6 Years</option>
                                        <option value="Fresher">7 Years</option>
                                        <option value="Fresher">8 Years</option>
                                        <option value="Fresher">9 Years</option>
                                        <option value="Fresher">10 Years</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label for="txtResume">Resume</label>
                                    <input required="" type="file" name="txtResume" class="form-control" id="txtResume">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 " style="text-align: right;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div> 
                </div>
            </form>
        </div>   
    </div>
</section>
@endsection

@push('js')
<script>
    $(document).ready(function(){
      
      $(".next-one").click(function(){
        $(".showSecondForm").show();
      });
      $(".next-two").click(function(){
        $(".showThirdForm").show();
      });
      
    });
</script>
@endpush