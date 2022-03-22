

<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=selection;charset=utf8', '20courtot', '20courtot');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



$req = $bdd->prepare('UPDATE grille SET statut_dossier = :statut_dossier WHERE numcand = :numcand');
$req->execute(array(
	'statut_dossier' => $_GET['statut_dossier'],
	'numcand' => $_GET['numcand'],
	));
echo $_GET['numcand']
    // header('Location: evaluateur.php?mess=1');
?>