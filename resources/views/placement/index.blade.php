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
            <form action="{{ route('placementapply') }}" method="post" enctype="multipart/form-data">
                @csrf
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
                        <input required="" type="number" name="phone" class="form-control" id="MobileNo" placeholder="Eg. 987 XXX XXXX">
                    </div>
                    <div class="form-group mb-3 " style="text-align: right;">
                        <button type="button" class="btn btn-primary next-one">Next</button>
                    </div>
                </div> 

                <div class="mt-3 showSecondForm" style="display:none;">
                    <h3>Education Details</h3>
                    <div class="basic-details card-box">
                        <div name="add_college" id="add_college">
                            <div id="education_details">
                                <div class="row">
                                    <div class="form-group mb-3">
                                        <label for="txtCollegeName">School/College </label> 
                                        <input required="" type="text" name="education" class="form-control" id="txtCollegeName" placeholder="Eg. Xavier Public School">
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-md-3"> 
                                        <div class="form-group mb-3">
                                            <label for="txtIntMarsheet">Course</label>
                                            <input required="" type="text" name="course_name" class="form-control" id="txtIntMarsheet">
                                        </div> 
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="form-group mb-3">
                                            <label for="txtClgPer">Starting Date </label>
                                            <input required="" type="date" name="start_date" class="form-control" id="txtClgPer">
                                        </div> 
                                    </div> 
                                    <div class="col-md-3"> 
                                        <div class="form-group mb-3">
                                            <label for="txtIntMarsheet">End Date</label>
                                            <input required="" type="date" name="end_date" class="form-control" id="txtIntMarsheet">
                                        </div> 
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="form-group mb-3"> 
                                            <label for="txtIntMarsheet">Percentage (%)</label>
                                            <input required="" type="text" name="precentage" class="form-control" id="txtIntMarsheet">
                                        </div>  
                                    </div> 
                                </div>  
                            </div>             
                            <button type="button" name="add_edu" id="add_edu" class="btn btn-primary">Add More</button>
                        </div>
                        <div class="form-group mb-3 " style="text-align: right;">
                            <button type="button" class="btn btn-primary next-two">Next</button>
                        </div>
                    </div> 
                </div>
                <div class="mt-3 showThirdForm" style="display:none;" >
                    <h3>Experience Details</h3>
                    <div class="basic-details card-box">
                        <div name="add_Experience" id="add_Experience">
                            <div id="experience_details">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="txtCompanyName">Company Name </label> 
                                            <input required="" type="text" name="company_name" class="form-control" id="txtCompanyName" placeholder="Eg. wipro, infosys">
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <label for="txtDesignation">Designation </label> 
                                            <input required="" type="text" name="designation" class="form-control" id="txtDesignation" placeholder="Eg. Software Developer">
                                        </div> 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4"> 
                                        <div class="form-group mb-3">
                                            <label for="txtClgPer">Skill </label>
                                            <input required="" type="text" name="skills" class="form-control" id="txtClgPer" placeholder="ex:-Excel,php...">
                                        </div> 
                                    </div>
                                    <div class="col-md-4"> 
                                        <div class="form-group mb-3">
                                            <label for="txtClgPer">Starting Date </label>
                                            <input required="" type="date" name="skill_start" class="form-control" id="txtClgPer">
                                        </div> 
                                    </div> 
                                    <div class="col-md-4"> 
                                        <div class="form-group mb-3">
                                            <label for="txtIntMarsheet">End Date</label>
                                            <input required="" type="date" name="skill_end" class="form-control" id="txtIntMarsheet">
                                        </div> 
                                    </div>
                                </div>  
                                
                            </div>             
                            <button type="button" name="add_exp" id="add_exp" class="btn btn-primary">Add More</button>
                            <div class="row">
                                <div class="col-md-6"> 
                                    <div class="form-group mb-3"> 
                                        <label for="textComments">Cover Letter</label>
                                        <textarea class="form-control" placeholder="Write some comments" id="textComments" name="cover_latter"></textarea>
                                    </div>  
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group mb-3"> 
                                        <label for="fileResume">Upload resume</label>
                                        <input required="" type="file" name="file_path" class="form-control" id="fileResume">
                                    </div>  
                                </div> 
                            </div>
                             <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
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
      var i = 1;
    var length;
        //var addamount = 0;
    var addamount = 700;

    $("#add_edu").click(function(){
        
         addamount += 700;
         console.log('amount: ' + addamount);
       i++;
          $('#education_details').append('<div id="row'+i+'"><hr><div style="text-align:right"><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove">X</button></div><div class="row"><div class="form-group mb-3"><label for="txtCollegeName">School/College </label> <input required="" type="text" name="txtCollegeName" class="form-control" id="txtCollegeName" placeholder="Eg. Xavier Public School"></div> </div><div class="row"><div class="col-md-3"> <div class="form-group mb-3"><label for="txtClgPer">Course </label><input required="" type="text" name="txtClgPer" class="form-control" id="txtClgPer"></div> </div><div class="col-md-3"> <div class="form-group mb-3"><label for="txtClgPer">Starting Date </label><input required="" type="date" name="txtClgPer" class="form-control" id="txtClgPer"></div> </div> <div class="col-md-3"> <div class="form-group mb-3"><label for="txtIntMarsheet">End Date</label><input required="" type="date" name="txtIntMarsheet" class="form-control" id="txtIntMarsheet"></div> </div><div class="col-md-3"> <div class="form-group mb-3"> <label for="txtIntMarsheet">Percentage (%)</label><input required="" type="text" name="txtIntMarsheet" class="form-control" id="txtIntMarsheet"></div>  </div></div></div>');  
        });

      $(document).on('click', '.btn_remove', function(){  
        addamount -= 700;
        console.log('amount: ' + addamount);
        
      
          var button_id = $(this).attr("id");     
          $('#row'+button_id+'').remove();  
        });

        // second dynamic form for experience

        var j = 1;
        var length;
            //var addamount = 0;
        var addamount = 700;

        $("#add_exp").click(function(){
            
             addamount += 700;
             console.log('amount: ' + addamount);
           j++;
              $('#experience_details').append('<div id="row_exp'+j+'"><hr><div style="text-align:right"><button type="button" name="remove" id="'+j+'" class="btn btn-danger btn_remove">X</button></div><div class="row"><div class="col-md-6"><div class="form-group mb-3"><label for="txtCompanyName">Company Name </label> <input required="" type="text" name="txtCompanyName" class="form-control" id="txtCompanyName" placeholder="Eg. wipro, infosys"></div> </div><div class="col-md-6"><div class="form-group mb-3"><label for="txtDesignation">Designation </label> <input required="" type="text" name="txtDesignation" class="form-control" id="txtDesignation" placeholder="Eg. Software Developer"></div> </div></div> <div class="row"><div class="col-md-4"><div class="form-group mb-3"><label for="txtClgPer">Skill </label> <input required="" type="text" name="txtClgPer" class="form-control" id="txtClgPer" placeholder="ex:- Excel,php..."></div></div><div class="col-md-4"><div class="form-group mb-3"><label for="txtClgPer">Starting Date </label> <input required="" type="date" name="txtClgPer" class="form-control" id="txtClgPer"></div></div><div class="col-md-4"><div class="form-group mb-3"><label for="txtIntMarsheet">End Date</label><input required="" type="date" name="txtIntMarsheet" class="form-control" id="txtIntMarsheet"></div></div></div> </div>');  
            });

          $(document).on('click', '.btn_remove', function(){  
            addamount -= 700;
            console.log('amount: ' + addamount);
             
              var button_id = $(this).attr("id");     
              $('#row_exp'+button_id+'').remove();  
            });
    });
</script>
@endpush