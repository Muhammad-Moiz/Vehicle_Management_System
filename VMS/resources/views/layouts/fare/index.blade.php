@extends('index')

@section('title')
 fare list
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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for fare type..">


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Fare List
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped" id="fare">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th id="pointer" onclick="sortTable(1)" >Fare Type</th>
                                        <th>Promo No</th>
                                        <th>Package No</th>
                                        <th>Amount before PromoCode</th>
                                        <th>Amount after PromoCode</th>
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

<script type="text/javascript"></script>>


<script>

function sortTable(n) {

  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("fare");
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
  table = document.getElementById("fare");
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
    url: 'api/fare/GetAllFare',
    dataType : 'json',
    success: function(data){
        var trHTML = '';
        $.each(data, function (i, item) {
            trHTML += '<tr><td>' + item.Fare_No + '</td><td>' + item.Fare_Type + '</td><td>' + item.Promo_No + '</td><td>' + item.Package_No + '</td>  <td>' + item.Amount_before_promo_code + '</td>  <td>' + item.Amount_before_promo_code +'</td> </tr>';
        });

        $('#fare').append(trHTML);
    }
   });


});

</script> 

@endsection