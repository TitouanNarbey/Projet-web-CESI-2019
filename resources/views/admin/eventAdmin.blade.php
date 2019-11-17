
@extends('layouts.app')
@section('title',"$event->name")
@section('meta-description',"Page d'administration de $event->name")
@section('content')

    <div class="container col-11">
        <h1>{{$event->name}}</h1>
    <!-- Panel for administrate an event -->
    <div class="text-center mt-2 mb-2">
        <h2>Organisée par {{$event->creator->last_name}} {{$event->creator->first_name}} le {{$event->start_date}}</h2>
        <div class="description">
            <h2>Description</h2>
            {{$event->description}}
            <h2>Quelques infos pratiques</h2>
            <div class="text-left ml-3">
                <i class="fas fa-euro-sign"> :</i>
                <span class="badge btn-cesi ">
                    <!-- Check if the article is free -->
                    <?php 
                        if($event->price == 0)
                            {echo 'Gratuit';} 
                        else {echo $event->price.'€';}
                    ?>
                </span>
                <br>
               <i class="fas fa-sync-alt"> :</i>
                <span class="badge btn-cesi ">
                    <!-- Check if the article is recurent -->
                    <?php 
                        if($event->recurrent == 0)
                            {echo 'Unique';} 
                        else {echo'Recurrent';} 
                    ?>
                </span>
                <br>
            </div>
            <!-- Download a list of event participate -->
            <h2>Télécharger la liste des participants</h2>
            <a href="/events/{{$event->id}}/export"><button type="button" class="btn btn-cesi  mt-1 mb-3 "><i class="fas fa-download"></i> Récupérer la liste </button></a>
        </div>
    </div>
    <!--Comments-->
    @foreach($event->posts->sortByDesc('id') as $post)
        <div class="media mt-2">
            <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{$post->user->image->path}}" alt="Avatar {{$post->user->first_name}} {{$post->user->last_name}}">
            <div class="media-body">
                <h5 class="mt-0 font-weight-bold blue-text">{{$post->user->first_name}} {{$post->user->last_name}}</h5>
                {{$post->text}}
            </div>
            <form action="/admin/deleteComment" method="post">
                @csrf
                <input type="hidden" name="id_post" value="{{$post->id}}"/>
                <button type="submit" class="btn btn-danger float-right mt-1 "><i class="fa fa-trash"></i></button>
            </form>
      </div>
    @endforeach

@endsection

