
<?php include_once 'partials/header.php'; ?>
  <header class="container-fluid text-center m-5">
    <h1 class="text-muted">🏆 Noble Prize Winners! 🏆</h1>
    <h6 class="text-muted"><?php include 'partials/formatDate.php'; ?></h6>
  </header>

    <?php
    //Loads JSON from .json-file
    $nobelData = file_get_contents('json/prizes.json');
    //Turns JSON data into PHP associative array
    // var_dump($nobelData);
    $nobelData = json_decode($nobelData, true);
  ?>
      

<div class="container flex-items-xs-center">
<div class="row">
  <?php foreach($nobelData as $value) : ?>
        <?php include 'partials/prizeCard.php'; ?>  
 <?php endforeach; ?> 
</div>
</div>


<?php include_once 'partials/footer.php'; ?>    

