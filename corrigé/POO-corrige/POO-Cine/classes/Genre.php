<?php

/**
 * Class Genre
 */
class Genre {

    // Attributs
    private $nomGenre;
    private $films; // Film[]

    // Constructeur
    /**
     * @param [string] $nomGenre
     */
    public function __construct($nomGenre){
        $this->nomGenre = $nomGenre;
        $this->films = [];
    }

    // Getters et setters
    public function getNomGenre(){
        return $this->nomGenre;
    }

    /**
     * @param Film $f
     */
    public function ajouterFilm(Film $f){
        $this->films[] = $f;
    }

    public function listerFilms(){
        echo "<h3>Liste des films dans le genre <strong>".$this->getNomGenre()."</strong> (".count($this->films).")</h3>";
        echo "<ul>";
            foreach($this->films as $film){
                echo "<li>$film</li>";
            }
        echo "</ul>";
    }
}