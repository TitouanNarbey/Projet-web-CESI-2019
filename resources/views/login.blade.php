@extends('layouts.app')

@section('content')
<div class="bg">
  <div class="container">
        <div class="row">
          {{-- Demander pourquoi la ligne en bas fait ça --}}
          <div class="col-md-4 col-sm-12 col-xs-12"></div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            {{-- form start --}}
            {{-- Title --}}
            <div class="col-md-12 col-sm-12 col-xs-12" align="center">
                          <div class="title-container rounded">
                            <h1>Connexion</h1>
                          </div>
            </div>
                      {{-- End of title --}}
            <form class="form-container rounded">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Me garder connecté.</label>
                        </div>
                        <button type="submit" class="btn btn-warning btn-block text-dark">Se connecter</button>
                        <h3>Mot de passe oublié ?</h3>
                        <h3>Pas encore inscrit ?</h3>
            </form>
            {{-- form end --}}

          </div>
        </div>
      </div>
  </div>
@endsection