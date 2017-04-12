<?php
//Loads JSON from .json-file
$nobelData = file_get_contents('json/prizes.json');
//Turns JSON data into PHP associative array with json_decode
$nobelData = json_decode($nobelData, true);


foreach($nobelData as $laureate) { ?>
<div class='col-md-4'>
    <div class='card'>
<?php
    echo   "<h2 class='text-capitalize'>{$laureate['category']}
            <p class='small'>{$laureate['year']}</p></h2>
            <h3 class='text-muted text-capitalize'>laureates</h3>";
    foreach($laureate['laureates'] as $item){
        echo "<div class='card-text'>{$item['firstname']}{$item['surname']}</div>";
    }
?>
    </div>
</div>
<?php } ?>