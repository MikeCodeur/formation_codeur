<!DOCTYPE html>
<html>
    <head>
        <title>CRUD PHP</title>
    </head>

    <body>
    
	<?php
		include 'mesFunctionsSQL.php';
		include 'mesFunctionsTable.php';

		$headers = getHeaderTable();
		$users = getAllUsers();
		afficherTableau($users, $headers);
	?>

	<a href=formulaireUtilisateur.php?id=0 >Creer un user</a> 
    </body>
</html>

