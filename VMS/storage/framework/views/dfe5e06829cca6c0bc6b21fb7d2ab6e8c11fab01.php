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

            <div style="margin: 10px;"></div>
            <h2>List All Promo Code Management</h2>
            <div class="card">
                <div class="body">   
                    <div class="body table-responsive">
                                <table id="PromoList" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Promo Code</th>
                                            <th>Title</th>
                                            <th>Discount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                    </div>
                </div>
            </div>

        <div class="row">
        <div style="margin: 15px;">
            <h2>Add A User</h2>
            <div class="card">
            <div class="body">   
            <form role="form" class="" method="post" id="reused_form">
                <div class="form-group row">
                    <label for="Name"  class="col-sm-2 col-form-label ">Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Name" id="Name" name="Name">
                    </div>
                </div> 
                <div class="form-group row">
                    <label for="FName"  class="col-sm-2 col-form-label ">Mobile No:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="First Name" id="FName" name="FName">
                    </div>
                    <label for="LName"  class="col-sm-2 col-form-label "> User ID:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Last Name" id="LName" name="LName">
                    </div>
                </div>                 

                <div class="form-group row">
                    <label for="Title"  class="col-sm-2 col-form-label "> Gender:</label>
                    <div class="col-sm-10">
                        <input name="group5" type="radio" id="radio_30" class="with-gap radio-col-red" checked="">
                        <label for="radio_30">Option 1</label>

                        <input name="group5" type="radio" id="radio_31" class="with-gap radio-col-red" checked="">
                        <label for="radio_31">Option 2</label>

                        <input name="group5" type="radio" id="radio_32" class="with-gap radio-col-red" checked="">
                        <label for="radio_32">Option 3</label>
                </div>
                </div>
                <div class="form-group row">
                    <label for="Title"  class="col-sm-2 col-form-label "> Email:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Write a Title" id="Title" name="Title">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="FName"  class="col-sm-2 col-form-label ">City:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="First Name" id="FName" name="FName">
                    </div>
                    <label for="LName"  class="col-sm-2 col-form-label "> Package No:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Last Name" id="LName" name="LName">
                    </div>
                </div>                 
                <div class="form-group row">
                    <label for="Discount"  class="col-sm-2 col-form-label ">CNIC:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="example 20" id="Discount" name="Discount">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Discount"  class="col-sm-2 col-form-label ">Password:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="example 20" id="Discount" name="Discount">
                    </div>
                </div>
                
                <div class="row button" >
                    <div class=" form-group ">
                        <button class="btn  btn-success" id=" ">submit </button>
                    </div>
                </div>
            </form>
            </div>
            </div>        
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>
<script type="text/javascript">
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
                url: 'api/dashboard/SubmitPromoCode',
                data : postModel,
                dataType : 'json',
                success : function(data){
                    location.reload();
                }
            });
        }

$(document).ready(function(){
   $.ajax({
    type: 'get',
    url: 'api/dashboard/GetAllPromoCode',
    dataType : 'json',
    success: function(data){
        var trHTML = '';
        $.each(data, function (i, item) {
            trHTML += '<tr><td>' + item.id + '</td><td>' + item.Code + '</td><td>' + item.Title + '</td><td>' + item.Discount + '</td></tr>';
        });

        $('#PromoList').append(trHTML);
    }
   });
});

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>