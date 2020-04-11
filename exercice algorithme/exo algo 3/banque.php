<?php
class Compte{
    private $libelle;
    private $solde=100;
    private $devise="€";
    private $Titulaire;
    private $numero;
        public function __construct(string $libelle, int $solde, string $devise,$Titulaire, int $numero){
            $this->libelle = $libelle;
            $this->solde = $solde;
            $this->devise = $devise;
            $this->numero = $numero;
            $this->Titulaire =$Titulaire;
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
        public function getnumero(){
            return $this->numero;
        }
        public function __toString()
        { 
             $display =  $this->libelle $this->solde $this->devise $this->numero $this->Titulaire;
            // Il detient les comptes suivant : <br><br>";
            // // foreach ($this->account as $value) {
            // //     $display .= "$value<br>";
            // // }
            return $display ;
        }

}