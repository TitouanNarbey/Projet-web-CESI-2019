<!-- TODO

Faire fonctionner les boutons et la barre de recherches
Faire une partie les 3 articles les plus vendus 
Gérer mieux l'affichage des stocks / prix 
Réparer le carousel-->


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
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="assets/img/img_1.png" alt="Los Angeles" >
      </div>
      <div class="carousel-item">
        <img src="assets/img/img_3.png" alt="Chicago">
      </div>
      <div class="carousel-item">
        <img src="assets/img/img_2.png" alt="New York">
      </div>
    </div>
  </div>
  <!--Section recherche -->
  <div class="description text-center mt-5">
    <h2>Retrouve tes goodies préférées aux couleurs du CESI et de ton BDE</h2>
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
      <div class=" dropdown ">
        <button onclick="showDropdownCategory()" class=" btn btn-cesi">Catégorie</button>
        <div id="category" class="dropdown-content">
          @foreach($categories as $category)
          <form class="example" action="#">
            @csrf
            <input class ="btn btn-cesi btn-block mt-1" type="submit" name="category" value="{{$category->name}}">
            <input type="hidden" name="id_category" value="{{$category->id}}" />
          </form>
            @endforeach
        </div>
      </div>
      <!-- Affichage des articles correspondants aux critères de recherches -->
      <div class="row mx-auto">
        @foreach($shop as $article)
        <div class="col-xl-3 mt-5">
          <div class="card {{$article->category}}">
            <a href="shop/{{$article->id}}" class="nounderline">
              <div class="headerCardEvent">
                <img src="{{$article->image->path}}" class="img-fluid sizeBanner" alt="{{$article->image->alt}}">
              </div>
              <div class="card-body">
                <br>
                <h3>
                  {{$article->
                  name}}
                </h3>
                <div class="eventCardDescription">
                  {{$article->
                  description}}
                </div>
              </div>
              <div class="card-footer">
                <div class="text-right eventCardFooter">
                  <h2><span class="badge badge-dark ">{{$article->price}} €</span></h2>
                  <h2><span class="badge badge-dark ">{{$article->stock}} en stock</span></h2>
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