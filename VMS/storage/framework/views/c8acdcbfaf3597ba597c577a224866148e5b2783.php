<?php $__env->startSection('title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div style="margin: 15px;">
            <h2 id="heading">Add A Driver</h2>
            <div class="card">
                <div class="body">   
                    <form role="form" class="" method="post" id="reused_form">
                            <div class="form-group row">
                                <label for="Name"  class="col-sm-2 col-form-label ">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" placeholder="Enter Name" id="Name" name="Name">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="mobileNo"  class="col-sm-2 col-form-label ">Mobile No:</label>
                                <div class="col-sm-10">
                                    <input type="tel"  required class="form-control" placeholder="Enter Mobile Number " id="mobileNo" name="mobileNo">
                                </div>
                            </div>                 

                            <div class="form-group row">
                                <label for="Gender"  class="col-sm-2 col-form-label "> Gender:</label>
                                <div class="col-sm-10">
                                    <input name="Gender" type="radio"  required id="radio_30" class="with-gap radio-col-red" checked="" >
                                    <label for="radio_30">Male</label>

                                    <input name="Gender" type="radio" id="radio_31" class="with-gap radio-col-red"  required>
                                    <label for="radio_31">Female</label>

                                    <input name="Gender"  required type="radio" id="radio_32" class="with-gap radio-col-red" >
                                    <label for="radio_32">Other</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Email"  class="col-sm-2 col-form-label "> Email:</label>
                                <div class="col-sm-10">
                                    <input type="emial" required class="form-control" placeholder="Write an Email" id="Email" name="Email" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="City"  class="col-sm-2 col-form-label ">City:</label>
                                <div class="col-sm-4">
                                    <input type="text"  required class="form-control" placeholder="City Name" id="City" name="City">
                                </div>
                                <label for="Package"  class="col-sm-2 col-form-label "> Package No:</label>
                                <div class="col-sm-4">
                                    <input type="number" class="form-control" placeholder="Package Number" id="Package" name="Packge">
                                </div>
                            </div>                 
                            <div class="form-group row">
                                <label for="CNIC"  class="col-sm-2 col-form-label ">CNIC:</label>
                                <div class="col-sm-10">
                                    <input type="text" required class="form-control" placeholder="CNIC Number" id="CNIC" name="CNIC">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Password"  class="col-sm-2 col-form-label ">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password"  required class="form-control" placeholder="********" id="Password" name="password">
                                </div>
                            </div>
                            
                            <div class="row button" >
                                <div class=" form-group ">
                                  
                                  <input type="button" value="Submit" class="btn btn-primary m-t-15 waves-effect" id="adduser" onclick="SubmitUsers()"></input>
                                
                                </div>
                            </div>
                    </form>
                </div>
            </div>        
        </div>    
    </div>






<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>
<script>
    $(document).ready(function(){
        var queryString = window.location.search;
        var queryParams = new URLSearchParams(queryString);

        if(queryParams.has('id') == true){
            var id = queryParams.get('id');
            $('#heading').text('Update a Driver');
        }
        
    });

   function SubmitUsers(){
        var queryString = window.location.search;
        var queryParams = new URLSearchParams(queryString);

        if(queryParams.has('id') == true){
            var id = queryParams.get('id');
            var name = $("#Name").val();
            var mobileNo = $("#mobileNo").val();
            var email = $("#Email").val();
            var city = $("#City").val();
            var package = $("#Package").val();
            var CNIC = $("#CNIC").val();
            var password = $("#Password").val();
            var gender= "";
            $("input[type='radio']:checked").each(function() {
                var idVal = $(this).attr("id");
                gender = $("label[for='"+idVal+"']").text();
            });
            
            var postModel = {
                'id' : id,
                'name': name,
                'mobileNo': mobileNo,
                'email' : email,
                'city' : city,
                'package' : package,
                'cnic' : CNIC,
                'password' : password,
                'gender' : gender   
            };

            $.ajax({
                type: 'POST',
                url: 'api/users/UpdateUser',
                data : postModel,
                dataType : 'json',
                success : function(data){
                    location.reload();
                }
            });
        }else{
            var name = $("#Name").val();
            var mobileNo = $("#mobileNo").val();
            var email = $("#Email").val();
            var city = $("#City").val();
            var package = $("#Package").val();
            var CNIC = $("#CNIC").val();
            var password = $("#Password").val();
            var gender= "";
            $("input[type='radio']:checked").each(function() {
                var idVal = $(this).attr("id");
                gender = $("label[for='"+idVal+"']").text();
            });
            
            var postModel = {
                'name': name,
                'mobileNo': mobileNo,
                'email' : email,
                'city' : city,
                'package' : package,
                'cnic' : CNIC,
                'password' : password,
                'gender' : gender   
            };

            $.ajax({
                type: 'POST',
                url: 'api/users/SubmitUsers ',
                data : postModel,
                dataType : 'json',
                success : function(data){
                    location.reload();
                }
            });
        }

            
        }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>