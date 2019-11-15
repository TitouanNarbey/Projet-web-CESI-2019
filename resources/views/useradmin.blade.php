@extends('layouts.app')


@section('content')
<div class="container">

    {{-- Searching bar --}}
    <div class="row">
    {{-- <h3 align="center">Live search in laravel usin AJAX</h3>
    <br> --}}
    <div class="col-lg-12 col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        
         <div class="panel heading">
            Dashboard
            <br> 
            <button class="btn btn-ino btn-primary btn-xs pull-right" id="read-data">Charger les données.</button>
            <br>
        </div>
       
        <div class="panel-body">
            {{-- <div class="form-group">
                <input type="text" name="search" id="search" class="form-control" placeholder="search Customer Data">
            </div> --}}

            {{-- Creation of the table --}}
            {{-- <div class="table-reponsive">
                <h3 align="center">
                    Total Data : <span id="total_records"></span>
                </h3> --}}

                

                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>E-mail</th>
                            <th>Date de création</th>
                            <th>Campus</th>    
                            <th>Gérer l'utilisateur</th>   
                        </tr>
                    </thead>
                    <tbody id="user-info">

                    </tbody>
                </table>
                
        {{-- </div> --}}
    </div>
    </div>
</div>
</div>
</div>
@endsection

@section('script')
<script type="text/javascript">

//Fonction lancé si le bouton "read-data" est cliqué

$('#read-data').on('click', function(){
    $.get("{{ URL::to('useradmin/read-data') }}", function(data){

//Empty table is she was already full
        $('#user-info').empty();
//Put data in the table
        $.each(data,function(i,value){
            var tr =$("<tr/>");
            tr.append($("<td>",{
                text : value.id
            })).append($("<td>",{
                text : value.last_name
            })).append($("<td>",{
                text : value.first_name
            })).append($("<td>",{
                text : value.email
            })).append($("<td>",{
                text : value.created_at
            })).append($("<td>",{
                text : value.campus
            })).append($("<td>",{
                html: "<a href=''>Voir l'utilisateur</a> <a href=''>Modifier</a> <a href=''>Supprimer</a>"
            }))
            $('#user-info').append(tr);
        });
    })
})

// $(document).ready (function(){
//     function fetch_customer_data(query = '')
// });



</script>
@endsection 
