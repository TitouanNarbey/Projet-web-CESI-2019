<!-- Faire fonctionner tous les boutons présents -->


@extends('layouts.app')@section('content')
<div class="container col-11">
  <!-- Fonctions de modération -->
  <div class="description text-center">
    <h1>Administration de la boutique</h1>
    <button class="btn btn-success "> Ajouter un article</button>
    <div class=" dropdown mt-2">
      <button onclick="showDropdownPrice()" class=" btn btn-cesi">Trier par prix</button>
      <div id="price" class="dropdown-content">
        <a href="#about">
          <button class="btn btn-cesi btn-block">Croissant</button>
          <a href="#about"><button class="btn btn-cesi btn-block">Décroissant</button></div>
        </div>
        <div class=" dropdown ">
          <button onclick="showDropdownCategory()" class=" btn btn-cesi">Catégorie</button>
          <div id="category" class="dropdown-content">
            @foreach($shop as $article)
            <a href="#about"><button class="btn btn-cesi btn-block"> {{$article->category->name}}</button>  @endforeach</div>
          </div>
        </div>
        <!-- Affichage de la liste des articles -->
        <div class="row mx-auto">
            @foreach($shop as $article)
          <div class="col-xl-3 mt-5">
            <div class="card {{$article->category}}">
              <a href="shop/{{$article->id}}" class="nounderline">
                <div class="headerCardEvent">
                  <img src="{{$article->image->path}}" class="img-fluid sizeBanner" alt="{{$article->image->alt}}">
                </div>
                <div class="card-body">
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
                    <a href="#about"><button class="btn btn-danger btn-block"> Supprimer l'article</button></div>
                  </div>
                </a>
              </div>
            </div>
            @endforeach
          </div>
          <!-- Pagination -->
          <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center mt-5">
              <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
          </nav>
        </div>
@endsection