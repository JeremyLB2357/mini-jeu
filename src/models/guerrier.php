<?php

class Guerrier extends Personnage
{

    public function levelUp(){
        parent::levelUp();
        $this->setForce($this->getforce()+3);
    }
}