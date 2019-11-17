@extends('layouts.app')
@section('title',"Goodies BDE Cesi Lyon")
@section('meta-description',"Des goodies personnalisés et disponibles au BDE Cesi Lyon")
@section('content')
<!--Creation of the product area-->
<div class="product_area ">
    <div class="container col-11 mb-5">
        <div class="row ">
            <div class="col-lg-6 mt-5">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Image -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{$article->image->path}}" alt="{{$article->image->alt}}" class="img-fluid sizeBanner">
                        </div>
                    </div>
                </div>
            </div>
        <!-- Description of and data on the item -->
            <div class="col-lg-5 offset-lg-1 ">
                <div class="info_article tri text-center mt-5"><h3>{{$article->name}}</h3>
                    <h2><span class="badge badge-dark ">{{$article->price}} €</span></h2>
                    <h2><span class="badge badge-dark ">{{$article->stock}}</span></h2>
                        <div class="information mt-3 mb-3">
                            <div>Catégorie : 
                                <div class="badge badge-dark ">{{$article->category->name}}</div>
                            </div>
                            <div>Disponibilité : 
                                <div class="badge badge-success ">En stock</div>
                            </div> 
                        </div>
                    <p>
                    {{$article->description}}
                    </p>
                    <!-- Choose of the quantity -->
                    <form class="formquantity" action="/shop/{{$id}}" method="POST">
                    @csrf
                        <label for="inputQuantity">Quantité : </label>
                        <input type="number" min ="1" class="form-control" id="inputQuantity" placeholder="Quantité" name="inputQuantity" value="1">
                        <button type="submit" class="btn btn-cesi btn-block">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
