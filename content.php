<!doctype html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="icon" href="favicon.png">
    </head>
    <body>
        <?php
        //Loads JSON from .json-file
            $nobelData = file_get_contents('json/laureate.json');
        //Turns JSON data into PHP associative array
        //var_dump($nobelData);
            $nobelData = json_decode($nobelData, true);
        
            foreach ($nobelData as $key) {
                if ($key == "firstname") {
                    echo $key;
                }
            }
        ?>
    </body>
    