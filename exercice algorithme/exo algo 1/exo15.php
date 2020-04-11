<?php
echo "exo15 <br>";
 class Personne {
  private $_nom;
  private $_prenom;
  private $_date_de_naissance;
    
     public function __construct($nom,$prenom,$date_de_naissance){
  $this->_nom=$nom;
  $this->_prenom=$prenom; 
  $this->_date_de_naissance=$date_de_naissance;
        
}
 public function sePresenter(){
 $date = new DateTime("now");
 $date1 = new DateTime($this->_date_de_naissance); // soustraction du temps date 1 avec la date reelle
 $diff= date_diff($date1,$date);

        echo  $this->_nom." ".$this->_prenom."".$diff->format(" a %Y ans.<br>");
     }
       
 }

 $p1= new Personne("DUPOND" , "Michel", "1980-02-19");
 $p2= new Personne( "DUCHEMIN", "Alice", "1985-01-17");
 $p1-> sePresenter();
 $p2-> sePresenter(); // on appelle la fonction
 ?>
<?php
// //on peux utiliser la methode
// public function__toString(){
//    return this->_nom."".this->_prenom
//    pour avoir un raccourcis en faisant echo $p1(qui remplace this->_nom)
// }
