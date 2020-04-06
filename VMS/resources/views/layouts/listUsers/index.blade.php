@extends('index')

@section('title')
user list
@endsection

@section('extra-css')
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
@endsection

@section('content')
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">


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
                            <table class="table table-striped" id="userList">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th id="pointer" onclick="sortTable(0)">NAME</th>
                                        <th>Mobile NO</th>
                                        <th>Email</th>
                                        <th>CNIC</th>
                                        <th>Package No</th>
                                        <th>City</th>
                                        <th>Gender</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                 <body>
                    
                                 </body>   
                            </table>
                        </div>
                    </div>
                </div>

</div>


@endsection

@section('extra-script')

<script type="text/javascript"></script>

<script>

function sortTable(n) {

  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("userList");
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
  table = document.getElementById("userList");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
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

   
function DeleteUser(e){
$.ajax({
type: 'get',
dataType : 'json',
url : 'api/listUsers/DeleteUser/'+e.parentElement.parentElement.children[0].innerHTML,
success: function (){
  alert('successfully deleted');
  location.reload();
}

});

};

function UpdateUser(e){
  location.href = "{{route('users')}}?id="+e.parentElement.parentElement.children[0].innerHTML;
}


$(document).ready(function(){

   $.ajax({

    type: 'get',
    url: 'api/listUsers/GetAllUsers',
    dataType : 'json',
    success: function(data){
        var trHTML = '';
        $.each(data, function (i, item) {
            trHTML += '<tr><td>' + item.UID + '</td><td>' + item.Name + '</td><td>' + item.Mobile_No + '</td><td>' + item.Email + '</td>  <td>' + item.CNIC + '</td>  <td>' + item.Package_No + '</td>  <td>' + item.City + '</td>  <td>' + item.Gender + '</td> <td><input style="margin:0px" type="button" value="delete" class="btn btn-primary m-t-15 waves-effect" onclick="DeleteUser(this)"></input> <input type="button" style="margin:0px" value="update" class="btn btn-primary m-t-15 waves-effect" onclick="UpdateUser(this)"></input> </td> </tr>';
        });

        $('#userList').append(trHTML);
    }
   });


});


</script> 

@endsection