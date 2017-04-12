<?php for ($i=0; $i < count($nobelData); $i++) { ?>
  <div class="card col-md-3 offset-md-1 mb-4" style="width: 20rem">
    <div class="card-block">
      <h4 class="card-title"><?= $nobelData[$i]["category"] ?></h4>
      <h5 class="card-subtitle mb-2 text-muted"><?= $nobelData[$i]["year"] ?></h5>
      <p class="mb-4"><?= $nobelData[$i]["laureates"][0]["motivation"] ?></p>
      <h4>Laureates</h4>
      <ul class="list-group">
        <?php if (count($nobelData[$i]["laureates"]) > 1){ ?>
            <?php for ($j=0; $j < count($nobelData[$i]["laureates"]); $j++) { ?>
              <li class='list-group-item'><?= $nobelData[$i]["laureates"][$j]["firstname"] . " " . $nobelData[$i]["laureates"][$j]["surname"]?></li>
            <?php } ?>
        <?php  }else{ ?>
            <li class='list-group-item'><?= $nobelData[$i]["laureates"][0]["firstname"] . " " . $nobelData[$i]["laureates"][0]["surname"]?></li>
          <?php } ?>
      </ul>
    </div>
  </div>
<?php } ?>

