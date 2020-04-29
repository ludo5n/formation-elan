<?php

/**
 * Class Personne (abstract)
 */
abstract class Personne {

    // Attributs
    private $nom;
    private $prenom;
    private $sexe;
    private $dateNaissance;

    // Constructeur
    /**
     * @param [string] $nom
     * @param [string] $prenom
     * @param [string] $sexe
     * @param [string] $dateNaissance
     */
    public function __construct($nom, $prenom, $sexe, $dateNaissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->dateNaissance = new DateTime($dateNaissance);
    }

    // Getters et setters
    public function getNom(){
        //mb_strtoupper convertit en majuscules (prise en change des accents)
        return mb_strtoupper($this->nom);
    }
       
    public function getPrenom(){
        //ucfirst met le 1er caractère en majuscule
        return ucfirst($this->prenom); 
    }

    public function getSexe(){
        return $this->sexe;
    }

    public function getDateNaissance(){
        return $this->dateNaissance->format('d/m/Y');
    }

    public function getAge(){
        $today = new DateTime("now");
        return $this->dateNaissance->diff($today)->format("%Y");
    }

    /**
     * @return string
     */
    public function __toString(){
        return $this->getPrenom()." ".$this->getNom();
    }
}