
<div class="col-sm-4">
<div class="card mb-5">
          <div class="card-block">
            <h4 class="card-title"><?= ucfirst($prize['category']) ?></h4>
            <h6 class="card-subtitle mb-2 text-muted"><?= $prize['year'] ?></h6>
            <p class="card-text">
              <em><?= ucfirst(substr($prize['laureates'][0]['motivation'],1, -1)) ?></em>
            </p>
            <h6 class="card-subtitle mb-2 text-muted">Laureates</h6>
            <ul class="list-group list-group-flush">
              <?php foreach ($prize['laureates'] as $key => $value) : ?>

                <li class="list-group-item"><strong><?= $value['firstname'] ?> <?= $value['surname'] ?></strong></li>
              <?php endforeach; ?>
            </ul>
          </div>
</div>
</div>