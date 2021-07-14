<?php class Personnage 
{
    private $nom;
    private $vie;
    private $force;
    private $intel;
    private $mana;
    private $niveau = 1;
    private $experience = 0;

    //constructeur
    public function __construct($nom, $vie, $force, $intel, $mana){
        echo 'Bienvenu, votre personnage a été créé !';
        $this->setNom($nom);
        $this->setVie($vie);
        $this->setForce($force);
        $this->setIntel($intel);
        $this->setMana($mana);
    }

    //accesseur
    public function nom()
    {
        return $this->_nom;
    }
    public function vie()
    {
        return $this->_vie;
    }
    public function force()
    {
        return $this->_force;
    }
    public function intel()
    {
        return $this->_intel;
    }
    public function mana()
    {
        return $this->_mana;
    }
    public function niveau()
    {
        return $this->_niveau;
    }
    public function experience()
    {
        return $this->_experience;
    }

    //mutateur
    private function setNom($nom)
    {
        $this->_nom = $nom;
    }
    public function setVie($vie)
    {
        $this->_vie = $vie;
    }
    public function setForce($force)
    {
        $this->_force = $force;
    }
    public function setIntel($intel)
    {
        $this->_intel = $intel;
    }
    public function setMana($mana)
    {
        $this->_mana = $mana;
    }


    //methodes
    public function afficherExperience()
    {
        echo $this->_experience;
    }

    public function gagnerExperience($xp)
    {
        $this->_experience = $this->_experience + $xp;
    }
}

?>