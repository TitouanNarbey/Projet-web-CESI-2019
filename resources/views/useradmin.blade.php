@extends('layouts.app')


@section('content')
@include('updateuser')
<div class="container">

    {{-- Searching bar --}}
    <div class="row">
    {{-- <h3 align="center">Live search in laravel usin AJAX</h3>
    <br> --}}
    <div class="col-lg-12 col-md-8 col-md-offset-2">
    <div class="panel panel-default">
        
         <div class="panel heading">
            <br> 
            <button class="btn btn-ino btn-primary btn-xs pull-right" id="read-data">Charger les données.</button>
            <br>
        </div>
       
        <div class="panel-body">
           
                

                <table class="table table-striped table-bordered table-condensed">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>E-mail</th>
                            <th>Date de création</th>
                            <th>Campus</th>   
                            <th>Rôle</th>   
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
    $.get("{{ URL::to('/admin/useradmin/read-data') }}", function(data){

//Empty table is it was already full

        $('#user-info').empty().html(data);


//Put data in the table
        // $.each(data,function(i,value){
        //     var tr =$("<tr/>");
        //     tr.append($("<td>",{
        //         text : value.id
        //     })).append($("<td>",{
        //         text : value.last_name
        //     })).append($("<td>",{
        //         text : value.first_name
        //     })).append($("<td>",{
        //         text : value.email
        //     })).append($("<td>",{
        //         text : value.created_at
        //     })).append($("<td>",{
        //         text : value.campus
        //     })).append($("<td>",{
        //         html: "<a href=''>Voir l'utilisateur</a> <a href=''>Modifier</a> <a href=''>Supprimer</a>"
        //     }))
        //     $('#user-info').append(tr);
        // });
    })
})



//--------------------------------------edit User

$('body').delegate('#user-info .edit_data','click',function(e){
    var id = this.id;
    $.get("{{URL::to('/admin/useradmin/edit')}}",{id:id},function(data){
        $('#frm-update').find('#role_id').val(data.id_roles);
        $('#frm-update').find('#id').val(data.id);
        $('#user-update').modal('show');
        console.log(data);
        return id;
    });
})

//--------------------------------- update user

$('#frm-update').on('submit',function(e){
    
    e.preventDefault();
    var data = $(this).serialize();
    var url = $(this).attr('action');
    //console.log(data);
    
    $.post(url,data,function(data){
        console.log(data)
    });
})

</script>
@endsection 
