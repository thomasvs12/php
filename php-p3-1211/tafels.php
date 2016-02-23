<?php
	function maakTafel ( $tafel ) {
		for($i = 1; $i < 11; $i++) {
			echo $i." x ".$tafel." = ". $i * $tafel . "<br>";
		}
	}
?>