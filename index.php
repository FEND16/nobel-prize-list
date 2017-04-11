<!-- HEADER -->
<?php include_once('partials/header.php') ?>

  <?php
    //Loads JSON from .json-file
    $nobelData = file_get_contents('json/prizes.json');
    //Turns JSON data into PHP associative array
    //var_dump($nobelData);
    $nobelData = json_decode($nobelData, true);
    ?>

    <header class="container-fluid text-center m-5">
    <h1 class="text-muted">🏆 Noble Prize Winners! 🏆</h1>
  </header>
  <div class="container">
  
    <div class="card-group">
      <div class="row">
    <?php foreach ($nobelData as $prize_id => $prize) : ?>
    <?php include('partials/prizeCard.php') ?>
    <?php endforeach; ?>
    </div>
    </div>
 </div>


<!-- FOOTER -->
<?php include_once('partials/footer.php') ?>