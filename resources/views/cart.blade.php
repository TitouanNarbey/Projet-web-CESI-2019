@extends('layouts.app')
@section('title',"Ton Panier")
@section('meta-description',"Ton Panier remplit de Goodies du BDE Cesi Lyon")
@section('content')
<!--Creation of the cart area-->
<div class="container mb-4">
	<div class="row">
		<div class="col-12">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col"></th>
							<th scope="col">
								Produit
							</th>
							<th scope="col" class="text-center">
								Quantité
							</th>
							<th scope="col" class="text-right">
								Prix
							</th>
							<th></th>
						</tr>
					</thead>
					<!--Import of sales products-->
					<tbody>
						@foreach($cartData->
						comanded as $comand)
						<tr>
							<td>
								<img class="img-fluid sizeBanner" src="{{$comand->article->image->path}}" alt="{{$comand->article->image->alt}}" />
							</td>
							<td>
								{{$comand->
								article->
								name}}
							</td>
							<td>
								<!--Possibility to change the quantity-->
								<form class="comandQuantity" action="/changequantity" method="post">
									@csrf
									<input class="form-control" type="number" min="1" onchange='this.form.submit()' name="quantityChanger" value="{{$comand->quantity}}" />
									<input type="hidden" name="id_order" value="{{$comand->order->id}}" />
									<input type="hidden" name="id_article" value="{{$comand->article->id}}" />
								</form>
							</td>
							<td class="text-right">
								{{$comand->
								article->
								price * $comand->
								quantity}} €
							</td>
							<!--Possibility to delete the order-->
							<td class="text-right">
								<form class="deleteComand" action="/deleteComande" method="post">
									@csrf
									<button class="btn btn-sm btn-danger" type="submit">
										<i class="fa fa-trash"></i>
									</button>
									<input type="hidden" name="id_order" value="{{$comand->order->id}}" />
									<input type="hidden" name="id_article" value="{{$comand->article->id}}" />
								
								</form>
						</tr>
						@endforeach
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<strong>Total</strong>
							</td>
							<td class="text-right">
								<strong>{{$total}} €</strong>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<!--Button to pay or continue the shopping-->
		<div class="col mb-2">
			<div class="row">
				<div class="col-sm-12  col-md-6">
					<a href="shop" target="_self" class="btn btn-block btn-light">Continuer la commande</a>
				</div>
				<div class="col-sm-12 col-md-6 text-right">
					<a href="checkout" target="_self" class="btn btn-lg btn-block btn-success text-uppercase">paiement</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection