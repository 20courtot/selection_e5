<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=selection;charset=utf8', '20courtot', '20courtot');
} catch (Exception $e) {
    exit('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('SELECT identifiant, mdp, type_de_compte FROM utilisateur WHERE identifiant = :identifiant');
$req->execute([
    'identifiant' => $_POST['username'], ]);
$resultat = $req->fetch();

if ($_POST['username'] == $resultat['identifiant'] && $_POST['password'] == $resultat['mdp'] && 'secretaire' == $resultat['type_de_compte']) {
    include 'secretaire.php';
} elseif ($_POST['username'] == $resultat['identifiant'] && $_POST['password'] == $resultat['mdp'] && 'administrateur' == $resultat['type_de_compte']) {
    include 'admin.php';
} elseif ($_POST['username'] == $resultat['identifiant'] && $_POST['password'] == $resultat['mdp'] && 'evaluateur' == $resultat['type_de_compte']) {
    include 'evaluateur.php';
} else {
    header('Location: index.php?erreur=1');
}
