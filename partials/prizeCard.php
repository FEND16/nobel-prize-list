<div class="col-lg-4 card" id="card">
    <h3><?= $prize['category'] ?></h3>
    <h3 class="grey"><?= $prize['year'] ?></h3>
    <p><i><?= $prize['laureates'][0]['motivation'] ?></i></p>
    <h3 class="grey">Laureates</h3>
    <?php foreach ($prize['laureates'] as $laureates){ ?>
        <hr>
        <span><?= "{$laureates['firstname']} {$laureates['surname']}"?></span>
    <?php } ?>
</div>