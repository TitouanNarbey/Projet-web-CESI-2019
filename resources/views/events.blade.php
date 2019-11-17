<!-- TODO

Faire fonctionner le bouton de tri
Réparer le carousel
Ajouter un bouton de signalement en récupérent $_SESSION et en regardant le rôle du connecté -->



@extends('layouts.app')@section('content')

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
		<!-- Affichage des différentes événements -->
			<div class="row mx-auto">
				@foreach($events as $event)
				<div class="col-xl-3 mt-5">
					<div class="card">
						<a href="events/{{$event->id}}" class="nounderline">
							<div class="headerCardEvent">
								<img src="{{$event->image->path}}" class="img-fluid sizeBanner" alt="{{$event->image->alt}}" witdh=100%>
							</div>
							<div class="card-body"><br><br>
								<h3>
									{{$event->
									name}}
								</h3>
								<div class="eventCardDescription">
									{{$event->
									description}}  
								</div>
							</div>
							<div class="card-footer">
								<div class="text-right eventCardFooter">
									 Création : {{$event->
									start_date}}
								</div>
						</div>
						</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection
