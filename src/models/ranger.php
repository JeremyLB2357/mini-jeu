<?php

class Ranger extends Personnage
{

    public function levelUp(){
        parent::levelUp();
        $this->setForce($this->getforce()+1);
        $this->setIntel($this->getIntel()+1);
    }
}