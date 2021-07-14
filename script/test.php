<?php

require '../classes/bdd.php';

echo 'je suis dans le script de test. <br>';

$bdd = new Database();
$bdd->connect();