<?php include 'partials/header.php' ?>

  <header class="container-fluid text-center">
    <h1 class="text-muted">
      <?= ucfirst(basename($_SERVER['PHP_SELF'], ".php")); ?>     
    </h1>
  </header>
  <section class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-4 text-center">
        <a href="https://www.nobelprize.org/nobel_prizes/peace/">Nobel Peace Prize</a>
      </div>
    </div>
  </section>
  

<?php include 'partials/footer.php'; ?>