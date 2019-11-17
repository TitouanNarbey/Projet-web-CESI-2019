@extends('layouts.app')
@section('title',"Evénements - Administration")
@section('meta-description',"Page d'administration des différents événements")
@section('content')
    <div class="container col-11">
            <!-- Panel for administrate events -->
        <div class="description text-center">
            <!-- Add a new event -->
            <h1>Administration des Evénements</h1>
            <a href="/admin/new-event"><button class="btn btn-success ">Ajouter un évenement</button></a>
            <div class=" dropdown mt-2">
                <!-- Filters -->
                <button onclick="showDropdownDate()" class=" btn btn-cesi">Date</button>
                <div id="date" class="dropdown-content">
                    <form class="example" action="#">
                        @csrf
                        <input class ="btn btn-cesi btn-block mt-1" type="submit" name="old" value="Passés">
                    </form>
                    <form class="example" action="#">
                        @csrf
                        <input class ="btn btn-cesi btn-block mt-1" type="submit" name="soon" value="A venir">
                    </form>
                </div>
            </div>
        </div>
        <!-- Show all events -->
        <div class="row mx-auto">
            @foreach($events as $event)
                <div class="col-xl-3 mt-5">
                    <div class="card">
                        <a href="events/{{$event->id}}" class="nounderline">
                            <div class="headerCardEvent">
                                <img src="{{$event->image->path}}" class="img-fluid sizeBanner" alt="{{$event->image->alt}}">
                            </div>
                            <div class="card-body">
                                <br>
                                <br>
                                <h3>{{$event->name}}</h3>
                                <div class="eventCardDescription">
                                    {{$event->description}}
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right eventCardFooter">
                                    <!-- Moderate event -->
                                    <a href="events/{{$event->id}}"><button class="btn btn-cesi btn-block"> Modérer l'événement</button></a>
                                    <form action="/admin/deleteEvent" method="post" class="mt-1">
                                        @csrf
                                       <input type="hidden" name="id_event" value="{{$event->id}}" />
                                       <!-- Delete event -->
                                       <button type="submit" class="btn btn-danger btn-block mt-2">Supprimer l'événement</button>
                                   </form>
                               </div>
                           </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>           
@endsection


