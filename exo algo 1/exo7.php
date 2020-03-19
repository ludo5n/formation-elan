
echo "exo 7;<br>";
<?php
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
?>

<?php

$age = 5;
$cat = "";

switch(true){
    case $age >= 12: $cat = "Cadet"; break;
    case $age >= 10: $cat = "Minime"; break;
    case $age >= 8 : $cat = "Pupille"; break;
    case $age >= 6 : $cat = "Poussin"; break;
    default : $cat = "Non gérée";
}

echo "L'enfant qui a $age ans appartient à la catégorie : $cat";