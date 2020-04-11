<?php
$elements = array("Monsieur","Madame","Mademoiselle");
function alimenterListeDeroulante($elements){
echo '<form>';
echo '<select name=$value>';
 foreach($elements as $value){
    echo  '<option value="'.$value.'">'.$value.'</option>';
         }
  echo '</select>';
 }
echo'</form>';

alimenterListeDeroulante($elements);
?>

