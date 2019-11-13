@extends('layouts.app')@section('content')
<div class='container'>
	<div class='row' style='padding-top:25px; padding-bottom:25px;'>
		<div class='col-md-12'>
			<div id='mainContentWrapper'>
				<div class="col-md-8 col-md-offset-2">
					<div class="shopping_cart">
						<form class="form-horizontal" role="form" action="" method="post" id="payment-form">
							<div class="panel-group" id="accordion">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Résumé de ta commande</a></h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse in">
										<div class="panel-body">
											<div class="items">
												<th scope="col"></th>
												<div class="col-md-9">
													<table class="table table-striped">
														<thead>
															<tr>
																<td scope="col">
																	 TEST 
																</td>
																<td scope="col">
																	 TEST 
																</td>
																<td scope="col">
																	 TEST 
																</td>
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
															</div>
															<div class="col-md-3">
																<div style="text-align: center;">
																	<h3>Prix Final</h3>
																	<h3><span style="color:green;">{{$total}} €</span></h3>
																</div>
															</div>
														</tbody>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- 
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<div style="text-align: center; width:100%;">
													<a style="width:100%;"data-toggle="collapse"data-parent="#accordion"href="#collapseTwo"class=" btn btn-success"onclick="$(this).fadeOut(); $('#payInfo').fadeIn();">Continueto Billing Information»</a>
												</div>
											</h4>
										</div>
									</div>
									 -->
									<div class="panel panel-default">
										<div id="collapseTwo" class="panel-collapse collapse in">
											<div class="panel-body">
												<b>Merci d'indiquer vos indications personnelles afin de valider votre payement</b>
												<br/>
												<br/>
												<table class="table table-striped" style="font-weight: bold;">
													<tr>
														<td style="width: 175px;">
															<label for="id_email">Adresse Mail :</label>
														</td>
														<td>
															<input class="form-control" id="id_email" name="email"required="required" type="text"/>
														</td>
													</tr>
													<tr>
														<td style="width: 175px;">
															<label for="id_first_name">Prénom:</label>
														</td>
														<td>
															<input class="form-control" id="id_first_name" name="first_name"required="required" type="text"/>
														</td>
													</tr>
													<tr>
														<td style="width: 175px;">
															<label for="id_last_name">Nom:</label>
														</td>
														<td>
															<input class="form-control" id="id_last_name" name="last_name"required="required" type="text"/>
														</td>
													</tr>
													<tr>
														<td style="width: 175px;">
															<label for="id_address_line_1">Adresse:</label>
														</td>
														<td>
															<input class="form-control" id="id_address_line_1"name="address_line_1" required="required" type="text"/>
														</td>
													</tr>
													<tr>
														<td style="width: 175px;">
															<label for="id_city">Ville</label>
														</td>
														<td>
															<input class="form-control" id="id_city" name="city"required="required" type="text"/>
														</td>
													</tr>
													<tr>
														<td style="width: 175px;">
															<label for="id_state">Pays</label>
														</td>
														<td>
															<select class="form-control" id="id_state" name="state">
																<option value="Afghanistan">Afghanistan</option>
																<option value="Afrique_du_Sud">Afrique du Sud</option>
																<option value="Albanie">Albanie</option>
																<option value="Algerie">Algérie</option>
																<option value="Allemagne">Allemagne</option>
																<option value="Andorre">Andorre</option>
																<option value="Angola">Angola</option>
																<option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
																<option value="Arabie_saoudite">Arabie saoudite</option>
																<option value="Argentine">Argentine</option>
																<option value="Armenie">Arménie</option>
																<option value="Australie">Australie</option>
																<option value="Autriche">Autriche</option>
																<option value="Azerbaidjan">Azerbaïdjan</option>
																<option value="Bahamas">Bahamas</option>
																<option value="Bahrein">Bahreïn</option>
																<option value="Bangladesh">Bangladesh</option>
																<option value="Barbade">Barbade</option>
																<option value="Belau">Belau</option>
																<option value="Belgique">Belgique</option>
																<option value="Belize">Belize</option>
																<option value="Benin">Bénin</option>
																<option value="Bhoutan">Bhoutan</option>
																<option value="Bielorussie">Biélorussie</option>
																<option value="Birmanie">Birmanie</option>
																<option value="Bolivie">Bolivie</option>
																<option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
																<option value="Botswana">Botswana</option>
																<option value="Bresil">Brésil</option>
																<option value="Brunei">Brunei</option>
																<option value="Bulgarie">Bulgarie</option>
																<option value="Burkina">Burkina</option>
																<option value="Burundi">Burundi</option>
																<option value="Cambodge">Cambodge</option>
																<option value="Cameroun">Cameroun</option>
																<option value="Canada">Canada</option>
																<option value="Cap-Vert">Cap-Vert</option>
																<option value="Chili">Chili</option>
																<option value="Chine">Chine</option>
																<option value="Chypre">Chypre</option>
																<option value="Colombie">Colombie</option>
																<option value="Comores">Comores</option>
																<option value="Congo">Congo</option>
																<option value="Cook">Cook</option>
																<option value="Coree_du_Nord">Corée du Nord</option>
																<option value="Coree_du_Sud">Corée du Sud</option>
																<option value="Costa_Rica">Costa Rica</option>
																<option value="Cote_Ivoire">Côte d'Ivoire</option>
																<option value="Croatie">Croatie</option>
																<option value="Cuba">Cuba</option>
																<option value="Danemark">Danemark</option>
																<option value="Djibouti">Djibouti</option>
																<option value="Dominique">Dominique</option>
																<option value="Egypte">Égypte</option>
																<option value="Emirats_arabes_unis">Émirats arabes unis</option>
																<option value="Equateur">Équateur</option>
																<option value="Erythree">Érythrée</option>
																<option value="Espagne">Espagne</option>
																<option value="Estonie">Estonie</option>
																<option value="Etats-Unis">États-Unis</option>
																<option value="Ethiopie">Éthiopie</option>
																<option value="Fidji">Fidji</option>
																<option value="Finlande">Finlande</option>
																<option value="France">France</option>
																<option value="Gabon">Gabon</option>
																<option value="Gambie">Gambie</option>
																<option value="Georgie">Géorgie</option>
																<option value="Ghana">Ghana</option>
																<option value="Grèce">Grèce</option>
																<option value="Grenade">Grenade</option>
																<option value="Guatemala">Guatemala</option>
																<option value="Guinee">Guinée</option>
																<option value="Guinee-Bissao">Guinée-Bissao</option>
																<option value="Guinee_equatoriale">Guinée équatoriale</option>
																<option value="Guyana">Guyana</option>
																<option value="Haiti">Haïti</option>
																<option value="Honduras">Honduras</option>
																<option value="Hongrie">Hongrie</option>
																<option value="Inde">Inde</option>
																<option value="Indonesie">Indonésie</option>
																<option value="Iran">Iran</option>
																<option value="Iraq">Iraq</option>
																<option value="Irlande">Irlande</option>
																<option value="Islande">Islande</option>
																<option value="Israël">Israël</option>
																<option value="Italie">Italie</option>
																<option value="Jamaique">Jamaïque</option>
																<option value="Japon">Japon</option>
																<option value="Jordanie">Jordanie</option>
																<option value="Kazakhstan">Kazakhstan</option>
																<option value="Kenya">Kenya</option>
																<option value="Kirghizistan">Kirghizistan</option>
																<option value="Kiribati">Kiribati</option>
																<option value="Koweit">Koweït</option>
																<option value="Laos">Laos</option>
																<option value="Lesotho">Lesotho</option>
																<option value="Lettonie">Lettonie</option>
																<option value="Liban">Liban</option>
																<option value="Liberia">Liberia</option>
																<option value="Libye">Libye</option>
																<option value="Liechtenstein">Liechtenstein</option>
																<option value="Lituanie">Lituanie</option>
																<option value="Luxembourg">Luxembourg</option>
																<option value="Macedoine">Macédoine</option>
																<option value="Madagascar">Madagascar</option>
																<option value="Malaisie">Malaisie</option>
																<option value="Malawi">Malawi</option>
																<option value="Maldives">Maldives</option>
																<option value="Mali">Mali</option>
																<option value="Malte">Malte</option>
																<option value="Maroc">Maroc</option>
																<option value="Marshall">Marshall</option>
																<option value="Maurice">Maurice</option>
																<option value="Mauritanie">Mauritanie</option>
																<option value="Mexique">Mexique</option>
																<option value="Micronesie">Micronésie</option>
																<option value="Moldavie">Moldavie</option>
																<option value="Monaco">Monaco</option>
																<option value="Mongolie">Mongolie</option>
																<option value="Mozambique">Mozambique</option>
																<option value="Namibie">Namibie</option>
																<option value="Nauru">Nauru</option>
																<option value="Nepal">Népal</option>
																<option value="Nicaragua">Nicaragua</option>
																<option value="Niger">Niger</option>
																<option value="Nigeria">Nigeria</option>
																<option value="Niue">Niue</option>
																<option value="Norvège">Norvège</option>
																<option value="Nouvelle-Zelande">Nouvelle-Zélande</option>
																<option value="Oman">Oman</option>
																<option value="Ouganda">Ouganda</option>
																<option value="Ouzbekistan">Ouzbékistan</option>
																<option value="Pakistan">Pakistan</option>
																<option value="Panama">Panama</option>
																<option value="Papouasie-Nouvelle_Guinee">Papouasie - Nouvelle Guinée</option>
																<option value="Paraguay">Paraguay</option>
																<option value="Pays-Bas">Pays-Bas</option>
																<option value="Perou">Pérou</option>
																<option value="Philippines">Philippines</option>
																<option value="Pologne">Pologne</option>
																<option value="Portugal">Portugal</option>
																<option value="Qatar">Qatar</option>
																<option value="Republique_centrafricaine">République centrafricaine</option>
																<option value="Republique_dominicaine">République dominicaine</option>
																<option value="Republique_tcheque">République tchèque</option>
																<option value="Roumanie">Roumanie</option>
																<option value="Royaume-Uni">Royaume-Uni</option>
																<option value="Russie">Russie</option>
																<option value="Rwanda">Rwanda</option>
																<option value="Saint-Christophe-et-Nieves">Saint-Christophe-et-Niévès</option>
																<option value="Sainte-Lucie">Sainte-Lucie</option>
																<option value="Saint-Marin">Saint-Marin </option>
																<option value="Saint-Siège">Saint-Siège, ou leVatican</option>
																<option value="Saint-Vincent-et-les_Grenadines">Saint-Vincent-et-les Grenadines</option>
																<option value="Salomon">Salomon</option>
																<option value="Salvador">Salvador</option>
																<option value="Samoa_occidentales">Samoa occidentales</option>
																<option value="Sao_Tome-et-Principe">Sao Tomé-et-Principe</option>
																<option value="Senegal">Sénégal</option>
																<option value="Seychelles">Seychelles</option>
																<option value="Sierra_Leone">Sierra Leone</option>
																<option value="Singapour">Singapour</option>
																<option value="Slovaquie">Slovaquie</option>
																<option value="Slovenie">Slovénie</option>
																<option value="Somalie">Somalie</option>
																<option value="Soudan">Soudan</option>
																<option value="Sri_Lanka">Sri Lanka</option>
																<option value="Sued">Suède</option>
																<option value="Suisse">Suisse</option>
																<option value="Suriname">Suriname</option>
																<option value="Swaziland">Swaziland</option>
																<option value="Syrie">Syrie</option>
																<option value="Tadjikistan">Tadjikistan</option>
																<option value="Tanzanie">Tanzanie</option>
																<option value="Tchad">Tchad</option>
																<option value="Thailande">Thaïlande</option>
																<option value="Togo">Togo</option>
																<option value="Tonga">Tonga</option>
																<option value="Trinite-et-Tobago">Trinité-et-Tobago</option>
																<option value="Tunisie">Tunisie</option>
																<option value="Turkmenistan">Turkménistan</option>
																<option value="Turquie">Turquie</option>
																<option value="Tuvalu">Tuvalu</option>
																<option value="Ukraine">Ukraine</option>
																<option value="Uruguay">Uruguay</option>
																<option value="Vanuatu">Vanuatu</option>
																<option value="Venezuela">Venezuela</option>
																<option value="Viet_Nam">Viêt Nam</option>
																<option value="Yemen">Yémen</option>
																<option value="Yougoslavie">Yougoslavie</option>
																<option value="Zaire">Zaïre</option>
																<option value="Zambie">Zambie</option>
																<option value="Zimbabwe">Zimbabwe</option>
															</select>
														</td>
													</tr>
													<tr>
														<td style="width: 175px;">
															<label for="id_postalcode">Code Postal:</label>
														</td>
														<td>
															<input class="form-control" id="id_postalcode" name="postalcode"required="required" type="text"/>
														</td>
													</tr>
													<tr>
														<td style="width: 175px;">
															<label for="id_phone">Numéroe:</label>
														</td>
														<td>
															<input class="form-control" id="id_phone" name="phone" type="text"/>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-heading">
											<h4 class="panel-title">
												<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><b>Payment Information</b></a>
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse in">
											<div class="panel-body">
												<span class='payment-errors'></span>
												<fieldset>
													<legend>
														What method would you like to pay with today?
													</legend>
													<div class="form-group">
														<label class="col-sm-3 control-label" for="card-holder-name">Name onCard</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" stripe-data="name"id="name-on-card" placeholder="Card Holder's Name">
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label" for="card-number">CardNumber</label>
														<div class="col-sm-9">
															<input type="text" class="form-control" stripe-data="number"id="card-number" placeholder="Debit/Credit Card Number">
															<br/>
															<div>
																<img class="pull-right"src="https://s3.amazonaws.com/hiresnetwork/imgs/cc.png"style="max-width: 250px; padding-bottom: 20px;">
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label" for="expiry-month">ExpirationDate</label>
															<div class="col-sm-9">
																<div class="row">
																	<div class="col-sm-4">
																		<select class="form-control col-sm-12"data-stripe="exp-month" id="card-exp-month"style="margin-left:5px;">
																			<option>Month</option>
																			<option value="01">Jan (01)</option>
																			<option value="02">Feb (02)</option>
																			<option value="03">Mar (03)</option>
																			<option value="04">Apr (04)</option>
																			<option value="05">May (05)</option>
																			<option value="06">June (06)</option>
																			<option value="07">July (07)</option>
																			<option value="08">Aug (08)</option>
																			<option value="09">Sep (09)</option>
																			<option value="10">Oct (10)</option>
																			<option value="11">Nov (11)</option>
																			<option value="12">Dec (12)</option>
																		</select>
																	</div>
																	<div class="col-xs-3">
																		<select class="form-control" data-stripe="exp-year"id="card-exp-year">
																			<option value="2019">2019</option>
																			<option value="2020">2020</option>
																			<option value="2021">2021</option>
																			<option value="2022">2022</option>
																			<option value="2023">2023</option>
																			<option value="2024">2024</option>
																			<option value="2025">2025</option>
																			<option value="2026">2026</option>
																			<option value="2027">2027</option>
																		</select>
																	</div>
																</div>
															</div>
														</div>
														<div class="form-group">
															<label class="col-sm-3 control-label" for="cvv">Card CVC</label>
															<div class="col-sm-3">
																<input type="text" class="form-control" stripe-data="cvc"id="card-cvc" placeholder="Security Code">
															</div>
														</div>
														<div class="form-group">
															<div class="col-sm-offset-3 col-sm-9"></div>
														</div>
													</fieldset>
													<button type="submit" class="btn btn-success btn-lg" style="width:100%;">PayNow</button>
													<br/>
													<div style="text-align: left;">
														<br/>
														By submiting this order you are agreeing to our 
														<a href="/legal/billing/">universalbilling agreement</a>
														, and 
														<a href="/legal/terms/">terms of service</a>
														.If you have any questions about our products or services please contact usbefore placing this order.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</fieldset>
@endsection