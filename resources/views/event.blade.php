@extends('layouts.app')

@section('content')
<div class="container col-11">
<h1>Titre de l'activité</h1>
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

<div class="text-center mt-2 mb-2"><h2>Organisée par le BDE le 28/08/12 </h2>

	<div class="description ">
		<h2>Description</h2>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

<h2>Quelques infos pratiques</h2>
<div class="text-left ml-3">
  <i class="fas fa-euro-sign"> :</i> <span class="badge btn-cesi ">15 €</span><br>
  <i class="fas fa-map-marker-alt"> :</i> <span class="badge btn-cesi ">Stade de Gerland</span><br>
  <i class="fas fa-clock"> :</i> <span class="badge btn-cesi ">18h</span><br>
<i class="fas fa-sync-alt"> :</i> <span class="badge btn-cesi ">Unique</span><br>
  </div>
  <h2>Tu as pris de belles photos pendant l'événement ?</h2>
  <h5>Envoie nous les !!!!</h5>
  <button type="button" class="btn btn-cesi  mt-1 mb-3 "><i class="fas fa-upload"></i> Ajouter une image</button>

</div>


</div>

  <div class="media mt-5">
  <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"
    alt="Avatar">
  <div class="media-body">
        <h5 class="mt-0 font-weight-bold blue-text">Danny Tatuum</h5>
        <div class="form-group basic-textarea rounded-corners">
          <textarea class="form-control z-depth-1" id="exampleFormControlTextarea345" rows="3" cols="132" placeholder="Write your comment..."></textarea>

           <button type="button" class="btn btn-cesi float-right mt-1 "> Ajouter un commentaire</button>
            </div>
</div>
  </div>

<div class="media mt-2">
  <img class="d-flex rounded-circle avatar z-depth-1-half mr-3" src="https://mdbootstrap.com/img/Photos/Avatars/avatar-5.jpg"
    alt="Avatar">
  <div class="media-body">
    <h5 class="mt-0 font-weight-bold blue-text">Anna Smith</h5>
    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
    fringilla. Donec lacinia congue felis in faucibus.

    
  </div>
</div>
<div class="media mt-2">
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


















@endsection







