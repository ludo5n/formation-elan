<?php
$nom='hello';
echo $nom;
// toujours rajouter un ; en fin d'ecriture php
?><br>
 exo 1; <br>
<?php
$phrase="Notre formation DL commence aujourd'hui";

echo "La phrase ".$phrase." contient ". strlen($phrase). " caracteres.";// ajouter un . pour php et un + de javascript
?><br>
exo 2;<br>
<?php
echo  'La phrase Notre formation DL commence aujourdhui contient ' . str_word_count($phrase). ' mots';
?><br>
exo 3; <br>
<?php
$phrase = "Notre formation DL commence aujourd'hui";
$phraseModifiee= str_replace("aujourd'hui","demain",$phrase);// en php certaine fonction doivent demander plusieurs parametres comme ici str_replace demande 3 elements
echo $phrase."<br>"; 
echo $phraseModifiee;
?><br>
exo 4;<br>
<?php $palindrome = " Karine alla en Irak";
echo $palindrome."<br>";
$palinmodifie = strtolower($palindrome);// on rend les caracteres en minuscules
echo $palinmodifie."<br>";
$palinmodifie = str_replace(' ','',$palinmodifie); // on  enleve les espaces
echo $palinmodifie."<br>";
$palinmodifie = strrev($palinmodifie); //on inverse le palindrome
echo $palinmodifie."<br>";
if ( str_replace(' ','', strtolower($palindrome))=== $palinmodifie)
{
echo "Cette phrase est un palindrome";
} else{
    echo " Cette phrase n'est pas un palindrome";
}
?>
<br>
<?php
 echo "exo 5 ;<br>";
 $prixFrancs = 100; 
echo 'Montant en Francs:'. $prixFrancs; 
$prixEuros = ($prixFrancs / 6.55957); 
echo '<br>';
echo $prixFrancs.'Francs = '.round($prixEuros,2).'euros'; //arrondi a 2 decimal pres
echo "<br>";
echo "exo 6 ;<br>";
$prixUnitaire = "9.99" ;
echo 'PrixUnitaire  = '. $prixUnitaire ."<br>";
$Quantite = 5;
echo 'quantite = 5<br>';
$TauxTva = 0.2;
echo 'TauxTva = 0.2 <br> ';
$MontantTTC = ($prixUnitaire * $Quantite) * (1 + $TauxTva);
echo 'Le Montant de la facture a regler est de '. $MontantTTC .' euros ';
echo '<br>';
echo "exo 7;<br>";
$age = 11;
if ($age<6){ 
   echo("Trop petit");
   }else if (($age == 6)|| ($age <=7)){
       echo("Poussin");
       }else if (($age == 8)|| ($age<=9)){
           echo("Pupille");
           }else if($age == 10 || $age <=11) { 
               echo("L'enfant qui a $age ans apartient a la categorie Minime"); 
               }else if ($age >11){ 
                   echo ("Cadet"); 
}
echo "exo 8; <br>";
echo 'exercice  8 <br>';
   
   $table = 8;
 
   for ( $i=0; $i<=10; $i++){ 
   echo $table  . 'x' . $i . '='. $table*$i.'<br>';
   
}
echo '<br>';
$table = 6;
$i=0;
while ($i<10){
$i++;
echo $table  . 'x' . $i . '='. $table*$i.'<br>';

}

echo "exo9;<br>";
$sexe = 1 ;
 $age =10;
  if ($sexe == 1 && $age > 20){
       echo("allez payez macron!"); 
    } else if($sexe == 2 && $age > 17 && $age<= 36){
         echo("allez payez macron!"); 
        }else {
             echo(" c'est bon tu peux baffer macron!");
             }

    echo 'exo 10; <br>';
$aPayer= 152 ;
$verse= 200;
$reste = $verse - $aPayer;
//   echo("Montant a payer " . $aPayer .'<br>'. " Montant verse ". $verse .'<br>'." Reste � payer " . $reste.'<br>');
$nb10=floor($reste/10); //4
$reste= $reste -10*$nb10;//48-4*10=8
$nb5=floor($reste/5); //1
$reste =$reste -5 *$nb5;
$nb2=floor($reste /2);//1
$reste=$reste-2 *$nb2;
echo'Montant a payer:'.$aPayer.'<br>'
.'Montant verse:'.$verse.'<br>'
.'Reste:'.($verse - $aPayer).'<br>'
.'nb10:'.$nb10.'<br>'
.'-nb5:'.$nb5.'<br>'
.'-nb2:'.$nb2.'<br>'
.'-nb1:'.$reste.'<br>';
echo '<br>';
echo'exo 11;<br>';

$voiture=["peugeot","Renault","BMW","Mercedes"];
$tailleTableau=count($voiture);
echo" il y a " . $tailleTableau. "voitures de marque dans le tableau";



echo ("<ul>");

for ($i=0; $i<4; $i++)

echo ("<li>".$voiture[$i]);

echo("</ul>");

echo 'exo12;<br>';
$tableau = array("Micka"=>"FRA","Virgile"=>"ESP","Marie-Claire"=>"ENG");
$langue = array("salut"=>"FRA","ESP"=>"hola","ENg" =>"hello");

foreach($tableau as $key => $value) {
    // echo   $tableau[$key] . " - " . "and Name: " . $langue[$key] . "<br>";
// }
// foreach( $tableau as $key => $element)
// { 
if ($value =="FRA"){
        echo $langue  [$key]. $tableau[$key] .'<br>';
    
//         // else if ($tableau == "ESP")
//         // {
//         //     echo $element . $key. '<br>';
//         // } else if ($tableau == "ENG")
//         // {
//         // echo $element.$key.'<br>';
       
        }
}
// ca ne donne rien, j'ai un peu de mal
echo 'exo 13;<br>';
//creation du tableau contenant les notes de l'�l�ve
$notes = [10,12,8,19,3,16,11,13,9];
//on additionne toutes les notes (contenu dans le tableau)
$res = array_sum($notes);
// on affiche la somme des notes (contenu dans le tableau)
echo "la somme de toutes les notes est de : " . $res;
echo "<br>";
//on divise la somme des notes par le nombre de notes (count() permet de compter le nombre d'�l�ment dans un tableau)
$res = $res/count($notes);

echo "Les notes obtenus par l'eleve sont : " ;
foreach($notes as $element)
{
    echo $element . " "; 
}
echo "<br>";
// on affiche la moyenne arrondie. round() prend au minimum un param�tre (la valeur � arrondir) et jusqu'� trois param�tres. 
// Le deuxieme parametre de round() est le nombre de decimale apr�s la virgule
echo "La moyenne de l'eleve est de : " . round($res,2);
echo'<br>';


echo'exo 14 <br>';
$datetime1=date_create('21-05-2018');
$datetime2=date_create(date('17-01-1985'));
$interval=date_diff($datetime1,$datetime2);
echo $interval->format ("Age de la personne :%Y ans %m mois %d jours");

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


