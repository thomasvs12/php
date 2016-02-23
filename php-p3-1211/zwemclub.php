<?php
$zwemclub ["naam1"] = "de spartelkuikens";
$zwemclub ["leden1"] = 25;
$zwemclub ["naam2"] = "de waterbuffels";
$zwemclub ["leden2"] = 32;
$zwemclub ["naam3"] = "plonsmderin";
$zwemclub ["leden3"] = 11;
$zwemclub ["naam4"] = "bommetje";
$zwemclub ["leden4"] = 23;
	
	foreach ( $zwemclub as $enkele ) {
		$getal = ($enkele - $enkele % 5)/5;
		for($i = 0; $i < $getal; $i++) { 
			echo "<img src = 'icon.jpg' width='20px' height='auto'>";
		} 
		echo $enkele . "<br>";
	}
?>