<?php

abstract class Personnage
{
    private int $vie;
    private int $force;
    private int $intel;
    private int $mana;
    private string $nom;
    private int $experience;
    private int $niveau;

    public function __construct(string $nom, int $vie, int $force, int $intel, int $mana)
    {
        echo 'Bienvenu, votre personnage a été créé !';
        $this->vie = $vie;
        $this->force = $force;
        $this->intel = $intel;
        $this->mana = $mana;
        $this->nom = $nom;
    }


    //methodes
    public function afficherExperience()
    {
        echo $this->experience;
    }

    public function gagnerExperience(int $xp)
    {
        $this->experience = $this->experience + $xp;
        $limit = $this->getLimitXp($this->niveau);
        if ($this->experience > $limit) {
            $this->experience = $this->experience - $limit;
            $this->levelUp();
        }
    }

    private function getLimitXp(int $lvl): int
    {
        return 100 + 25 * $lvl;
    }

    public function levelUp()
    {
        $this->niveau++;
        $this->setForce($this->getforce() + 2);
        $this->setVie($this->getVie() + 2);
        $this->setIntel($this->getIntel() + 2);
        $this->setMana($this->getMana() + 2);
    }

    public function getForce(): int
    {
        return $this->force;
    }

    public function setForce(int $force): void
    {
        $this->force = $force;
    }

    public function getVie(): int
    {
        return $this->vie;
    }

    public function setVie(int $vie): void
    {
        $this->vie = $vie;
    }

    public function getIntel(): int
    {
        return $this->intel;
    }

    public function setIntel(int $intel): void
    {
        $this->intel = $intel;
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): void
    {
        $this->mana = $mana;
    }

    public function save(Database $bdd): void
    {
        $bdd->getPDO()->query()
    }

}