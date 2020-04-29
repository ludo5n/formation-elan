<?php

    abstract class Character
    {
        //propriétés de la classe = données
        private $nom;
        private $race;
        private $sexe;

        const START_LEVEL = 1;
        const MAX_LEVEL = 40;

        //méthodes de la classe = comportement
        public function __construct($nom, $race, $sexe){
            $this->nom = $nom;
            $this->race = $race;
            $this->sexe = $sexe;
        }
       
        public function getNom(){//accesseur (ou getter)
            return $this->nom;
        }

        public function getRace(){
            return $this->race;
        }

        public function setRace($race){
            $this->race = $race;
        }

        public function getSexe(){
            return $this->sexe;
        }

        public function __toString(){
            return $this->nom. " ($this->sexe)";
        }
    }
