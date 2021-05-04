<?php include_once __DIR__.'/dati.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/master.css">
  </head>
  <body>
    
    <div id="root">
      <div class="header">
        <h1>Musica</h1>
        <select v-model='genere' id="selezione-genere">
          <option value="">All</option>
          <option value="Rock">Rock</option>
          <option value="Pop">Pop</option>
          <option value="Jazz">Jazz</option>
          <option value="Metal">Metal</option>
        </select>
      </div>

      <div class="content">

        <?php foreach ($database as $disk) { ?>

        <div class="card">
          <div class="top-card">
            <div class="immage">
              <img src="<?php echo $disk['poster'] ?>" alt="">
            </div>
  
            <div class="title">
              <span><?= $disk['title'] ?></span>
              <span><?= $disk['author'] ?></span>
            </div>
          </div>
  
          <div class="bot-card">
            <span>Anno: <?= $disk['year'] ?></span>
          </div>
        </div>
        <?php } ?>
      </div>

      
    </div>
