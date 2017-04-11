<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
<div class="card mb-3">
 <div class="card-block">
     <h1><?= ucfirst($value['category']);?></h1>
    <h4><?= $value['year'] ?></h4>
    <p><i><?= $value['laureates'][0]['motivation'] ?></i></p>
 
    <h4>Laureates</h4>
    <ul class="list-group list-group-flush">
   		<?php foreach($value['laureates'] as $key2 => $value2) : ?>
    	<li class="list-group-item"><?= $value2['firstname'] ?> <?= $value2['surname'] ?></li>
 	<?php endforeach; ?> 
 	<ul> 
</div>
</div>
</div>

  


