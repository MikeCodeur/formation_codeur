<?php
	include 'mesFunctionsSQL.php';
	include 'mesFunctionsTable.php';
	
	$id = $_GET["id"];
	if ($id == 0) {
		$user = getNewUser();
		$action = "CREATE";
		$libelle = "Creer";
	} else {
		$user = readUser($id);
		$action = "UPDATE";
		$libelle = "Mettre a jour";
	}
	
	


?>

<html>
<header>
	<link rel="stylesheet" href="style.css">
</header>
<body>

		
	<form action="createUpdate.php" method="get">
	<p>	
		<a href="index.php">Liste des utilisateurs</a>

		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<input type="hidden" name="action" value="<?php echo $action;  ?>"/>
		 <div>
        	<label for="name">Nom :</label>
        	<input type="text" id="nom" name="nom" value="<?php echo $user['nom'];  ?>">
	    </div>
	    <div>
	        <label for="prenom">Prenom</label>
	        <input type="text" id="prenom" name="prenom" value="<?php echo $user['prenom'];  ?>">
	    </div>
	    <div>
	        <label for="age">Age:</label>
	        <input type="text" id="age" name="age" value="<?php echo $user['age'];  ?>">
	    </div>
	    <div>
	        <label for="adresse">adresse :</label>
	        <textarea id="adresse" name="adresse" placeholder="<?php echo $user['adresse'];  ?>"></textarea>
	    </div>
		<div class="button">
			<button type="submit"><?php echo $libelle;  ?></button>
		</div>
	</p>
	</form>
	<br>

	<?php if ($action!="CREATE") { ?>
	<form action="createUpdate.php" method="get">
		<input type="hidden" name="action" value="DELETE"/>
		<input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
		<p>
		<div class="button">
			<button type="submit">Supprimer</button>
		</div>
		</p>
	</form>
	<?php } ?>

</body>
</html>