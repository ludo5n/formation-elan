<?php
Class Titulaire{
    private $nom;
    private $prenom;
    private $date_de_naissance;
    private $ville;
    private $comptes=[];
        public function__construct($nom,$prenom,$date_de_naissance,$ville){
          
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_de_naissance = $date_de_naissance;
            $this->ville = $ville;
           
        }
        public function getName(){
            return $this->$nom;
        }
        public function getPrenom(){
            return $this->$prenom;
        }
        public function getDate_de_naissance(){
            $date = new DateTime("now");
            $date1 = new DateTime($this->_date_de_naissance); // soustraction du temps date 1 avec la date reelle
            $diff= date_diff($date1,$date);

            return  $diff->format("  %Y ");
        }
        public function getVille(){
            return $this->$ville;
        }
        
            public function getInfos() {
                $clientDatas = [$this->nom, $this->prenom, $this->getDate_de_naissance(), $this->ville, $this->comptes];
                return $clientDatas;
        }
        
        









}
