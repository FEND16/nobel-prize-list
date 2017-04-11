<?php include 'partials/header.php';?>
<?php
$about_active = '';
$contact_active = '';
$fun_active = '';
?>
<?php include 'partials/main-nav.php';?>
<?php include 'inc/nobel-data.php';?>
  
  <header class="container-fluid text-center m-5">
    <h1 class="text-muted">🏆 Noble Prize Winners! 🏆</h1>
  </header>
  <div class="container">
    <div class="row">
      <?php echo get_nobel_prize_winners($nobelData);?>
    </div>
  </div> 

<?php include 'partials/footer.php';?>