@extends('layouts.app')

@section('title',"Liste des utilisateurs - Administration")
@section('meta-description',"Affiche la liste des personnes inscrites sur le site")
@section('content')
@include ('updateuser')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel heading">
                        <br> 
                        <!-- Show data -->
                        <button class="btn btn-ino btn-primary btn-xs pull-right" id="read-data">Charger les données</button>
                        <br>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-condensed">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>E-mail</th>
                                    <th>Date de création</th>
                                    <th>Campus</th>   
                                    <th>Rôle</th>   
                                    <th>Gérer l'utilisateur</th>   
                                </tr>
                            </thead>
                            <tbody id="user-info"></tbody>
                        </table>
                    </div> 
                </div>
            </div>
        </div>
    </div>
@endsection

