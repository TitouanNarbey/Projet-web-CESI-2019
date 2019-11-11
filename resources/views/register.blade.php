@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-2 col-sm-12 col-xs-12"></div> 
    <div class="col-md-8 col-sm-12 col-xs-12">
      {{-- form start --}}

      {{-- title --}}
      <div class="col-md-12 col-sm-12 col-xs-12" align="center">
          <div class="title-container rounded">
            <h1>Inscription</h1>
          </div>
      </div>

      {{-- Name --}}
      <form class="form-container rounded">
          <div class="form-row">
            <div class="name-container">
              <div class="col-md-10 col-sm-12 col-xs-12">
                <label for="inputName">Nom</label>
                <input type="text" class="form-control" id="inputName" placeholder="Nom">
              </div>
            </div>

            {{-- Firstname --}}

            <div class="name-container">
              <div class="col-md-10 col-sm-12 col-xs-12">
                <label for="inputFirstname">Prénom</label>
                <input type="text" class="form-control" id="inputFirstname" placeholder="Prénom">
              </div>
            </div>
          </div>

          {{-- Zone --}}

          <div class="form-group">
          <div class="col-md-4 col-sm-6 col-xs-10">
              <label for="inputCenter">Centre</label>
              <select id="inputCenter" class="form-control">
                      <option selected>Choose...</option>
                      <option>Lyon</option>
                      <option>Nice</option>
                      <option>Aix-en-provence</option>
                      <option>Rouen</option>
                      <option>Toulouse</option>
                      <option>La Rochelle</option>
              </select>
          </div>
          </div>

          {{-- Mail --}}

          <div class="form-group">
              <div class="col-md-7 col-sm-9 col-xs-12">
                  <label for="inputEmail">Mail</label>
                  <input type="email" class="form-control" id="inputEmail" placeholder="exemple@mail.com">
              </div>
          </div>

          {{-- password --}}

          <div class="form-group">
            <div class="col-md-7 col-sm-9 col-xs-12">
              <label for="inputPassword">Mot de passe</label>
              <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
            </div>
          </div>

          <div class="form-group">
            <div class="col-md-7 col-sm-9 col-xs-12">
              <label for="inputState">Confirmation du mot de passe</label>
              <input type="password" id="confirmpassword" class="form-control" placeholder="Confirmation du mot de passe">
            </div>
          </div>

          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                J'accepte les mentions légales.
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-warning btn-block text-dark">S'inscrire</button>
        </form>
        {{-- form end --}}
      </div>
  </div>
</div>
@endsection 