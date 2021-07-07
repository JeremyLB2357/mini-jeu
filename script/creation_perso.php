<?php

require './classes/personnage.php';

$perso = new Personnage(100, 5, 5, 50);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=mini-jeu_php;charset=utf8', 'root', '');
}
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM personnages');

while ($data = $reponse->fetch())
{
    echo 'nom : ' . $data['nom'];
    echo 'niveau : ' . $data['niveau'];
}
?>