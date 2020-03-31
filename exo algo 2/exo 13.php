exo<?php
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
        // public function __toString(){
        //     return "La voiture " . $this->getMarque()." ".$this->getModele()." possède ".$this->getNbPortes(). " portes";
        // }
        public function infovehicule(){
            return "La voiture " . $this->getMarque()." ".$this->getModele()." possède ".$this->getNbPortes(). " portes "."<br>". $this->demarrer(). $this->getvitesseActuelle();
        }
        public function getDemarrer()
    {
        return $this->statut;
    }
     public function demarrer()
     {
         if(!$this->getDemarrer()){
            $this->statut = true;
            echo  "La". $this->getMarque() . "est demarré"."<br>";
         }else{
             echo "La voiture " . $this->getMarque(). " ".$this->getModele().  "est déja démarré"."<br>";
         }
     }
     public function getstopper()
    {
        if($this->getDemarrer() && $this->vitesse == 0)
             $this->statut= false;
        return "Le véhicule"."". $this->marque ."". $this->modele ."est stoppé"."<br>";
    }
    public function setaccelerer($value)
    {
        if($this->getDemarrer())
            {
               $this->vitesseActuelle += $value;
                $vitesse="Le véhicule".$this->marque."".$this->modele." accélere de ".$value."km"."<br>";
             }else{
                 $vitesse= "le vehicule". $this->marque . "" . $this->modele."veut accelerer de". $value."km,"."<br>
                  Pour accelerer,il faudrait deja démarrer le vehicule".$this->marque.$this->modele."!";
            }
            return $vitesse;
    }
    public function getvitesseActuelle(){
       
        if ($this->getDemarrer())
        { 
                    
         $donnedujus="La vitesse actuelle de". $this->marque."".$this->modele . "   est de ".$this->vitesseActuelle."km.";
           }else{

             $donnedujus="le vehicule". $this->marque."".$this->modele ."est a l'arret,sa vitesse actuelle est de".$this->vitesseActuelle."km.";
        }
           return $donnedujus;
     
    }
    public function ralentir($value)
    {
        if($this->getDemarrer() && $this ->vitesseActuelle !=0)
        {
        $ralenti= $this->vitesseActuelle -= ($value);
        $ralenti=$this->marque.$this->modele."ralenti de ".$value."km"; 
      } else{
        $ralenti= "La voiture est arrétée ,  tu peux freiner mais ca ne sert a rien";
      }
   return  $ralenti;
    }
}
$v1 = new Voiture("Peugeot","508",5);// jamais mettre de br quand jon cree une une instance
$v2 = new Voiture("Renault","Modus",3);

// echo $v1->getDemarrer();
echo $v1->demarrer();
echo $v1->setaccelerer(50);
// echo $v2->getDemarrer();
echo $v2->getstopper();
echo $v2->setaccelerer(20);
echo $v1->getvitesseActuelle();
echo $v2->getvitesseActuelle();
echo $v1->infovehicule();
echo $v2->infovehicule();

 ?>