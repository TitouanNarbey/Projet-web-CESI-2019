@extends('layouts.app')@section('content')
<table class="table table-striped">
  <thead>
    <th>ID</th>
    <th>Show Name</th>
    <th>Series</th>
    <th>Lead Actor</th>
    <th>Action</th>
  </thead>
  <tbody>
    @foreach($shows as $show)
    <tr>
      <td>{{$show->id_users}}</td>
      <td>{{$show->id_events}}</td>
           <td><a href="{{action('ParticipateController@export')}}">Export</a></td>

    </tr>
    @endforeach
  </tbody>
</table>



@endsection