<!doctype html>
<html lang="en">
<body>
<?php include 'partials/header.php';?>
  <?php
    //Loads JSON from .json-file
    $nobelData = file_get_contents('json/prizes.json');
    //Turns JSON data into PHP associative array
    //var_dump($nobelData);
    $nobelData = json_decode($nobelData, true);
  ?>
  
 <?php include 'partials/prizeCard.php';?>


  <script>
    //Danger zone, here take this shield to protect yourself: 🛡
    (function titleScroller(text) {
      document.title = text;
      setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
      }, 100);
    }(" GET YOUR NOBEL PRIZE WINNERS! "));
  </script>
</body>
</html>