<?php $__env->startSection('title'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-css'); ?>
<style>
#pointer{
    cursor: pointer;
}
 #myInput {
  
    background-position: 10px 12px; /* Position the search icon */
    background-repeat: no-repeat; /* Do not repeat the icon image */
    width: 100%; /* Full-width */
    font-size: 16px; /* Increase font-size */
    padding: 12px 20px 12px 40px; /* Add some padding */
    border: 1px solid #ddd; /* Add a grey border */
    margin-bottom: 12px; /* Add some space below the input */
}
</style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for title..">


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="header">
                            <h2>
                            User List
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Update</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Delete</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                          <div class="body table-responsive">
                            <table class="table table-striped" id="PromoList">
                            <thead>
                                 <tr>
                                    <th >ID</th>
                                    <th >Promo Code</th>
                                    <th id="pointer" onclick="sortTable(2)">Title</th>
                                    <th>Discount</th>
                                 </tr>
                            </thead>
                            <tbody>
 
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>

</div>




<table id="PromoList_1" class="display" style="width:100%">
                    </table>     
<?php $__env->stopSection(); ?>

<?php $__env->startSection('extra-script'); ?>



<script type="text/javascript"></script>


 <script>

function sortTable(n) {

  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("PromoList");
  switching = true;
 
  dir = "asc"; 
 
  while (switching) {
 
    switching = false;
    rows = table.rows;
 
    for (i = 1; i < (rows.length - 1); i++) {
 
      shouldSwitch = false;
 
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      switchcount ++; 
    } else {
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}



 

function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("PromoList");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}




</script>

<script>
$(document).ready(function(){


   $.ajax({
    type: 'get',
    url: 'api/listpromocode/GetAllPromoCode',
    dataType : 'json',
    success: function(data){
        var trHTML = '';
        $.each(data, function (i, item) {
            trHTML += '<tr><td>' + item.Promo_No + '</td><td>' + item.Code + '</td><td>' + item.Title + '</td><td>' + item.Discount + '</td></tr>';
        });

        $('#PromoList').append(trHTML);
    }
   });
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>