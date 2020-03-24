<?php
class Voiture { 
    private $marque;
    private $modele;
    private $nbPortes;
    private $vitesseActuelle= 0;
        public function __construct($marque,$modele,$nbPortes){
            $this->marque = $marque;
            $this->modele = $modele;
            $this->nbPortes = $nbPortes;
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
        if (getdemarrer==true){
            $voitinfo="le vehicule est démarré ,sa vitesse actuelle est de ".$this->getvitesseActuelle."km";
        
        }return $voitinfo;
    }
    public function getdemarrer()
    {
            return "le véhicule".$this->marque."".$this->modele."démarre"; 
    }
    public function ralentir()
    {
        $ralenti= getvitesseActuelle() - ralentir();
        $ralenti=$this->marque.$this->modele."ralenti de ".ralentir()."km"; 
        return $ralenti;
    }
    public function getstopper()
    {
            return "Le véhicule".$this->marque."".$this->modele."est stoppé";
    }
    public function setaccelerer()
    {
        if(getdemarrer== true)
            {
                  echo"le vehicule".$this->marque."".$this->modele."veut accelerer de".setaccelerer()."km,"."<br>
                  Pour accelerer,ilfaudrait deja démarrer le vehicule".$this->marque.$this->modele."!";
             }else{
        return "Le véhicule".$this->marque."".$this->modele." accélere de ".setaccelerer()."km";
            }
    }
    public function getvitesseActuelle(){
       
        if (getdemarrer ==true)
        {
             $vitesseActuelle =$this->setaccelerer()+$this->setaccelere();
      echo   $vitessseActuelle="La vitesse actuelle du vehicule est de ".$this->$vitesseActuelle."km.";
           }else{
         return      $dermarrela="le vehicule est a l'arret,sa vitesse actuelle est de".$this->vitesseActuelle."km.";
        }
          
    }
}
 $v1=new Voiture ("peugeot", "408",5);
 $v2=new Voiture ("Citroen","c4",3);
 $v1->getdemarrer();
?>