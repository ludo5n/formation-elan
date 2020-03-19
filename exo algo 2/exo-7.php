<?php 

$tableau = ["choix1" => "", "choix2" => "", "choix3" => "checked"];

function genererCheckbox($elements){
   foreach ($elements as $key => $value){
     echo "<input type='checkbox'name='$key'>$key<label for='$key'>$value</label><br/>";
         } 
   }
genererCheckbox($tableau);
?>