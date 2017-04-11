<div class="container">
  <div class="row">
    <?php foreach($nobelData as $nobel => $key){
      echo
        '<div class="card-deck col-4 mb-4">' .
        '<div class="card">' .
        '<div class="card-block">' .
        '<h3 class="card-title text-capitalize">' . $key['category'] . '</h3>' .
        '<h5 class="card-title text-muted">' . $key['year'] . '</h5>';
      $array = $key['laureates'];
      echo
        '<p class="font-italic text-capitalize pb-5">' . $array[0]['motivation'] . '</p>' .
        '<h3 class="text-muted">Laureates</h3>' .
        '<ul class="list-group">';
        foreach($array as $value){
            echo
              '<li class="list-group-item font-weight-bold">' .  $value['firstname'] . '</li>';
          }
        echo
          '</ul>' .
          '</div>' .
          '</div>' .
          '</div>';
    } ?>
  </div>
</div>
