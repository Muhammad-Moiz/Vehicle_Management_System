@extends('index')

@section('title')
	Form
@endsection

@section('extra-css')
	
@endsection

@section('content')
	
    <div class="row">
        <div style="margin: 15px;">
            <h2>Add A Driver</h2>
            <div class="card">
                <div class="body">   
                    <form role="form" class="" method="post" id="reused_form">
                            <div class="form-group row">
                                <label for="Name"  class="col-sm-2 col-form-label ">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required="" placeholder="Enter Name" id="Name" name="Name">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="mobileNo"  class="col-sm-2 col-form-label ">Mobile No:</label>
                                <div class="col-sm-10">
                                    <input type="tel" class="form-control" placeholder="Enter Mobile Number " id="mobileNo" name="mobileNo">
                                </div>
                            </div>                 

                            <div class="form-group row">
                                <label for="Gender"  class="col-sm-2 col-form-label "> Gender:</label>
                                <div class="col-sm-10">
                                    <input name="Gender" type="radio" id="radio_30" class="with-gap radio-col-red" checked="" >
                                    <label for="radio_30">Male</label>

                                    <input name="Gender" type="radio" id="radio_31" class="with-gap radio-col-red" >
                                    <label for="radio_31">Female</label>

                                    <input name="Gender" type="radio" id="radio_32" class="with-gap radio-col-red" >
                                    <label for="radio_32">Other</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email"  class="col-sm-2 col-form-label "> Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" placeholder="Write an Email" id="Email" name="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="City"  class="col-sm-2 col-form-label ">City:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="City Name" id="City" name="City">
                                </div>
                                <label for="age"  class="col-sm-2 col-form-label "> Age:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" placeholder="Enter Age" id="age" name="age">
                                  
                                </div>
                            </div>                 
                            <div class="form-group row">
                                <label for="Rating"  class="col-sm-2 col-form-label ">Rating:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" placeholder="Rating" id="Rating" name="Rating">
                                </div>
                                <label for="Car_No"  class="col-sm-2 col-form-label "> Car No:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="Car No" id="Car_No" name="Car_No">
                                </div>
                            </div>                 
                            <div class="form-group row">
                                <label for="License"  class="col-sm-2 col-form-label ">License No:</label>
 						 	    <div class="col-sm-10">
                                  <input type="text" class="form-control" placeholder="License Number"
						 	       id="License" name="License">        
						 		</div>
						 	</div>

                            <div class="form-group row">
                                <label for="CNIC"  class="col-sm-2 col-form-label ">CNIC:</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" placeholder="CNIC Number" id="CNIC" name="CNIC">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Password"  class="col-sm-2 col-form-label ">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" placeholder="********" id="Password" name="password">
                                </div>
                            </div>
                            
                            <div class="row button" >
                                <div class=" form-group ">
                                  
                                  <input type="button" value="Submit" class="btn btn-primary m-t-15 waves-effect" id="adddriver" onclick="SubmitDriver()"></input>
                                
                                </div>
                            </div>
                    </form>
                </div>
            </div>        
        </div>    
    </div>




@endsection

@section('extra-script')

<script>
   function SubmitDriver(){
            var name = $("#Name").val();
            var mobileNo = $("#mobileNo").val();
            var email = $("#Email").val();
            var city = $("#City").val();
            var rating = $("#Rating").val();
            var CNIC = $("#CNIC").val();
            var password = $("#Password").val();
            var gender= $('input[name=Gender]:checked').val();
            var car_no = $("#Car_No").val();
            var license = $("#License").val();
            var age = $("#age").val();

 
            var postModel = {
                'name': name,
                'mobileNo': mobileNo,
                'email' : email,
                'city' : city,
                'rating' : rating,
                'cnic' : CNIC,
                'password' : password,
                'gender' : gender,
                'license' : license,
              	'age' : age,
                'car_no' : car_no   
            };

            $.ajax({
                type: 'POST',
                url: 'api/driver/SubmitDriver',
                data : postModel,
                dataType : 'json',
                success : function(data){
                    location.reload();
                }
            });
        }
</script>
@endsection