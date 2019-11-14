@extends('layouts.app')@section('content')
<div class="container px-4 py-5 mx-auto">
	<table class="table table-striped">
		<thead>
			<tr>
				<td class="text-right"></thead>
				<tbody>
					@foreach($cartData->
					comanded as $comand)
					<tr>
						<td>
							<td>
								{{$comand->
								article->
								name}}
							</td>
							<td>
								{{$comand->
								quantity}}
							</td>
							<td>
								{{$comand->
								article->
								price * $comand->
								quantity}} €
							</td>
						</td>
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
											<label class="form-control-label">Card Number</label>
											<input type="text" id="cnum" name="cnum" placeholder="1111 2222 3333 4444">
										</div>
									</div>
									<div class="row px-2">
										<div class="form-group col-md-6">
											<label class="form-control-label">Expiration Date</label>
											<input type="text" id="exp" name="exp" placeholder="MM/YYYY">
										</div>
										<div class="form-group col-md-6">
											<label class="form-control-label">CVV</label>
											<input type="text" id="cvv" name="cvv" placeholder="***">
										</div>
									</div>
								</div>
								<div class="col-lg-4 mt-2">
									<div class="row d-flex justify-content-between px-4" id="tax">
										<p class="mb-1 text-left">
											Total
										</p>
										<h6 class="mb-1 text-right">
											{{$total}} €
										</h6>
									</div>
									<form class="valideComande" action="/valideComande" method="post">
									@csrf
									<button class="btn btn-sm btn-danger" type="submit">
										<span>
											<span id="checkout">Payer</span>
										</span>
									<input type="hidden" name="id_order" value="{{$comand->order->id}}" />
									</button>


								
								</form>
										
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</tbody>
	</td>
</tr>
</thead>
</table>
</div>

@endsection