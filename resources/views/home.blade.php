@extends('layouts.app')@section('content')
<br>
<br>
{{-- <div class="container mh-30 col-10">
	<!-- Carousel -->
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
</div> --}}
{{-- <br> --}}
<div class="container col-11">
	<div class="title-container-home"><p> Les événements</p></div>
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
							<div class="eventCardDescription">{{$event->event->description}}  </div>
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
		<div class="p-2"></div>
		<a href="events"><button class="btn btn-primary text-white" p-2>Voir les autres événements ►</button></a>
	</div>

	<br>

	<div class="form-group">
		<div class="title-container-home"><p>Les coups de coeur du moment</p></div>
			<div class="row mx-auto">
			@foreach($articles as $article)
				<div class="col-xl-3 mt-5">
					<div class="card">
						<a href="shop/{{$article->article->id}}" class="nounderline">
							<div class="headerCardEvent">
								<img src="{{$article->article->image->path}}" class="img-fluid sizeBanner" alt="{{$article->article->image->alt}}">
							</div>
							<div class="card-body mt-5"><br>
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
			<div class="p-2"> </div>
			<a href="/shop"><button class="btn btn-primary text-white" p-2>Voir toute la boutique ►</button></a>
		</div>
	</div>
</div>
@endsection 