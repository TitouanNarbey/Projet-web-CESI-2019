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
    <link href="{{ asset('assets/css/cssdeBen.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/CSSdeLoïs.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/navbar.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          {{-- Logo --}}
  <div class="navbar-brand navbar-brand-left"><a class="navbar-brand" href="\"><img src="{{asset('assets/img/logo.png')}} " alt="LogoCesiLyon" width="80"></a></div>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="\"><div class="colortext">Home</div> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="shop"><div class="colortext">Boutique</div></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="events"><div class="colortext">Evénements</div></a>
>>>>>>> cec6b58006d1664d92d98e2ab31cb7d74fb2ff82
          </li>

    </ul>
 
  </div>
  <div class="topnav">
      <div class="login-container">
        <form action="/login">
          <button class="btn btn-danger my-2 my-sm-0" href="register">S'inscrire</button>
          <button class="btn btn-outline-primary my-2 my-sm-0" href="login">Se connecter</button>
        </form>
      </div>
    </div>
    
</nav>

        @section('content')
        @show
        <footer>
          <br>
          <p>BDE Cesi Lyon - 19 Avenue Guy de Collongue - 04.72.18.89.89 </p>
          <p><a class="nav-link" href="legal"><div class="colortext2">Mentions légales et CGUs.</div></a></p>
          <br>
          <br>
          
        </footer>
    </body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f20d59caba.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ asset('assets/js/filter.js') }}"></script>

</html>
