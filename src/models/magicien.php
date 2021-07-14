<?php

class Magicien extends Personnage
{

    public function levelUp(){
        parent::levelUp();
        $this->setIntel($this->getIntel()+3);
    }
}