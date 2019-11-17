@extends('layouts.app')
@section('title',"Site Web du BDE Cesi Lyon")
@section('meta-description',"Bienvenue sur le site officiel du BDE Cesi Lyon !")
@section('content')
<!--Creation of the home area-->
<br>
<br>
<div class="container col-11">
	<div class="title-container-home">
		<p> Les événements</p>
	</div>
	<!--Import of the main event-->
	<div class="row mx-auto">
	@foreach($events as $event)
		<div class="col-xl-3 mt-5">
			<div class="card">
				<a href="events/{{$event->event->id}}" class="nounderline">
					<div class="headerCardEvent">
						<img src="{{$event->event->image->path}}" class="img-fluid sizeBanner" alt="{{$event->event->image->alt}}">
					</div>
					<div class="card-body"><br>
						<h3>{{$event->event->name}}</h3>
						<div class="eventCardDescription">{{$event->event->description}}  
						</div>
					</div>
					<div class="card-footer">
						<div class="text-right eventCardFooter">Date : {{$event->event->start_date}}</div>
					</div>
				</a>
			</div>
		</div>
	@endforeach
	</div>
	<div class="d-flex flex-row-reverse">
		<div class="p-2">
		</div>
		<a href="events" class="btn btn-primary text-white">Voir les autres événements ►</a>
	</div>
	<br>
	<div class="form-group">
		<div class="title-container-home"><p>Les coups de coeur du moment</p>
		</div>
		<!--Import of the main articles-->
		<div class="row mx-auto">
		@foreach($articles as $article)
			<div class="col-xl-3 mt-5">
				<div class="card">
					<a href="shop/{{$article->article->id}}" class="nounderline">
						<div class="headerCardEvent">
							<img src="{{$article->article->image->path}}" class="img-fluid sizeBanner" alt="{{$article->article->image->alt}}">
						</div>
						<div class="card-body mt-5">
							<br>
							<h3>{{$article->article->name}}</h3>
							<div class="eventCardDescription">{{$article->article->description}}</div>
						</div>
						<div class="card-footer">
							<div class="text-right eventCardFooter">
								<h2><span class="badge badge-dark ">{{$article->article->price}} €</span></h2>
								<h2><span class="badge badge-dark ">{{$article->article->stock}} en stock</span></h2>
							</div>
						</div>
					</a>
				</div>
			</div>
		@endforeach
		</div>
	</div>
	<div class="d-flex flex-row-reverse">
		<div class="p-2"> 
		</div>
		<a href="/shop" class="btn btn-primary text-white">Voir toute la boutique ►</a>
	</div>
</div>
@endsection 