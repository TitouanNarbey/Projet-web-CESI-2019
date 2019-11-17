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
  </form>  @endforeach</div>
          </div>
        </div>
    </div>
	<!-- Affichage de la liste des articles -->
	<div class="row mx-auto">
		@foreach($shop as $article)
		<div class="col-xl-3 mt-5">
			<div class="card {{$article->category}}">
				<div class="headerCardEvent">
					<img src="{{$article->image->path}}" class="img-fluid sizeBanner" alt="{{$article->image->alt}}">
				</div>
				<div class="card-body">
					<h3>{{$article->name}}</h3>
					<div class="eventCardDescription">{{$article->description}}</div>
				</div>
				<div class="card-footer">
					<div class="text-right eventCardFooter">
						<form action="/admin/deleteArticle" method="post">
							@csrf
							<input type="hidden" name="id_article" value="{{$article->id}}" />
							<button type="submit" class="btn btn-danger btn-block">Supprimer l'article</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection