@extends('layouts.app')

@section('content')


<div class="container col-11 text-center mt-2">

<h3> Comment signaler des éléments inappropriés ou insultants sur le site du BDE CESI Lyon (par ex. : nudité, incitation à la haine, menaces) ? </h3>


Nous sommes désolés d’apprendre que vous rencontrez un problème sur notre site et nous souhaitons vous aider. <br>Si vous souhaitez signaler un contenu qui va à l’encontre de l'image du CESI (par exemple : nudité, propos haineux, violence), remplissez le formulaire ci-dessous et nous nous efforcerons de régler votre problème le plus rapidement possible

 
</div>
        <div class="container contact-form mt-5 mb-5">
            
            <form method="post">
                <h3>Besoin de signaler quelque chose ?</h3>
               <div class="row">
                    <div class="col-md-6">
                        <select class="custom-select custom-select-lg mb-3">
  <option selected>Quel contenu souhaitez-vous signaler ?</option>
  <option value="1">Un événement</option>
  <option value="2">Un commentaire</option>
  <option value="3">Une photo</option>
  <option value="3">Un article</option>
</select>
                        
                        <div class="form-group">
                            <input type="text" name="txtPhone" class="form-control" placeholder="Lien du contenu inapproprié (ex : /events/3) *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnSubmit" class="btnContact" value="Envoyer" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea name="txtMsg" class="form-control reportSize" placeholder="Décrivez la raison de votre signalement *"></textarea>
                        </div>
                    </div>
                </div>
            </form>
</div>
@endsection
