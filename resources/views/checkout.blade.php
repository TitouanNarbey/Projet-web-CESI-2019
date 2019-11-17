@extends('layouts.app')@section('content')
<div class="container px-4 py-5 mx-auto">
	<table class="table table-striped">
		<thead class="text-left">
			<tr>
				<th scope="col">Produit</th>
				<th scope="col">Quantité</th>
				<th scope="col">Prix</th>
			</tr>
		</thead>
		<tbody>
		@foreach($cartData->comanded as $comand)
			<tr>
				<td>{{$comand->article->name}}</td>
				<td>{{$comand->quantity}}</td>
				<td>{{$comand->article->price * $comand->quantity}} €</td>
			</tr>
		@endforeach
	</table>
	<div class="row justify-content-center">
		<div class="col-lg-12">
			<div class="card">
				<div class="row">
					<div class="col-lg-5">
						<div class="row px-2">
							<div class="form-group col-md-6">
								<label class="form-control-label">Nom de la carte</label>
								<input type="text" id="cname" name="cname" placeholder="Johnny Doe">
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label">Numéro de carte</label>
								<input type="text" id="cnum" name="cnum" placeholder="1111 2222 3333 4444">
							</div>
						</div>
						<div class="row px-2">
							<div class="form-group col-md-6">
								<label class="form-control-label">Date d'expiration </label>
								<input type="text" id="exp" name="exp" placeholder="MM/AAAA">
							</div>
							<div class="form-group col-md-6">
								<label class="form-control-label">CVV</label>
								<input type="text" id="cvv" name="cvv" placeholder="***" class="form-control @error('inputName') is-invalid @enderror">
							</div>
						</div>
					</div>
					<div class="col-lg-4 mt-2">
						<div class="row d-flex justify-content-between px-4" id="tax">
							<b><p class="mb-1 text-left">Total</p></b>
							<h6 class="mb-1 text-right"><b>{{$total}} €</b></h6>
							
						</div>
						<form class="valideComande" action="/valideComande" method="post">
							@csrf
							<button class="btn btn-sm btn-danger" type="submit">
								<span id="checkout">Payer</span>
								<input type="hidden" name="id_order" value="{{$cartData->id}}" />
							</button>

						</form>
						<br>
						<form class="paypal" action="/paypal" method="post">
							@csrf
							<button class="btn btn-sm btn-primary" type="submit">
								<span id="checkout"><i class="fab fa-paypal"></i></span>
								<input type="hidden" name="amount" value="{{$total}}"/>
								<input type="hidden" name="id_order" value="{{$cartData->id}}" />
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
