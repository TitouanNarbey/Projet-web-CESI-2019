@extends('layouts.app')

@section('content')





<div class="container col-11">

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

  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		  </div>
		
		<div class="text-center mt-5 tri"><h1>Quels types d'activités t'intéressent ?</h1> </div>
		  <!-- Choix des catégories -->
		

	<!-- A mettre dans un foreach une fois la BDD connectée -->


<div class="container col-11">
	<div class="row mx-auto">
		@foreach($events as $event)
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="events/{{$event->id}}" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{$event->image->path}}" class="img-fluid sizeBanner" alt="{{$event->image->alt}}">
	    			</div>
					<div class="card-body"><h3>{{$event->name}}</h3>
				  		<div class="eventCardDescription">{{$event->description}}
				  		</div>
					</div>
					<div class="card-footer">
						<div class="text-right eventCardFooter"> Création : {{$event->start_date}}</div>
					</div>
				</a></div>
		</div>

		@endforeach
	</div>
</div>


@endsection

