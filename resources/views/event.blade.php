<!-- TODO

Réparer le carousel
Gérer l'espace commentaire en fonction du rôle (rajouter aussi un bouton signalement)
Ajouter la fonction ajouter une image et cacher le bouton en fonction du rôle
Ajouter la fonction télécharger une image et cacher le bouton en fonction du rôle (CESI) -->

@extends('layouts.app')@section('content')
<div class="container col-11">
  <h1>
    {{$event->
    name}}  
  </h1>
  <div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('assets/img/img_1.png')}}" alt="Los Angeles" >
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/img_3.png')}}" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="{{asset('assets/img/img_2.png')}}" alt="New York">
      </div>
    </div>
  </div>
  <!-- Fiche de l'article -->
  <div class="text-center mt-2 mb-2">
  <h2>
    Organisée par {{$event->
    creator->
    last_name}} {{$event->
    creator->
    first_name}} le {{$event->
    start_date}} 
  </h2>
  <div class="description ">
    <h2>Description</h2>
      {{$event->
    description}}
    <h2>Quelques infos pratiques</h2>
    <div class="text-left ml-3">
      <i class="fas fa-euro-sign"> :</i>
      <span class="badge btn-cesi ">
        <?php if($event->
        price == 0){echo 'Gratuit';} else {echo $event->
        price.'€';} ?>
      </span>
      <br>
      <!-- Mettre un if pour gratuit-->
      <i class="fas fa-sync-alt"> :</i>
      <span class="badge btn-cesi ">
        <?php if($event->
        recurrent == 0){echo 'Unique';} else {echo'Recurrent';} ?>
      </span>
      <br>
    </div>
    <h2>Tu as pris de belles photos pendant l'événement ?</h2>
<h5>
    Envoie nous les !!!!
</h5>
     
 
<button type="button" class="btn btn-cesi  mt-1 mb-3 "><i class="fas fa-upload"></i> Ajouter une image</button>
@if(isset($sub))

@if($sub == 1)
  <form class="example" action="/events/{{$event->id}}" method="post">
    @csrf
    <input type="hidden" name="inscription" value="-1" />
    <input class ="btn btn-danger mt-1 mb-1" type="submit" value="Ne plus participer">
  </form>
@else
  <form class="example" action="/events/{{$event->id}}" method="post">
    @csrf
    <input type="hidden" name="inscription" value="1" />
    <input class ="btn btn-success mt-1 mb-1" type="submit" value="Participer">
  </form>
@endif
@endif
</div>
</div>
<!-- Espace Commentaire -->
<div class="media mt-5"><img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{$user->image->path}}" alt="Avatar {{$user->first_name}} {{$user->last_name}}">
<div class="media-body"><h5 class="mt-0 font-weight-bold blue-text">
    {{$user->first_name}} {{$user->last_name}}
</h5>
<form class="example" action="/events/{{$event->id}}/postComment" method="post">
  @csrf
  <div class="form-group basic-textarea rounded-corners">
    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea345" rows="3" cols="132" placeholder="Write your comment..." name="text"></textarea>
    <button type="submit" class="btn btn-cesi float-right mt-1 "> Ajouter un commentaire</button>
  </div>
</form>
</div>
</div>
@foreach($event->posts->reverse() as $post)
  <div class="media mt-2"><img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{$post->user->image->path}}" alt="Avatar {{$post->user->first_name}} {{$post->user->last_name}}">
  <div class="media-body"><h5 class="mt-0 font-weight-bold blue-text">
      {{$post->user->first_name}} {{$post->user->last_name}}
  </h5>
  {{$post->text}}
  </div>
  </div>
@endforeach
</div>


@endsection