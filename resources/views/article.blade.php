<!-- Mieux gérer l'affichage des stocks
  Rendre fonctionnel le bouton ajout au panier -->


@extends('layouts.app')@section('content')
<!--Création de la zone de produit-->
<div class="product_area ">
  <div class="container col-11">
    <div class="row ">
      <div class="col-lg-6 mt-5">
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
      </div>
      <!-- Description de l'article -->
      <div class="col-lg-5 offset-lg-1 "><div class="info_article tri text-center mt-5"><h3>{{$article->name}}</h3>
        <h2><span class="badge badge-dark ">{{$article->price}} €</span></h2>
        <h2><span class="badge badge-dark ">{{$article->stock}}</span></h2>
        <div class="information mt-3 mb-3">
          <div>Catégorie : <div class="badge badge-dark ">{{$article->category->name}}</div>
        </div>
        <div>Disponibilité : 
          <div class="badge badge-success ">En stock</div>
        </div> 
        <!-- a voir l'affichage-->
      </div>
    <p>
      {{$article->description}}
    </p>
  <form class="formquantity" action="/shop/{{$id}}" method="POST">
    @csrf
        <label for="inputQuantity">Quantité : </label>
        <input type="number" min ="1" class="form-control" id="inputQuantity" placeholder="Quantité" name="inputQuantity" value="1">
        <button type="submit" class="btn btn-cesi btn-block">Ajouter au panier</button>
  </form>
  @if(session()->has('articleAdd'))

  @endif

  </div>
</div>

@endsection