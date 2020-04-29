<?php

/**
 * Class Film
 */
class Film {

    // Attributs
    private $titre;
    private $dateSortieFrance;
    private $dureeMinutes;
    private $synopsis;
    private $realisateur; // Objet Realisateur
    private $genre; // Objet Genre
    private $castings; // Distribution d'un film (objet Casting)
 
    // Constructeur
    /**
     * @param [string] $titre
     * @param [string] $dateSortieFrance
     * @param [int] $dureeMinutes
     * @param [string] $synopsis
     * @param Realisateur $realisateur
     * @param Genre $genre
     */
    public function __construct($titre, $dateSortieFrance, $dureeMinutes, $synopsis, Realisateur $realisateur, Genre $genre){
        $this->titre = $titre;
        $this->dateSortieFrance = new DateTime($dateSortieFrance);
        $this->dureeMinutes = $dureeMinutes;
        $this->synopsis = $synopsis;
        $this->realisateur = $realisateur;
        $this->genre = $genre;
        $this->castings = [];
        $realisateur->ajouterFilm($this);
        $genre->ajouterFilm($this);
    }

    // Getters et setters
    public function getTitre(){
        return mb_strtoupper($this->titre);
    }

    public function getDateSortieFrance(){
        return $this->dateSortieFrance;
    }

    public function getDuree(){
        return date('H:i', mktime(0, $this->dureeMinutes));
        /* ou
            $duree = new DateTime();
            $duree->setTime(0, $this->dureeMinutes);
            return $duree->format('H:i');
        */
    }

    public function getSynopsis(){
        return $this->synopsis;
    }
 
    public function getRealisateur(){
        return $this->realisateur;
    }

    public function getGenre(){
        return $this->genre->getNomGenre();
    }

    public function getAnciennete(){
        $today = new DateTime();
        $anciennete = $today->diff($this->getDateSortieFrance());
        return $anciennete->format('%Y') . " ans";
    }

    /** 
     * @param Casting $c
     */
    public function ajouterCasting(Casting $c){
        $this->castings[] = $c; 
    }

    public function afficherActeurs(){
        echo "<h3>Liste des acteurs de <strong>".$this->getTitre()."</strong></h3>";
        if(count($this->castings) > 0){
            foreach($this->castings as $casting){
                echo $casting->getActeur()." (".$casting->getRole()->getNomRole().")<br/>";
            }
        }else{
            echo "Aucun casting défini";
        }
    }

    /**
     * @return string
     */
    public function __toString(){
        return $this->getTitre()." - "
            .$this->dateSortieFrance->format('d/m/Y')." (".$this->getAnciennete().") 
                <strong>Durée : ".$this->getDuree()."</strong>";
    }
}