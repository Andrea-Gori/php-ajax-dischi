<?php

  include_once __DIR__.'/dati.php';
  $autore = $_GET['author'];

  foreach ($database as $value['author']) {
    if ($autore == $value['author']) {
      $autoreFiltrato[] = $value;
      var_dump($value);
    }
  }
  header('Content-Type: application/json');
    
  echo json_encode($autoreFiltrato);
?>