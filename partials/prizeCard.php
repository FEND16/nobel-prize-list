<?php
//Loads JSON from .json-file
$nobelData = file_get_contents('json/prizes.json');
//Turns JSON data into PHP associative array with json_decode
$nobelData = json_decode($nobelData, true);


foreach($nobelData as $laureate) { ?>
<div class='card col-md-4'>
<?php
    echo   "<h2 class='text-capitalize'>{$laureate['category']}</h2>
            <p>{$laureate['year']}</p>
            <h3 class='text-muted text-capitalize'>laureates</h3>";
    foreach($laureate['laureates'] as $item){
        echo "<div>{$item['firstname']}{$item['surname']}</div>";
    }
?>
</div>
<?php } ?>