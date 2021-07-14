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
        $this->host = 'localhost';
        $this->name = 'mini-jeu_php';
        $this->user = 'root';
        $this->password = '';
    }
    //accesseur

    //mutateur
    private function setBdd()
    {
        $this->bdd = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->name . ';charset=utf8', $this->user, $this->password);
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

    /**
     * @return PDO
     */
    public function getPDO()
    {
        return $this->bdd;
    }
}