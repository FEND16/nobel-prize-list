<?php
//Loads JSON from .json-file
$nobelData = file_get_contents('json/prizes.json');
//Turns JSON data into PHP associative array
//var_dump($nobelData);
$nobelData = json_decode($nobelData, true);

function get_nobel_prize_winners($json){
	$cards = '';
	$card_content = '';
	$index = 0;
	$motivation = '';
	foreach ((array) $json as $key => $category) {

		$card_content .= '<div class="col-4">';
		$card_content .= '<div class="card mb-4">'; 
		$card_content .= '<div class="card-block" style="min-height:500px;">';  

		$card_content .=  '<h3 class="card-title">' . ucfirst($category['category']) . '</h3>';
		$card_content .=  '<p class="card-subtitle text-muted">' . $category['year'] . '</p>';

		foreach ((array) $category['laureates'] as $key => $laureate) {
			$index ++;
			if($index == 1):
				$card_content .=  '<p class="font-italic" style="min-height:120px;"> ' . ucfirst(str_replace("\"", "",  $laureate['motivation'])) . '</p>';
				$card_content .=  '<h4 class="mb-3 text-muted card-title">Laureates</h4>';
				$card_content .= '<ul class="list-group list-group-flush">';					
			endif;
				$card_content .= '<li class="font-weight-bold list-group-item">' . $laureate['firstname'] . ' ' . $laureate['surname'] . '</li>';
		}
		$card_content .= '</ul>';
		$index = 0;

		$card_content .= '</div>';	
		$card_content .= '</div>';
		$card_content .= '</div>';
	}
	return $card_content;
}

?>