<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BDE CESI Lyon - @yield('title')</title>
    <link rel="shortcut icon" href="{{asset('assets/img/logo.png')}}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-4.3.1-dist/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/cssdenoan.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/profile.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/cssdeBen.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/CSSdeLoïs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
  </head>
    <body>
        <nav class="navbar navbar-expand-lg">
          {{-- Logo --}}
  <div class="navbar-brand navbar-brand-left"><a class="navbar-brand" href="\"><img src="{{asset('assets/img/logo.png')}}" class="img-responsive" alt="LogoCesiLyon" width="75"></a></div>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/"><div class="colortext"><i class="fa fa-fw fa-home"></i> Accueil</div> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="/shop"><div class="colortext">Boutique</div></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="/events"><div class="colortext">Evénements</div></a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="/cart"><div class="colortext">Panier</div></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="/checkout"><div class="colortext">Checkout</div></a>
              </li>

    </ul>
  </div>
@if(Auth::user() === null)
<div class="topnav">
    <div class="login-container">
      <a href="/register"><button class="btn btn-danger my-2 my-sm-0">S'inscrire</button></a>
      <a href="/login"><button class="btn btn-outline-primary my-2 my-sm-0">Se connecter</button></a>
    </div>
</div>
@else
  
@endif

</nav>

  @if(session()->has('messageRed'))
  <div class="alert alert-danger text-center" role="alert">
      {{session()->get('messageRed')}}
  </div>
  @endif
  @if(session()->has('messageGreen'))
  <div class="alert alert-success text-center" role="alert">
      {{session()->get('messageGreen')}}
  </div>
  @endif
  @if(session()->has('messageCesi'))
  <div class="alert alert-success btn-cesi text-center" role="alert">
      {{session()->get('messageCesi')}}
  </div>
  @endif

        @section('content')
        @show

<!-- Footer -->
<footer class="page-footer font-small pt-4" id="sticky-footer" >

    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-uppercase">BDE Cesi Lyon</h5>
          <p>19 Avenue Guy de Collongue - 04.72.18.89.89
              
          </p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Liens</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="/">Accueil</a>
            </li>
            <li>
              <a href="shop">La boutique</a>
            </li>
            <li>
              <a href="events">Les événements</a>
            </li>
            <li>
              <a href="legal">Mentions légales et CGUs</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase"><br></h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="https://www.cesi.fr/">Cesi.fr</a>
            </li>

          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        • 
        <a href="https://www.facebook.com/BDECesiLyon/"><i class="fab fa-facebook-f"></i></a>      •    
        <a href="https://twitter.com/Bdecesilyon"><i class="fab fa-twitter"></i></a>  • 
        <a href="https://discord.gg/GeMteh7"><i class="fab fa-discord"></i></a>   • 
        <br>
        <br>
      © 2019 Copyright:
      <a href="/"> Bureau Des Etudiants du Cesi Lyon</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
  
    </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f20d59caba.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('assets/js/filter.js') }}"></script>

</html>
