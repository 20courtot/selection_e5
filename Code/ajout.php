<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=selection;charset=utf8', '20courtot', '20courtot');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}


$req = $bdd->prepare('INSERT INTO utilisateur(identifiant,mdp,type_de_compte) VALUES(:identifiant, :mdp, :type_de_compte)');
$req->execute(array(
	'identifiant' => $_POST['username_create'],
	'mdp' => $_POST['password_create'],
	'type_de_compte' => $_POST['type_create'],
    ));
?>

<?php
header('Location: admin.php?mess=1');
$reponse->closeCursor(); // Termine le traitement de la requête

?>

