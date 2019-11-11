@extends('layouts.app')

@section('content')


<div class="container col-11">
<div class="description text-center">
  <h1>Administration des Evénements</h1>
  <button class="btn btn-success "> Ajouter un évenement</button>

  
   <div class=" dropdown mt-2">
  <button onclick="showDropdownPrice()" class=" btn btn-cesi">Trier par Date</button>
  <div id="price" class="dropdown-content">
    <a href="#about"><button class="btn btn-cesi btn-block">Passés</button>
    <a href="#about"><button class="btn btn-cesi btn-block">A venir</button>

    </div>
  </div>
  
    </div>
  <div class="row mx-auto">

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
						<div class="text-right eventCardFooter"> <a href="#about"><button class="btn btn-cesi btn-block"> Modérer l'article</button>
						<a href="#about"><button class="btn btn-danger btn-block mt-2"> Supprimer l'article</button></div>
					</div>
				</a></div>
		</div>

		@endforeach
	</div>
</div>


<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center mt-5">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>





@endsection

