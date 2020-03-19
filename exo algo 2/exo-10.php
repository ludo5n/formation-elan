<?php
$nomsInput=array("Nom","Prenom","Ville","age","sexe","email");

function afficherInput($tab){
    
echo "<form >" ;
    foreach($tab as $value)
    {
           echo "<label for='$value'>$value</label><br><input type='text' name='$value'></input> <br/>";
        };
        $elements = array("Développeur web","Designer web","Intégrateur web","Full stack","Chef de projet");
        echo'<select name=$value>';
        foreach($elements as $value)
        {
            echo  '<option value="'.$value.'">'.$value.'</option>';
         }
    echo '</select>';
  echo"  <input type='submit' value='Validez'>";
 }
echo'</form>';

afficherInput($nomsInput);

?>