<?php

require './classes/personnage.php';

$champ_bataille = new champ_bataille();
$champ_bataille->retrieve_character();
$champ_bataille->fight();

$perso = new Personnage(100, 5, 5, 50);

try {
    $bdd = new PDO('mysql:host=localhost;dbname=mini-jeu_php;charset=utf8', 'root', '');
}
catch (PDOException $e){
    die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM personnages');

while ($data = $reponse->fetch())
{
    echo 'nom : ' . $data['nom'];
    echo 'niveau : ' . $data['niveau'];
}
$reponse = $bdd->query('SELECT * FROM personnages');
while ($data = $reponse->fetch(PDO::FETCH_OBJ))
{
    var_dump($data);
}
