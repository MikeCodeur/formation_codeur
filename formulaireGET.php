<?php

	$nom = $_GET["name"];
	$prenom = $_GET["prenom"];
	$id = $_GET["id"];
	$adresse = $_GET["adresse"];
	echo 'Bonjour ' . $nom . '  -  '.$prenom. '!';


	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tuto_php";

	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    // set the PDO error mode to exception
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    
	    $sql = "INSERT INTO user (nom, prenom, id, adresse)
	    VALUES ('$nom', '$prenom', '$id', '$adresse')";
	    // use exec() because no results are returned
	    $conn->exec($sql);
	    echo "New record created successfully";
	    }
	catch(PDOException $e)
	    {
	    echo $sql . "<br>" . $e->getMessage();
	    }

$conn = null;


?>