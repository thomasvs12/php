<?php
	class Auto {
		
		private $merk;
		private $type;
		private $prijs;
		private $fotoURL;
		
		public function __construct($merk, $type, $prijs, $fotoURL) {
			$this->merk = $merk;
			$this->type = $type;
			$this->prijs = $prijs;
			$this->fotoURL = $fotoURL;
		}
		
		public function getMerk() {
			return $this->merk;
		}
		
		public function getType() {
			return $this->type;
		}
		
		public function getPrijs() {
			return $this->prijs;
		}
		
		public function getFotoURL() {
			return $this->fotoURL;
		}
	
		public function setMerk($merk) {
			$this->merk = $merk;
		}
		public function setType($type) {
			$this->type = $type;
		}
		public function setPrijs($prijs) {
			$this->prijs = $prijs;
		}
		public function setFotoURL($fotoURL) {
			$this->fotoURL = $fotoURL;
		}
		
	}
	
	$lijst = array(
		new Auto("Ford", "Fiesta", 23999, "img/fordfiesta.jpg"),
		new Auto("Ford", "Focus", 18995, "img/fordfocus.jpg"),
		new Auto("Opel", "Astra", 14895, "img/opelastra.jpg"),
		new Auto("Opel", "Insignia", 65450, "img/opelinsignia.jpg"),
		new Auto("Subaru", "Forester", 34750, "img/subaruforester.jpg"),
		new Auto("Subaru", "Impreza", 28345, "img/subaruimpreza.jpg"),
		new Auto("Mercedes", "CLA 45", 190780, "img/mercedescla45.jpg"),
		new Auto("Mercedes", "E 230", 1000, "img/mercedese230.jpg"),
		new Auto("Mercedes", "C 250", 599, "img/mercedesc250.jpg"),
		new Auto("Ferrari", "612 GTO", 350500, "img/ferrari612.jpg"),
		new Auto("Ferrari", "California", 210780, "img/ferraricalifornia.jpg"),
		new Auto("Ferrari", "458", 280775, "img/ferrari458.jpg"),
		new Auto("Lotus", "Elise S CR", 60079, "img/lotuselisescr.jpg"),
		new Auto("Citroen", "2CV", 459, "img/citroen2cv.jpg"),
		new Auto("Volvo", "V40", 1250, "img/volvov40.jpg"),
		new Auto("Mini", "Cooper", 34495, "img/minicooper.jpg")
	);
	
?>
<style>
body {
background: url("img/header-auto.jpg") no-repeat;
background-size: 120vw 120vh;
}
div.autokader {
    float: left;	
    margin: 1em;
    width: 220px;
    height: 120px;
    border: 1px solid black;
    border-radius: 5px;
    font-weight: bold;
    text-decoration: none;
    position: relative;
    background: -webkit-linear-gradient(right, rgba(127, 127, 127, 0.5), rgba(127, 127, 127, 1)); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(left, rgba(127, 127, 127, 0.5), rgba(127, 127, 127, 1)); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(left, rgba(127, 127, 127, 0.5), rgba(127, 127, 127, 1)); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to left, rgba(127, 127, 127, 0.5), rgba(127, 127, 127, 1)); /* Standard syntax (must be last) */

}
div.autokader img {
    width: 120px;
    margin: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    height: 65px;
}

div.autokader p.merktype {
    color: #FFF8DC;
    background-color: green;
    text-align: center;
    margin: 0;
}

div.autokader p.prijs {
    color: blue;
    text-align: right;
    margin-right: 1em;
}

div#autoselectie {
    max-width: 1200px;
}</style>

<body>
<a href="http://thomas-portfolio.appspot.com/">portfolio</a>
	<form method="post">
		<input type="text" name="min" placeholder="Minimum prijs">
		<input type="text" name="max" placeholder="Maximum prijs">
		<select name="merk">
			<option value="alle">Alle merken</option>
			<?php
				$merken = array();
				foreach ($lijst as $auto) {
					if (!in_array($auto->getMerk(), $merken)) {
						array_push($merken, $auto->getMerk());
					}
				}
				foreach ($merken as $merk) {
					echo "<option value=".$merk.">".$merk."</option>";
				}
			?>
		</select>
		<input type="submit" name="submit" value="OK">
	</form>

	<?php
		foreach ($lijst as $auto) {
			if (
				!isset($_POST["submit"])
				|| (
					isset($_POST["submit"])
					&& ($auto->getPrijs() >= $_POST["min"] || $_POST["min"] == "")
					&& ($auto->getPrijs() <= $_POST["max"] || $_POST["max"] == "")
					&& ($auto->getMerk() == $_POST["merk"] || $_POST["merk"] == "alle")
				)
			) {
				echo "<div class='autokader'>";
					echo "<p class='merktype'>".$auto->getMerk()." ".$auto->getType()."</p><br>";
					echo "<p class='prijs'>&euro;".$auto->getPrijs().",-</p><br>";
					echo "<img src='".$auto->getFotoURL()."'><br><br>";
				echo "</div>";
			}
		}
	?>
</body>
