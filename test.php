<html>
 <head>
  <title>Test PHP</title>
 </head>
 <body>

 <?php 
	$name = 'French Mike'; 
	$sexe = "femme";
	echo '<p>Bonjour ' . $name . '</p>'; 
	if ($sexe == "homme") {
		echo '<p>tu es un homme </p>'; 
	} else {
		echo '<p>tu es une femme </p>'; 
	}

	for ($nombre_de_lignes = 1; $nombre_de_lignes <= 1; $nombre_de_lignes++)	{
	    echo 'Ceci est la ligne n°' . $nombre_de_lignes . '<br />';
	}

	$foo = array('bar' => 'baz');
echo "Hello {$foo['bar']}!"; // Hello baz!
 	

 ?>

 </body>
</html>