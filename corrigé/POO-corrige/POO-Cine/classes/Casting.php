<?php

/**
 * Class Casting
 */
class Casting {

    // Attributs
    private $acteur; // Objet Acteur
    private $role; // Objet Rôle
    private $film; // Objet Film

    // Constructeur
    /**
     * @param Acteur $acteur
     * @param Role $role
     * @param Film $film
     */
    public function __construct(Acteur $acteur, Role $role, Film $film){
        $this->acteur = $acteur;
        $this->role = $role;
        $this->film = $film;
        $acteur->ajouterCasting($this);
        $film->ajouterCasting($this);
        $role->ajouterCasting($this);
    }

    // Getters et setters
    public function getActeur(){
        return $this->acteur;
    }

    public function getRole(){
        return $this->role;
    }

    public function getFilm(){
        return $this->film;
    }
}
