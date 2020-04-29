<?php

/**
 * Class Acteur
 */
class Acteur extends Personne {

    private $castings; // Filmographie d'un acteur (objet Casting)

    // Constructeur
    /**
     * @param [string] $nom
     * @param [string] $prenom
     * @param [string] $sexe
     * @param [string] $dateNaissance
     */
    public function __construct($nom, $prenom, $sexe, $dateNaissance){
        // héritage du constructeur de Personne
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->castings = [];
    }

    // Getters et setters
    public function getCastings(){
        return $this->castings;
    }

    /**
     * @param Casting $c
     */
    public function ajouterCasting(Casting $c){
        $this->castings[] = $c; 
    }

    /**
     * @return string
     */
    public function __toString(){
        return $this->getPrenom()." ".$this->getNom();
    }

    public function afficherRoles(){
        echo "<h3>Liste des films de <strong>".$this."</strong></h3>";
        foreach($this->getCastings() as $role){
            echo "<strong>".$role->getRole()->getNomRole()."</strong> dans ".
                $role->getFilm()->getTitre()." (".
                $role->getFilm()->getDateSortieFrance()->format('Y').")<br/>";
        }
    }
}