<?php
  //Loads JSON from .json-file
  $nobelData = file_get_contents('../json/prizes.json');
  //Turns JSON data into PHP associative array
  //var_dump($nobelData);
  $nobelData = json_decode($nobelData, true);
?>
