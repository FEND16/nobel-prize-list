
<?php include_once 'partials/header.php'; ?>
  <header class="container-fluid text-center m-5">
    <h1 class="text-muted">🏆 Noble Prize Winners! 🏆</h1>    
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

  <script>
    //Danger zone, here take this shield to protect yourself: 🛡
    (function titleScroller(text) {
      document.title = text;
      setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
      }, 100);
    }(" GET YOUR NOBEL PRIZE WINNERS! "));
  </script>

<?php include_once 'partials/footer.php'; ?>    

