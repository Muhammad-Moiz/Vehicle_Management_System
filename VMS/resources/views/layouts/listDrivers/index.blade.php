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
                            Driver List                     
                            </h2>
                    </div>    
                        <div class="body table-responsive">
                               <table class="table table-striped" id="driverList">
                               <thead>
                                    <tr> 
                                        <th id="pointer" onclick="sortTable(0)">#</th>
                                        <th>NAME</th>
                                        <th>Mobile NO</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th> CNIC</th>
                                        <th>License_No</th>
                                        <th>Car_No</th>
                                        <th>Rating</th>
                                        <th>City</th>
                                        <th>Age</th>
                                        <th>Gender</th>
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
  table = document.getElementById("driverList");
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
  table = document.getElementById("driverList");
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
$(document).ready(function(){

   $.ajax({

    type: 'get',
    url: 'api/listDrivers/GetAllDriver',
    dataType : 'json',
    success: function(data){
        var trHTML = '';
        $.each(data, function (i, item) {
            trHTML += '<tr><td>' + item.DID + '</td><td>' + item.Name + '</td><td>' + item.Mobile_No + '</td><td>' + item.Email + '</td><td>' + item.Password + '</td>  <td>' + item.CNIC + '</td>  <td>' + item.License_No + '</td>  <td>' + item.Car_No + '</td>  <td>' + item.Rating + '</td> <td>' + item.City + '</td> <td>' + item.Age + '</td>  <td>' + item.Gender + '</td> </tr>';
        });

        $('#driverList').append(trHTML);
    }
   });


});


</script> 

@endsection                                
