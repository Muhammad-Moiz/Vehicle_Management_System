<?php $__env->startSection('title'); ?>
	Chart
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-css'); ?>
<style>
.col-form-label {
    margin-top :  8px;
    text-align: right;
} 
.button{
text-align: right;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div>
	<div class="row">
        <div style="margin: 10px;">
            <h2>Add A Package</h2>
            <div class="card">
            <div class="body">   
            <form role="form" class="" method="post" id="reused_form">
    			<div class="form-group row">
                    <label for="Name"  class="col-sm-2 col-form-label "> Package Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Package Name" id="Name" name="name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="type"  class="col-sm-2 col-form-label ">Package Type</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Package Type" id="type" name="type">
                    </div>
                </div>
                <div class="row button" >
                    <div class=" form-group">
                        <input type="button" value="Submit" class="btn btn-primary m-t-15 waves-effect" id="addpackage" onclick="SubmitPackage()"></input>
                    </div>
                </div>
            </form>
            </div>
    		</div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('extra-script'); ?>
<script type="text/javascript">

   function SubmitPackage(){
            var Name = $("#Name").val();
            var Type = $("#type").val();
            
            var postModel = {
                'name': Name,
                'type': Type
            };

            $.ajax({
                type: 'POST',
                url: 'api/package/SubmitPackage',
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