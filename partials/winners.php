  <?php 
    for ($i=0; $i < count($nobelData); $i++) { 
      if ($nobelData[$i]["year"] == 2016){
        echo ("<br>" . $nobelData[$i]["category"] . "<br>");
        echo ($nobelData[$i]["year"] . "<br>");
        echo ($nobelData[$i]["laureates"][0]["motivation"] . "<br>");

        if (count($nobelData[$i]["laureates"]) > 1){
          for ($j=0; $j < count($nobelData[$i]["laureates"]); $j++) { 
            echo ($nobelData[$i]["laureates"][$j]["firstname"]);
            echo ($nobelData[$i]["laureates"][$j]["surname"] . "<br>");
          }
        }
        else{
          echo ($nobelData[$i]["laureates"][0]["firstname"]);
          echo ($nobelData[$i]["laureates"][0]["surname"] . "<br>");
        }
      }
    }
  ?>