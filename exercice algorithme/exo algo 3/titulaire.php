<?php
Class Titulaire{
    private $nom;
    private $prenom;
    private $date_de_naissance;
    private $ville;
    public $comptes=[];
    public $age;
        public function __construct($nom,$prenom,$date_de_naissance,$ville){
          
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
        // public function getDate_de_naissance(){
        //     $date = new DateTime("now");
        //     $date1 = new DateTime($this->date_de_naissance); // soustraction du temps date 1 avec la date reelle
        //     $diff= date_diff($date1,$date);

        //     return  $diff->format("  %Y ");
        // }
        public function getage(){
            return $this->age;
        }
        public function setage($value){
            $this->age =$value;
        }
            public function getcalculage($date_de_naissance){
            $interval = date_diff(new DateTime($this->$date_de_naissance()), new DateTime("now"));
            $age = $interval->format("%y");
            return $age;
        }
            
        public function getVille(){
            return $this->$ville;
        }
        
            public function getInfos() {
                $clientDatas = [$this->nom, $this->prenom, $this->date_de_naissance, $this->ville, $this->comptes];
                return $clientDatas;
        }
        
        









}
