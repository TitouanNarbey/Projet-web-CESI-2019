




//Fonction lancé si le bouton "read-data" est cliqué

$('#read-data').on('click', function(){
    $.get("{{ URL::to('/admin/useradmin/read-data') }}", function(data){

//Empty table is it was already full

        $('#user-info').empty().html(data);
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
    $.post(url,data,function(data){
        console.log(data)
    });
})
