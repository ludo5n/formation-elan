<?php

class VoitureEssence extends Voiture {

    protected $reservoir;

    public function __construct($marque, $modele, $nbPortes, $reservoir) {

        parent::__construct($marque, $modele, $nbPortes);
        $this->reservoir = $reservoir;

    }
    public function __toString() {
			
        return parent::__toString()."possedant un reservoir de".$this->reservoir."litre";
    }
}
?>