<?php

class Database
{
    //attribut
    private $host;
    private $name;
    private $user;
    private $password;
    private $bdd;

    //constructeur
    public function __construct(){
        $this->_host = 'localhost';
        $this->_name = 'mini-jeu_php';
        $this->_user = 'root';
        $this->_password = '';
    }
    //accesseur

    //mutateur
    private function setBdd()
    {
        $this->_bdd = new PDO('mysql:host=' . $this->_host . ';dbname=' . $this->_name . ';charset=utf8', $this->_user, $this->_password);
    }

    //methode
    public function connect()
    {
        try 
        {
            $this->setBdd();
            echo 'connexion réussi';
        }
        catch (PDOException $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}