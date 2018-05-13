<?php 
	
	function afficherBonjour($name) {
		echo '<p>Bonjour ' . $name . '</p>'; 
	}

	function calculAir($long, $largeur) {
		$air = $long * $largeur;
		return $air;
	}


 ?>