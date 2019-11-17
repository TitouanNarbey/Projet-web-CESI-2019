@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-12 col-xs-12"></div>
      <div class="col-md-8 col-sm-12 col-xs-12">    
        {{-- title --}}      
        <div class="col-md-12 col-sm-12 col-xs-12" align="center">
          <div class="title-container rounded">
            <h1>Ajouter un nouvel évenement</h1>
          </div>
        </div>    
        <form class="form-container rounded" action="/register" method="POST">
          @csrf
          <br>
          <div class="form-row">
	          	<label>Titre de l'événement</label>
	            <input type="text" name="link" class="form-control mb-2" placeholder="ex : BattleDev " value="" />
				<label>Description de l'évenement</label>
	            <textarea name="text" class="form-control reportSize mb-2" placeholder="Décrivez votre évenement (contenu, lieu, conditions)"></textarea>
	            <label>Coût de l'inscription</label>
	            <input type="number" name="link" class="form-control mb-2" value="" />
	            <label>Date de début</label><input class="form-control mb-2" type="date" value="">
	            <label>Date de fin</label><input class="form-control mb-2" type="date" value="">
	  			<div class="form-check">
	    		<input type="checkbox" class="form-check-input mb-2">
	    		<label>Récurrent</label>
	  			</div>
	  			<form action="" method="POST" enctype="multipart/form-data">
	            @csrf               
	            <input type="file" name="image" class="form-control float-center mb-2">
	                <button type="submit" class="btn btn-cesi">Ajouter une image</button>
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

