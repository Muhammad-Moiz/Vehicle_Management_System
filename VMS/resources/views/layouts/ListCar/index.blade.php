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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">


<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                            Car List
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <table class="table table-striped" id="fare">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Company Name</th>
                                        <th>Car Name</th>
                                        <th>Color</th>
                                        <th>Number Plate</th>
                                        <th>Model</th>
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
$(document).ready(function(){
   
   $.ajax({

    type: 'get',
    url: 'api/listCar/GetAllCar',
    dataType : 'json',
    success: function(data){
        var trHTML = '';
        $.each(data, function (i, item) {
            trHTML += '<tr><td>' + item.CID + '</td><td>' + item.Company + '</td><td>' + item.Name + '</td><td>' + item.Color + '</td>  <td>' + item.No_Plate + '</td>  <td>' + item.Model +'</td> </tr>';
        });

        $('#fare').append(trHTML);
    }
   });


});

</script> 

@endsection