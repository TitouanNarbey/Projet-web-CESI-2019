<!-- Faire fonctionner les boutons -->
        
@extends('layouts.app')@section('content')
<div class="container col-11">
  <div class="row mx-auto ">
    <div class="col-xl-6 mt-5 text-center">
      <!-- Lien vers la gestion de la boutique -->
      <div class="card">
        <a href="admin/shop" class="nounderline">
          <div class="card-body text-center">
            <img src="asset('assets/img/img_shop.png')" class="img-fluid float-center " alt="Image">
          </div>
          <div class="card-footer">
            <div class="text-center eventCardFooter">
              <h1><span class="btn btn-cesi btn-block ">Boutique</span></h1>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-xl-6 mt-5 text-center">
      <!-- Lien vers la gestion des évenements -->
      <div class="card">
        <a href="admin/events" class="nounderline">
          <div class="card-body text-center">
            <img src="asset('assets/img/img_shop.png')" class="img-fluid float-center " alt="Image">
          </div>
          <div class="card-footer">
            <div class="text-center eventCardFooter">
              <h1><span class="btn btn-cesi btn-block ">Evenements</span></h1>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>


      
@endsection