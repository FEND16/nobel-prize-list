     <?php
      //Loads JSON from .json-file
      $nobelData = file_get_contents('json/prizes.json');
      //Turns JSON data into PHP associative array
      //var_dump($nobelData);
      $nobelData = json_decode($nobelData, true);

      function make_list($nobelData) {
        foreach($nobelData as $paramValue) {     
          echo "<div class='card card-block m-2 col-md-4 text-center'>";
          echo "<h3>" . $paramValue["category"] . "</h3>" . "<br>";
          echo "<h4>" . $paramValue["year"] . "</h4>" . "<br>";        
          echo "<p>" . $paramValue["laureates"][0]["motivation"] . "</p>" . "<br>";
          echo "<h3>" . "Laureates" . "</h3>";
            foreach($paramValue["laureates"] as $paramValue2) {                            
              echo $paramValue2["firstname"] . $paramValue2["surname"] . "<br>";          
            }
          echo "</div>";
        }   
      }
      make_list($nobelData);
    ?>