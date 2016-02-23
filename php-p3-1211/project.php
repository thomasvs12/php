<style>

body{
text-align: center;
font-family:Arial;
background-image: url("naamloos.png.jpg");

}
h3 {
 text-align:center;
 color:black;
 font-size:40px;

}
</style>




<?php
	echo "<h3>Tafel 1 tot met 10</h3>";
		
	$tafelvan1 ;
	echo "<br>Hier leer je de tafels van 1 tot met 10. <br>Bij elke fout moet je een extra som beantwoorden.";
	
	for($i = 1; $i <= 10; $i++) {
		echo "<br><button onclick='maakTafel($i)' type='button'>tafel van ".$i."!</button>";
	}
?>

<script>
	function maakTafel(tafel) {
		for(i = 1; i <= 10; i++) {
			document.write(i+" x "+tafel+" = "+(i*tafel)+"<br>");
		}
	}
</script>