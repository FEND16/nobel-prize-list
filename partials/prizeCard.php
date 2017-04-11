
<div class="col-sm-4">
<div class="card mb-5">
          <div class="card-block">
            <h4 class="card-title"><?= ucfirst($prize['category']) ?></h4>
            <h6 class="card-subtitle mb-2 text-muted"><?= $prize['year'] ?></h6>
            <p class="card-text">
              <?= $prize['laureates'][0]['motivation'] ?>
            </p>
            <h6 class="card-subtitle mb-2 text-muted">Laureates</h6>
            <ul class="list-group list-group-flush">
              <?php foreach ($prize['laureates'] as $key => $value) : ?>

                <li class="list-group-item"><?= $value['firstname'] ?> <?= $value['surname'] ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
</div>
</div>