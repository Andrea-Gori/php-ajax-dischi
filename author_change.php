<?php
  header('Content-Type: application/json');


  include_once __DIR__.'/dati.php';
  if ($_GET['author']) {
    $autore = $_GET['author'];
  
    foreach ($database as $value) {
      if ($autore == $value['author']) {
        $autoreFiltrato[] = $value;
      }
    } 
    echo json_encode($autoreFiltrato);
  }else {
    echo json_encode($database);
  }

?>