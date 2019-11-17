@extends('layouts.app')@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-2 col-sm-12 col-xs-12"></div>
		<div class="col-md-8 col-sm-12 col-xs-12">
			{{-- title --}}
			<div class="col-md-12 col-sm-12 col-xs-12" align="center">
				<div class="title-container rounded">
					<h1>Ajouter un article</h1>
				</div>
			</div>
			<form class="form-container rounded" action="/register" method="POST">
				@csrf
				<br>
				<div class="form-row">
					<label>Titre de l'article</label>
					<input type="text" name="link" class="form-control mb-2" placeholder="ex : Tasse " value="" />
					<label>Description de l'article</label>
					<textarea name="text" class="form-control reportSize mb-2" placeholder="Décrivez votre article"></textarea>
					<label>Prix (en €)</label>
					<input type="number" name="link" class="form-control mb-2" value="" />
					<label>Stock</label>
					<input type="text" name="link" class="form-control mb-2" placeholder="Quantité" value="" />
					<label>Catégorie</label>
					{{-- <select id="inputCenter" class="form-control mb-2">
						@foreach($campuss as $campus)
							<option value="{{$campus->id}}">{{$campus->name}}</option>
						@endforeach
						<label>Ajouter une image</label>
					</select> --}}
					<form action="" method="POST" enctype="multipart/form-data">
						@csrf
						<input type="file" name="image" class="form-control float-center">
						<button type="submit" class="btn btn-cesi">Ajouter l'image</button>
					</form>
				</div>
				<br>
				<br>
				<button type="submit" class="btn btn-cesi btn-block text-white">Ajouter l'évenement</button>
			</form>
		{{-- form end --}}
		</div>
	</div>
</div>
@endsection
