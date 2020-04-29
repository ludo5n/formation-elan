<?php

/**
 * Class Realisateur
 */
class Realisateur extends Personne {

    //Attributs
    private $films; // Filmographie d'un réalisateur (Film[])

    //Constructeur
    /**
     * @param [string] $nom
     * @param [string] $prenom
     * @param [string] $sexe
     * @param [string] $dateNaissance
     */
    public function __construct($nom, $prenom, $sexe, $dateNaissance){
        // héritage du constructeur de Personne
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->films = [];
    }

    // Getters et setters
    public function getFilms(){
        return $this->films;
    }

    /**
     * @param Film $f
     */
    public function ajouterFilm(Film $f){
        $this->films[] = $f;
    }

    public function afficherFilmographie(){
        echo "<h3>Filmographie de <strong>".$this."</strong> (".$this->getAge()." ans)</h3>";
        (count($this->getFilms())==0) ? $compteFilms="Aucun film pour ce réalisateur" : $compteFilms = count($this->getFilms());
        
        echo "Nombre de films <span class='uk-badge badge-color'>".$compteFilms."</span>";
        echo "<ul class='uk-list uk-list-striped'>";
            foreach($this->getFilms() as $film){
                echo "<li>$film</li>";
            }
        echo "</ul>";
    }
}