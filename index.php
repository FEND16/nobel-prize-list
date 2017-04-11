  <?php

    include 'partials/header.php';

    //Loads JSON from .json-file
    $nobelData = file_get_contents('json/prizes.json');
    //Turns JSON data into PHP associative array
    $nobelData = json_decode($nobelData, true);
    //var_dump($nobelData);
  ?>
  
  <header class="container-fluid text-center m-5">
    <h1 class="text-muted">🏆 Noble Prize Winners! 🏆</h1>
  </header>
  <section class="row">
  <?php foreach ($nobelData as $prize) { ?>

    <?php include 'partials/prizeCard.php';} ?>

  <section>
  <script>
    //Danger zone, here take this shield to protect yourself: 🛡
    (function titleScroller(text) {
      document.title = text;
      setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
      }, 100);
    }(" GET YOUR NOBEL PRIZE WINNERS! "));
  </script>
  <?php
    include 'partials/footer.php';
  ?>
</body>
</html>