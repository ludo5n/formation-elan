<?php

class Titulaire {

    private $_nom;
    private $_prenom;
    private $_dateNaissance;
    private $_ville;
    private $_comptes;

    public function __construct($nom, $prenom, $dateNaissance, $ville){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = $dateNaissance;
        $this->_ville = $ville;
        $this->_comptes = [];
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getPrenom(){
        return $this->_prenom;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }

    public function getVille(){
        return $this->_ville;
    }

    public function getComptes(){
        foreach($this->_comptes as $compte){
            echo $compte->getLibelle();
        }
    }

    public function affecterCompte($c){
        $this->_comptes[] = $c;
    }

    public function __toString(){
        return $this->_prenom." ".$this->_nom;
    }
}