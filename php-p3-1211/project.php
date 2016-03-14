<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
 
<body>
<h1 class="hello"><em><?php echo $login_user;?></em></h1>
<br><br><br>
<a href="logout.php" style="font-size:18px; position: fixed; top: 25px; right: 25px;">uitloggen</a>
</body>
</html>

<style>

body{
text-align: center;
font-family:Arial;

}
h3 {
 text-align:center;
 color:black;
 font-size:40px;

}
</style>




<?php
	if (isset($_GET["id"])) {
		echo "<br><h3>Tafel 1 tot met 10</h3>";
			
		$tafelvan1 ;
		echo "<br>Hier leer je de tafels van 1 tot met 10. <br>Bij elke fout moet je een extra som beantwoorden.";
		
		for($i = 1; $i <= 10; $i++) {
			echo "<br><button onclick='maakTafel($i)' type='button'>tafel van ".$i."!</button>";
			
		}
	}
	else {
		echo "Hoedan?";
	}
?>




<script>
	function maakTafel(tafel) {
		for(i = 1; i <= 10; i++) {
			document.write(i+" x "+tafel+" = "+(i*tafel)+"<br>");
		}
	}
</script>