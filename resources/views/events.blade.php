@extends('layouts.app')
@section('title',"Les évenements du BDE Cesi Lyon")
@section('meta-description',"Toutes les informations des évenements du BDE Cesi Lyon")
@section('content')
<!--Creation of the events area-->
<br>
<br>
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
			<div class="carousel-item active text-center">
				<img src="{{asset('assets/img/img_1.png')}}" alt="Los Angeles">
			</div>
			<div class="carousel-item text-center">
				<img src="{{asset('assets/img/img_3.png')}}" alt="Chicago">
			</div>
			<div class="carousel-item text-center">
				<img src="{{asset('assets/img/img_2.png')}}" alt="New York">
			</div>
		</div>
	</div>
	<!--Search and sort the events-->
	<div class="description text-center mt-5">
    	<h2>Viens t'amuser le jeudi après-midi !!!</h2>
    	<form class="example" action="#">
    	@csrf
      		<input type="text" placeholder="Search.." name="search">
      		<button type="submit"><i class="fa fa-search"></i></button>
    	</form>
    	<div class=" dropdown mt-2">
      		<button onclick="showDropdownPrice()" class=" btn btn-cesi">Trier par prix</button>
      		<div id="price" class="dropdown-content">
          		<form class="example" action="#">
    			@csrf
      				<input class ="btn btn-cesi btn-block mt-1" type="submit" name="croissant" value="Croissant">
  				</form>
          		<form class="example" action="#">
    			@csrf
      				<input class ="btn btn-cesi btn-block mt-1" type="submit" name="decroissant" value="Décroissant">
  				</form>
			</div>
        	<button onclick="showDropdownFrequency()" class=" btn btn-cesi">Fréquence</button>
      		<div id="frequency" class="dropdown-content">
        		<form class="example" action="#">
    			@csrf
      				<input class ="btn btn-cesi btn-block mt-1" type="submit" name="recurrent" value="Récurrent">
     			</form>
          		<form class="example" action="#">
    			@csrf
      				<input class ="btn btn-cesi btn-block mt-1" type="submit" name="unique" value="Unique">
  				</form>
        	</div>
        	<button onclick="showDropdownDate()" class=" btn btn-cesi">Date</button>
      		<div id="date" class="dropdown-content">
        		<form class="example" action="#">
    			@csrf
      				<input class ="btn btn-cesi btn-block mt-1" type="submit" name="actual" value="Ce mois">
    			</form>
          		<form class="example" action="#">
    			@csrf
      				<input class ="btn btn-cesi btn-block mt-1" type="submit" name="soon" value="à venir">
  				</form>
        	</div>
 		</div>
 	</div>
	<!-- Display of the various events -->
	<div class="row mx-auto">
	@foreach($events as $event)
		<div class="col-xl-3 mt-5">
			<div class="card">
				<a href="events/{{$event->id}}" class="nounderline">
					<div class="headerCardEvent">
						<img src="{{$event->image->path}}" class="img-fluid sizeBanner" alt="{{$event->image->alt}}">
					</div>
					<div class="card-body"><br><br>
						<h3>{{$event->name}}</h3>
						<div class="eventCardDescription">{{$event->description}}
						</div>
					</div>
					<div class="card-footer">
						<div class="text-right eventCardFooter">Date : {{$event->start_date}}
						</div>
					</div>
				</a>
			</div>
		</div>
	@endforeach
	</div>
</div>
@endsection
