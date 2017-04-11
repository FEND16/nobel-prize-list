
<?php include_once 'partials/header.php'; ?> 
  <header class="container-fluid text-center m-5">
    <h1 class="text-muted">🏆 Contact 🏆</h1> 
    <h6 class="text-muted"><?php include 'partials/formatDate.php'; ?></h6>
 
  </header> 


<h1>

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
