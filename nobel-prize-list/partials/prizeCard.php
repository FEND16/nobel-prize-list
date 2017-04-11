<?php
function fix_motivation ($str) {
	$str = str_replace('"', '', $str);
	$str = ucfirst($str);
	return $str;
};
?>

<div class = "container">
	<div class = "row">

<?php
foreach ($nobelData as $obj) {
	?>
	<div class = "col-xs-6 col-md-3">
	<div class = "card">
	<div>
		<?php
			$category = $obj['category'];
			$category = ucfirst($category);
				echo "<h3>$category</h3>";
				$year = $obj['year'];
				echo "<h4>$year</h4>";
				$laureates = $obj['laureates'];
					foreach ($laureates as $person) {
						$motivation = $person['motivation'];
					}
				$motivation = fix_motivation($motivation);
				echo "<p><i>$motivation</i></p>";
		?>
		
	</div>
	<h4>Laureates</h4>
	<ul class="list-group">
	<?php
		foreach ($laureates as $person) {
			$firstname = $person['firstname'];
			$lastname = $person['surname'];
			echo "<li class='list-group-item'>$firstname $lastname</li>";
		}
	?>
	</ul>
	</div>
	</div>
	<?php
		}
	?>
	</div>
</div>






<!--
"[ { "year": "2016", "category": "physics", "laureates": [ { "id": "928", "firstname": "David J.", "surname": "Thouless", "motivation": "\"for theoretical discoveries of topological phase transitions and topological phases of matter\"", "share": "2" },
-->
