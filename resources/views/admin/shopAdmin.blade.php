@extends('layouts.app')
@section('title',"Boutique - Administration")
@section('meta-description',"Page d'administration de la boutique")
@section('content')
	<div class="container col-11">
            <!-- Panel for administrate articles -->
		<div class="description text-center">
			<h1>Administration de la boutique</h1>
			<!-- Add a new article -->
			<a href="/admin/new-article"><button class="btn btn-success"> Ajouter un article</button></a>
			<div class=" dropdown mt-2">
				<!-- Filters -->
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
		    </div>
	    </div>
		<!-- Show all articles -->
		<div class="row mx-auto">
			@foreach($shop as $article)
				<div class="col-xl-3 mt-5">
					<div class="card {{$article->category}}">
						<div class="headerCardEvent">
							<img src="{{$article->image->path}}" class="img-fluid sizeBanner" alt="{{$article->image->alt}}">
						</div>
						<div class="card-body"><br><br>
							<h3>{{$article->name}}</h3>
							<div class="eventCardDescription">{{$article->description}}
							</div>
						</div>
						<div class="card-footer">
							<div class="text-right eventCardFooter">
								<form action="/admin/deleteArticle" method="post">
									@csrf
									<input type="hidden" name="id_article" value="{{$article->id}}" />
									<!-- Delete article -->
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