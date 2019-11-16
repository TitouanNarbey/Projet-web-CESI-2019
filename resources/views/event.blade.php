@extends('layouts.app')@section('content')
<div class="container col-11">
	<h1>{{$event->name}}</h1>
	<div id="demo" class="carousel slide" data-ride="carousel">
		<!-- The slideshow -->
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{$event->image->path}}" alt="Photo de l'événement {{$event->id}}">
			</div>
			@foreach($event->Illustrateeventsmulti as $picture)
			    <div class="carousel-item">
				    <img src="{{$picture->image->path}}" alt="Photo de l'événement {{$event->id}}">
			    </div>
			@endforeach
		</div>
    </div>
</div>

<!-- Fiche de l'article -->


<div class="text-center mt-2 mb-2">
	<h2>Organisée par {{$event->creator->last_name}} {{$event->creator->first_name}} le {{$event->start_date}}</h2>
	<div class="description ">
		<h2>Description</h2>{{$event->description}}
		<h2>Quelques infos pratiques</h2>
		<div class="text-left ml-3">
			<i class="fas fa-euro-sign"> :</i>
			<span class="badge btn-cesi ">
				<?php if($event->price == 0){echo 'Gratuit';} else {echo $event->price.'€';} ?>
			</span>
			<br>
			<i class="fas fa-sync-alt"> :</i>
			<span class="badge btn-cesi ">
				<?php if($event->recurrent == 0){echo 'Unique';} else {echo'Recurrent';} ?>
			</span>
			<br>
        </div>
    </div>

@if(isset($like))
    @if($like == 1)
        <form method="post" action="/removeLike">
            @csrf
            <button type="submit" class="btn btn-danger"> {{$likes}} <i class="fas fa-heart"></i></button>
            <input type="hidden" name="event_id" value="{{$event->id}}" />
        </form>
    @else
        <form method="post" action="/giveLike">
            @csrf
            <button type="submit" class="btn btn-danger"> {{$likes}} <i class="far fa-heart"></i></button>
            <input type="hidden" name="event_id" value="{{$event->id}}" />
        </form>
    @endif
@else
    <button type="button" class="btn btn-danger"> {{$likes}} <i class="far fa-heart"></i> </button>
@endif

@if(Auth::user() !== null)
    @if(Auth::user()->id_roles == 2)

    <a href="/events/{{$event->id}}/export"><button class="btn btn-cesi">Exporter la liste des participantszz</button></a>
                    
                @endif
                @endif
        
    @if(isset($sub))
        @if($event->start_date > date("Y-m-d"))
            @if($sub == 1)
                <form class="example" action="/events/{{$event->id}}" method="post">
                    @csrf
                    <input type="hidden" name="inscription" value="-1" />
                    <input class ="btn btn-danger mt-1 mb-1" type="submit" value="Ne plus participer">
                </form>
                <br>
            @else
                <form class="example" action="/events/{{$event->id}}" method="post">
                    @csrf
                    <input type="hidden" name="inscription" value="1" />
                    <input class ="btn btn-success mt-1 mb-1" type="submit" value="Participer">
                </form>
            @endif
        @else
            @if($sub == 1)
                <h2>Tu as pris de belles photos pendant l'événement ?</h2>
                <h5>Envoie nous les !!!!</h5>
                <form action="/events/{{$event->id}}/imageUploadPost" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-5">
                        <div class="col-md-12 text-right">
                            <input type="file" name="image" class="form-control float-center">
                            <button type="submit" class="btn btn-cesi">Upload</button>
                        </div>
                    </div>
                </form>
            @endif
        @endif
    @endif

</div>
@if(isset($sub))
    <!-- Espace Commentaire -->
    <div class="media mt-5"><img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{Auth::user()->image->path}}" alt="Avatar {{Auth::user()->first_name}} {{Auth::user()->last_name}}">
        <div class="media-body">
            <h5 class="mt-0 font-weight-bold blue-text">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h5>
            <form class="example" action="/events/{{$event->id}}/postComment" method="post">
                @csrf
                <div class="form-group basic-textarea rounded-corners">
                    <textarea class="form-control z-depth-1" id="exampleFormControlTextarea345" rows="3" cols="132" placeholder="Write your comment..." name="text"></textarea>
                    <button type="submit" class="btn btn-cesi float-right mt-1 "> Ajouter un commentaire</button>
                </div>
            </form>
        </div>
    </div>
@endif

{{-- comments --}}
@foreach($event->posts->reverse() as $post)
    <div class="media mt-2"><img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="{{$post->user->image->path}}" alt="Avatar {{$post->user->first_name}} {{$post->user->last_name}}">
        <div class="media-body">
            <h5 class="mt-0 font-weight-bold blue-text">{{$post->user->first_name}} {{$post->user->last_name}}</h5>
        {{$post->text}}
        </div>
    </div>
@endforeach


@endsection