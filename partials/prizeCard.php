 <div class="container">
    <div class="row">
<?php

foreach($nobelData as $row => $value){ ?>
   
  <div class="card col-md-4">
    <div class="card-block">
      <h2 class="card-title"><?= $value["category"] ?></h2>
      <h5><?= $value["year"] ?></h5>
      <p class="card-text"><?= $value["laureates"][0]["motivation"] ?></p>
    </div>
    <h4>Laureates</h4>
    <ul class="list-group list-group-flush">
      <?php foreach($value["laureates"] as $row2 => $value2) { ?>    
      <li class="list-group-item"><?= $value2["firstname"] ." " . $value2["surname"] ?>'</li>
      <?php } ?>
    </ul>
  </div>

  <br>
  <?php } ?>
  }
  ?>
  </div>
  </div>