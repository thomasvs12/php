<?php
   echo 'Thomas Php website!';
$leeftijd = 0;
$rijskosten = 10;
$gratis = 0;

echo "<br> De rijskosten zijn:" . $rijskosten;
echo "$ zonder korting,";
echo "<br>";

for ($i = 0; $i < 9; $i++) {
if ($leeftijd <= 3) {

		echo "<br>u bent: ". $leeftijd; echo"jaar. De rijskosten zijn " . $gratis;
	echo "$";
} else if ($leeftijd  <= 12) {

		echo "<br>u bent: ". $leeftijd; echo"jaar. De rijskosten zijn " . $rijskosten/2;
	echo "$";
	} else if ($leeftijd  > 65) {
	
		echo "<br>u bent: ". $leeftijd; echo"jaar. De rijskosten zijn " . $rijskosten/2;
		echo "$";
	
} else {

		echo "<br>u bent: ". $leeftijd; echo"jaar. De rijskosten zijn " . $rijskosten;
		echo "$";
}
$leeftijd += 5;
}