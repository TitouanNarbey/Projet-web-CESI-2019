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
<div class="tri">
<div class="text-center mt-5"><h1>Quels types d'activités t'intéressent ?</h1>
  <!-- Choix des catégories -->
</div> 

	<!-- A mettre dans un foreach une fois la BDD connectée -->
	<div class="row mx-auto">
		  <div class="col-sm-3 mt-1 mb-1"> <button type="button" class="btn btn-cesi btn-block ">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"> <button type="button" class="btn btn-cesi btn-block ">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"> <button type="button" class="btn btn-cesi btn-block ">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>
		  </div>
		  <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>
		  </div>
	      <div class="col-sm-3 mt-1 mb-1"><button type="button" class="btn btn-cesi btn-block">Catégorie</button>		  
		  </div>
  </div>
  </div>

<div class="container col-11">
	<div class="row mx-auto">
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>
		<div class="col-xl-3 mt-5">
  				<div class="card"><a href="Hello" class="nounderline">
  					<div class="headerCardEvent">
	     			<img src="{{asset('assets/img/img_test.png')}}" class="img-fluid sizeBanner" alt="New York">
	    			</div>
					<div class="card-body"><h3>Titre de l'évent</h3>
				  		<div class="eventCardDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  		consequat. 
				  		</div>
					</div>
					<div class="card-footer">
	  					<div class="row mx-auto">
						  	<div class="col-sm-3 mx-2 "> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark ">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						  	<div class="col-sm-3 mx-2"> <div class="badge badge-dark">Plein Air</div> </div>
						</div>
						<div class="text-right eventCardFooter"> Création : 11/11/2011</div>
					</div>
				</a></div>

		</div>









	</div>
</div>


@endsection

