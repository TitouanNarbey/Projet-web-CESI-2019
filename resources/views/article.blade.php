@extends('layouts.app')

@section('content')

<div class="product_area ">
		<div class="container">
			<div class="row ">
				<div class="col-lg-6">
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
				<div class="col-lg-5 offset-lg-1 ">
					<div class="info_article">
						<h3>Nom de l'article</h3>
						<h2><div class="badge badge-dark ">15 €</div></h2>
						<div class="information mt-3 mb-3">
							<div>Catégorie : <div class="badge badge-dark ">Pull de qualité</div> </div>
							<div>Disponibilité : <div class="badge badge-success ">En stock</div> </div>
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<button type="button" class="btn btn-cesi btn-block">Ajouter au panier</button>
						</div>
				</div>

<div class="media mt-5">
  <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"
    alt="Avatar">
  <div class="media-body">
    <h5 class="mt-0 font-weight-bold blue-text">Anna Smith</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
    fringilla. Donec lacinia congue felis in faucibus.

    <div class="media mt-3 shadow-textarea">
      <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-12.jpg"
        alt="Generic placeholder image">
      <div class="media-body">
        <h5 class="mt-0 font-weight-bold blue-text">Danny Tatuum</h5>
        <div class="form-group basic-textarea rounded-corners">
          <textarea class="form-control z-depth-1" id="exampleFormControlTextarea345" rows="3" placeholder="Write your comment..."></textarea>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="media">
  <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-10.jpg"
    alt="Avatar">
  <div class="media-body">
    <h5 class="mt-0 font-weight-bold blue-text">Caroline Horwitz</h5>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis odit minima eaque dignissimos recusandae
    officiis commodi nulla est, tempore atque voluptas non quod maxime, iusto, debitis aliquid? Iure ipsum,
    itaque.
  </div>
</div>

				</div>
			</div>
		</div>
	</div>


@endsection