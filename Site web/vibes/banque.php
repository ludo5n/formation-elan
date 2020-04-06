<?php
class Compte{
    private $libelle;
    private $solde=100;
    private $devise=€;
    private $Titulaire;
        public function__construct($libelle,$solde,$devise,$Titulaire){
            
            $this->libelle = $libelle;
            $this->solde = $solde;
            $this->devise = $devise;
             $compte = [$this->libelle, $this->solde, $this->devise, $this->numero];
            array_push($Titulaire->comptes, $compte);
        }
        public function getLibelle(){
            return $this->libelle; 
        }
        public function setSolde(){
            return $this->solde;
        }
        public function getDevise(){
            return $this->devise;
        }
        public function getTitulaire(){
            return $this->Titulaire;
        }


}