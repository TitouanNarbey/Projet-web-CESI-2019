@foreach($users as $value)

    {{-- This blade is used to fill the table in the useradmin.blade.php --}}

    <tr id="{{$value->id}}">
        <td>{{$value->id}}</td>
        <td>{{$value->last_name}}</td>
        <td>{{$value->first_name}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->created_at}}</td>
        <td>{{$value->campus}}</td>
        <td>{{$value->roles}}</td>
        <td><a href='#' class="btn btn-primary btn-xs edit_data" id="{{$value->id}}">Modifier</a></td>           
    </tr>
@endforeach