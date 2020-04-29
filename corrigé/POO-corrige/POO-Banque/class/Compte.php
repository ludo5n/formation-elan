<?php

class Compte {

    private $_libelle;
    private $_solde;
    private $_devise;
    private $_titulaire;

    public function __construct($libelle, $solde, $devise, $titulaire) {
        $this->_libelle = $libelle;
        $this->_solde = $solde;
        $this->_devise = $devise;
        $this->_titulaire = $titulaire;
        $titulaire->affecterCompte($this);
    }

    public function getLibelle(){
        return $this->_libelle;
    }

    public function getSolde(){
        return $this->_solde;       
    }

    public function getDevise(){
        return $this->_devise;
    }

    public function getTitulaire(){
        return $this->_titulaire;
    }

    public function debiter($montant){
        $this->_solde -= $montant;
    }

    public function crediter($montant){
        $this->_solde += $montant;
    }

    public function virement(Compte $c, $montant){
        $this->debiter($montant);
        $c->crediter($montant);
    }

    public function infosCompte(){
        echo "Le compte $this->_libelle d'un solde de $this->_solde $this->_devise appartient à $this->_titulaire";
    }
}