<?php $__env->startSection('title'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-css'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div style="margin: 10px;">
            <h2>Promo Code Management</h2>
                <div class="card">
                    <div class="body">   
                        <form role="form" class="" method="post" id="reused_form">
                            <div class="form-group row">
                                <label for="Title"  class="col-sm-2 col-form-label "> Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Write a Title" id="Title" name="Title">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Title"  class="col-sm-2 col-form-label "> Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="Enter Code" id="Code" name="Code">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Discount"  class="col-sm-2 col-form-label ">Discount Percentage</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="example 20" id="Discount" name="Discount">
                                </div>
                            </div>
                            <div class="row button" >
                                <div class=" form-group">
                                    <input type="button" value="Submit" class="btn btn-primary m-t-15 waves-effect" id="addpromocode" onclick="SubmitPromoCode()"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>      
      	
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>
  <script >
   function SubmitPromoCode(){
            var promocode = $("#Code").val();
            var title = $("#Title").val();
            var discount = $("#Discount").val();
            
            var postModel = {
                'code': promocode,
                'title': title,
                'discount' : discount
            };

            $.ajax({
                type: 'POST',
                url: 'api/promocode/SubmitPromoCode',
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