<?php

class Voiture {

    // variables
    protected $marque;
    protected $modele;
    protected $nbPortes;
    protected $vitesse = 0;

    // contact éteint de base
    protected $contact = false;

    // constructeur
    public function __construct($marque, $modele, $nbPortes) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->nbPortes = $nbPortes;
    }

    // nous retourne un vrai/faux
    public function getDemarrer() {
        return $this->contact;
    }

    // permet de démarrer, avec vérification de la vateur du contact
    public function demarrer() {
        // on vérifie la négation (false)
        if(!$this->getDemarrer()) {
            $this->contact = true;
            $rep = "Le véhicule démarre...<br>";
        } else {
            $rep = "Le véhicule est déjà démarré...<br>";
        }
        return $rep;
    }

    // couper de contact avec vérif contact
    public function couper() {
        if($this->getDemarrer() && $this->vitesse == 0)
            $this->contact = false;
    }

    // accelerer, avec vérif contact
    public function accelerer($value) {
        if($this->getDemarrer())
            $this->vitesse += $value;
    }

    // ralentir avec verif contact et vitesse != 0
    public function ralentir($value) {
        if($this->getDemarrer() && $this->vitesse != 0)
            $this->vitesse -= $value;
    }



}