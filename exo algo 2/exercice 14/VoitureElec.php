<?php

class VoitureElec extends Voiture {

    protected $autonomie;

    public function __construct($marque, $modele, $nbPortes, $autonomie) {

        parent::__construct($marque, $modele, $nbPortes);
        $this->autonomie = $autonomie;

    }
}