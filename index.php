<?php include 'partials/header.php'; ?>
<?php require 'partials/jsonData.php'; ?>

  <header class="container-fluid text-center m-5">
    <h1 class="text-muted">🏆 Noble Prize Winners! 🏆</h1>
  </header>
  <section class="container">
    <div class="row">
      
      <?php foreach($bigData as $prize) : ?>
        <?php include 'partials/prizeCard.php'; ?>
      <?php endforeach; ?>

    </div>
  </section> 

<?php include 'partials/footer.php'; ?>