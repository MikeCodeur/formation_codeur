<?php
include 'mesFunctions.php';
try {
    
	$dbh = getDatabaseConnexion();
	$requete = 'SELECT * from utilisateurs';
	$rows = getAllUsers();
    foreach($rows as $row) {
        afficherLigne($row);
        //print_r($row);
    }

    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
//createUser('dav','eee','c' ,19, '15 rueddd');
updateUser(1,'updatedav','eee','c' ,19, '15 rueddd');
$user = readUser('2');
//deleteUser('2');
var_dump($user['nom']);die;


function afficherLigne($row) {
	//print_r( $row['nom']);
	echo 'nom : ' .  $row['nom'];
	echo '<br />';
	echo 'prenom: ' . $row['prenom'];
	echo '<br />';
}

?>