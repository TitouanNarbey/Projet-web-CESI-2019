<!-- Print and download list of particpant to an event -->
<?php 
  $file_name = 'Liste des inscrits.csv';
  header("Content-Disposition: attachment; filename=$file_name");
  header("Content-Type: text/csv;"); 
  $file = fopen('php://output', 'w');
  $header = array("Liste des inscrits");
  fputcsv($file, $header);?>
  Prenom;"Nom";"Contact"     
      @foreach($event->participate as $user)
		{{$user->last_name}};{{$user->first_name}};{{$user->email}}
      @endforeach 
