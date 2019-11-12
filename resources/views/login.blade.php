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
            <form class="form-container rounded" method="POST" action="/login">
                @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse mail</label>
                            <input type="email" class="form-control @error('inputEmail') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter email" name="inputEmail">
                                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Mot de passe</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="inputPassword">
                        </div>
                        <div class="form-group form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Me garder connecté.</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block text-dark">Se connecter</button>
                        <div class="parts">
                          Mot de passe oublié ?
                        </div>
                        <div class="parts">
                          <a href="{{action('UsersController@register')}}"> Pas encore inscrit ?</a>
                        </div>
                        {{-- <a ref ="/Projet-web-
                        CESI-2019/public/register"> Pas encore inscrit ?</a> --}}

                        @if (session('status'))
                          <div class="alert alert-success" role)="alert">
                              {{ session('status')}}
                          </div>
                        @endif

                        @error('inputEmail')
                        <div class="invalid-feedback">
                            The email is not correct
                        </div>
                        @enderror
            </form>
            {{-- form end --}}

          </div>
        </div>
      </div>
  </div>
@endsection