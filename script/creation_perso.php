<?php
require '../classes/bdd.php';
require '../src/models/personnage.php';
require '../src/models/guerrier.php';
require '../src/models/magicien.php';
require '../src/models/ranger.php';

$class = $_POST['classe'];

$bdd = new Database();
$bdd->connect();

if ($class === 'guerrier')
{
    $perso = new Guerrier($_POST['nom'],100, 5, 5, 50);
}
elseif ($class === 'magicien')
{
    $perso = new Magicien($_POST['nom'],100, 5, 5, 50);
}
elseif ($class === 'ranger')
{
    $perso = new Ranger($_POST['nom'],100, 5, 5, 50);
}
else{
    echo 'pas de classe choisie !';
}

$perso->save($bdd);

