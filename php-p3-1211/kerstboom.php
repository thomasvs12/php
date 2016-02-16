
<style>

body{
text-align: center;
}
</style>

<?php
	echo "Kerstboom opdracht<br>";
	$lijnen = "10";
	
	for($i = 0; $i < $lijnen; $i++) {
		for($j = 0; $j < $i; $j++) {
			echo "*";
		}
		echo "<br>";
	}