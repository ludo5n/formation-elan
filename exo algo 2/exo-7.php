<?php 

   
   $elements = ["choix1" => "", "choix2" => "checked", "choix3" => ""];
   function genererCheckbox($elements){
   foreach ($elements as $key => $value){
     echo "<input type='checkbox' name='$key' $value>$key<label for='$key'></label><br/>"; 
         }// ne pas oublier que input est orphelin , il n'existe pas de </input>! merci virgile!
   }
genererCheckbox($elements);

?>