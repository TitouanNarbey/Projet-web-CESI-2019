@extends('layouts.app')
@section('title',"Signalement")
@section('meta-description',"Page pour signaler des contenus jugés comme offensants ou displacés.")
@section('content')


<div class="container col-11 text-center mt-2">
    <h3> Comment signaler des éléments inappropriés ou insultants sur le site du BDE CESI Lyon (par ex. : nudité, incitation à la haine, menaces) ? </h3>
    <p>Nous sommes désolés d’apprendre que vous rencontrez un problème sur notre site et nous souhaitons vous aider.</p>
    <p>Si vous souhaitez signaler un contenu qui va à l’encontre de l'image du CESI (par exemple : nudité, propos haineux, violence), remplissez le formulaire ci-dessous et nous nous efforcerons de régler votre problème le plus rapidement possible.</p>
</div>

{{-- Form start --}}

<div class="container contact-form mt-5 mb-5">
    <form method="post">
        @csrf
        <h3>Besoin de signaler quelque chose ?</h3>
        <div class="row">
            <div class="col-md-6">
                <select class="custom-select custom-select-lg mb-3" name="type">
                    <option selected>Quel contenu souhaitez-vous signaler ?</option>
                    <option value="Un événement">Un événement</option>
                    <option value="Un commentaire">Un commentaire</option>
                    <option value="Une photo">Une photo</option>
                    <option value="Un article">Un article</option>
                </select>
                <div class="form-group">
                    <input type="text" name="link" class="form-control" placeholder="Lien du contenu inapproprié (ex : /events/3) *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnContact" value="Envoyer" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <textarea name="text" class="form-control reportSize" placeholder="Décrivez la raison de votre signalement *"></textarea>
                </div>
            </div>
        </div>
    </form>
{{-- Form end --}}
</div>
@endsection
