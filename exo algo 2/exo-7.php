<?php 

$elements = ["choix1" => "", "choix2" => "", "choix3" => "checked"];

function genererCheckbox($elements){
   foreach ($elements as $key => $value){
     echo "<input type='checkbox'name=''> $key  </input><label for='$key'>$value</label><br/>";
         } 
   }
genererCheckbox($elements);
?>