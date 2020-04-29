<?php

    class PNJ extends Character{

        private $fonction;

        public function __construct($nom, $race, $sexe, $fonction){
            parent::__construct($nom, $race, $sexe);
            $this->fonction = $fonction;
        }

        /**
         * Get the value of fonction
         */ 
        public function getFonction(){
            return $this->fonction;
        }

        /**
         * Set the value of fonction
         *
         * @return  self
         */ 
        public function setFonction($fonction){
            $this->fonction = $fonction;
            return $this;
        }
    }