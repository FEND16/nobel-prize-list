
<div class="card card-text col-sm-3 col-md-3 col-lg-3">
    <header>
      <p><h1><?= ucfirst($value['category']);?></h1></p>
    </header>
    
    <h4><?= $value['year'] ?></h4>

    <p><i><?= $value['laureates'][0]['motivation'] ?></i></p>
 
    <h4>Laureates</h4>
    <ul class="list">
   		<?php foreach($value['laureates'] as $key2 => $value2) : ?>
    	<li><?= $value2['firstname'] ?> <?= $value2['surname'] ?></li>
    
 	<?php endforeach; ?> 
 	<ul> 
</div>


  


