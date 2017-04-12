<div class="col-xs-10 col-sm-10 col-md-6 col-xl-4 offset-sm-1 offset-md-0 mb-4">
  <div class="card p-3">
    <div class="card-block">
      <h4 class="card-title text-capitalize">
        <?= $prize["category"] ?>
      </h4>
      <h5 class="card-subtitle mb-2 text-muted">
        <?= $prize["year"] ?>
      </h5>
      <p class="card-text font-italic">
        <?= (isset($prize['laureates'][0]['motivation'])) ? 
            ucfirst(str_replace("\"", "", $prize['laureates'][0]['motivation'])): "" 
        ?>
      </p>
      <h4 class="text-muted">Laureates</h4>
      <ul class="list-group list-group-flush font-weight-bold">
        <?php foreach($prize['laureates'] as $laureate) : ?>
          <li class="list-group-item">
            <?= $laureate['firstname'] ?> <?= $laureate['surname'] ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>