<?php $__env->startSection('title'); ?>
    Form
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-css'); ?>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <div class="row">
        <div style="margin: 15px;">
            <h2>Add A Car</h2>
            <div class="card">
                <div class="body">   
                    <form role="form" class="" method="post" id="reused_form">
                            <div class="form-group row">
                                <label for="CompanyName"  class="col-sm-2 col-form-label ">Company Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" required="" placeholder="Enter Company Name" id="CompanyName" name="CompanyName">
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="CarName"  class="col-sm-2 col-form-label ">Car Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Car Name " id="CarName" name="CarName">
                                </div>
                            </div>                 

                            <div class="form-group row">
                                <label for="ModleNo"  class="col-sm-2 col-form-label "> Modle No:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="eg: 2017" id="ModleNo" name="ModleNo">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="color"  class="col-sm-2 col-form-label ">Color:</label>
                                <div class="col-sm-4">
                                    <input type="color" class="form-control" placeholder="pick color" id="color" name="color">
                                </div>
                                <label for="NoPlate"  class="col-sm-2 col-form-label "> Number Plate:</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="NoPlate" placeholder="ABC_786" name="PlateNo">
                                  
                                </div>
                            </div>                 
                             
                            <div class="row button" >
                                <div class=" form-group ">
                                  
                                  <input type="button" value="Submit" class="btn btn-primary m-t-15 waves-effect" id="addCar" onclick="SubmitCar()"></input>
                                
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


   function SubmitCar(){
            var CompanyName = $("#CompanyName").val();
            var  CarName= $("#CarName").val();
            var NoPlate = $("#NoPlate").val();
            var color = $("#color").val();
            var ModleNo = $("#ModleNo").val();
            
 
            var postModel = {
                'CompanyName': CompanyName,
                'CarName': CarName,
                'ModleNo' : ModleNo,
                'NoPlate' : NoPlate,
                'color' : color
            };



            $.ajax({
                type: 'POST',
                url: 'api/car/SubmitCar',
                data : postModel,
                dataType : 'json',
                success : function(data){
                    location.reload();
                }
            });
        
    }

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>