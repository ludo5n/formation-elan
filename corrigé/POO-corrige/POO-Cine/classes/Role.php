<?php

/**
 * Class Role
 */
class Role {

    // Attributs
    private $nomRole; // Nom du personnage
    private $castings; // liste des acteurs ayant joué le rôle dans tel film (objet Casting)

    // Constructeur
    /**
     * @param [string] $nomRole
     */
    public function __construct($nomRole){
        $this->nomRole = $nomRole;
        $this->castings = [];
    }

    // Getters et setters
    public function getNomRole(){
        return $this->nomRole;
    }

    public function getCastings(){
        return $this->castings;
    }

    /**
     * @param Casting $c
     */
    public function ajouterCasting(Casting $c){
        $this->castings[] = $c;
    }

    public function afficherCasting(){
        echo "<h3>Liste des acteurs qui ont incarnés <strong>".$this->getNomRole()."</strong></h3>";
        if(count($this->getCastings()) > 0){
            foreach($this->getCastings() as $casting){
                echo "<strong>".$casting->getActeur()."</strong> dans ".
                    $casting->getFilm()->getTitre()." (".
                    $casting->getFilm()->getDateSortieFrance()->format('Y').")<br/>";
            }
        }else{
            echo "Aucun acteur défini pour ce rôle";
        }
        
    }
}