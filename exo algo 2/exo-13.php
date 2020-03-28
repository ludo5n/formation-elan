<?php
class Voiture { 
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle= 0;
    private $statut = false;
        public function __construct($marque,$modele,$nbPortes){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
        }
        public function getMarque(){
            return $this->marque;
        }
        public function getModele(){
            return $this->modele;
        }
        public function getNbPortes(){
            return $this->nbPortes;
        }
        public function __toString(){
            return "La voiture " . $this->getMarque()." ".$this->getModele()." possède ".$this->getNbPortes(). " portes";
        }
    
    
        public function getinfo(){
        $info=[];
        $i=0;
        for ($marque=0;$marque<sizeof($info);$marque++){
             if ($marque ){
                 $voiture=  array_push($info, $marque);
            }
        }  
        echo "info".$voiture.$i."<br>";
        echo"nom et modele du véhicule".$this->marque."".$this->model."<br>";
        echo "Nombre de porte".$this->nbPortes;
        if ($this->statut){
            $voitinfo="le vehicule est démarré ,sa vitesse actuelle est de ".$this->getvitesseActuelle."km";
        
        }
        return $voitinfo;
    }
     public function getdemarrer()
    {
        return $statut = true;
    }
        public function ralentir($valeur)
    {
        $ralenti= getvitesseActuelle() - ($value);
        $ralenti=$this->marque.$this->modele."ralenti de ".ralentir()."km"; 
        return $ralenti;
    }
    public function getstopper()
    {
        return "Le véhicule".$this->marque."".$this->modele."est stoppé";
    }
    public function setaccelerer($value)
    {
        if($this->getdemarrer)
            {
                $this->setaccelerer += $value;
                  echo"le vehicule".$this->marque."".$this->modele."veut accelerer de".$value."km,"."<br>
                  Pour accelerer,ilfaudrait deja démarrer le vehicule".$this->marque.$this->modele."!";
             }else{
        return "Le véhicule".$this->marque."".$this->modele." accélere de ".$value."km";
            }
    }
    public function getvitesseActuelle(){
       
        if ($this->getdemarrer)
        {
             $vitesseActuelle =$this->setaccelerer()+$this->setaccelere();
      echo   $vitessseActuelle="La vitesse actuelle du vehicule est de ".$this->$vitesseActuelle."km.";
           }else{
         return      $dermarrela="le vehicule est a l'arret,sa vitesse actuelle est de".$this->vitesseActuelle."km.";
        }
          
    }
}
$v1 = new Voiture("Peugeot","508",5)."<br>";
$v2 = new Voiture("Citrôen","C4",5);
echo $v1; 
echo $v2; 
 $v1-> getdemarrer();
?>