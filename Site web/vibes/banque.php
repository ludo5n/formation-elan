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

        public function __toString()
        {
            
            $display = "La banque s'appelle 
            $this->libelle qui a un solde de  $this->solde quib est en devise $this->devise , 
            de numero $this->numero, dont le titutalaire est $this->Titulaire<br>
            Il detient les comptes suivant : <br><br>";
            // foreach ($this->account as $value) {
            //     $display .= "$value<br>";
            // }
            return $display;
        }

}