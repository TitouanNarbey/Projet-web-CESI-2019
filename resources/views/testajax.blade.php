@extends('layouts.app')
@section('title',"Titre de la page")
@section('meta-description',"Descritpion de la page")
@section('content')
<script>
            $(document).ready(function()
            {
                fetch_customer_data();
            })

            function fetch_customer_data()
            {   

                $.getJSON
                ({ url:'"{{('localhost:3000/api/users')}}"',function( data ) 
                {
                    var userss = [];
                    $.each( data, function( key, val ) 
                    {
                    items.push( "<li id='" + key + "'>" + val + "</li>" );
                    } 
                });
         
                    $( "<ul/>", {
                    "class": "my-new-list",
                    html: items.join( "" )
                    }).appendTo( "body" );
                });

                    success:function(userss)
                    {
                        $('tbody').html(userss.table_data);
                        //Will display the total number of records
                        $('#total_records').text(data.total_data);
                    }
                })
            }
            echo userss;
        </script>

//When page has bean loaded, the function fetch_customer_data is called
$(document).ready(function()
{
    fetch_customer_data();
})

// This function returns customer data if query argument is equal to 0
// If not, it returns a filter customer on the webpage
function fetch_customer_data(query = '')
{   
    //Ajax request to send an action method to the LiveSearchController

    $.getJSON
    ({ url:'"{{('localhost:3000/api/users')}}"',function( data ) 
    {
        var userss = [];
        $.each( data, function( key, val ) 
        {
        items.push( "<li id='" + key + "'>" + val + "</li>" );
        } 
    });

        $( "<ul/>", {
        "class": "my-new-list",
        html: items.join( "" )
        }).appendTo( "body" );
    });
        //method:'GET',
        //query:query,
        //Function called if request was successfull, to display the data in the table
        success:function(userss)
        {
            $('tbody').html(userss.table_data);
            //Will display the total number of records
            $('#total_records').text(data.total_data);
        }
    })
}
echo userss;
@endsection 