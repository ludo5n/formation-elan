<?php
$tableau =["Monsieur","Madame","Mademoiselle"];
function afficherRadio($key)
{
    
 echo '<form>';
foreach ($key as $value)
   {
//  echo '<input type="radio" name="" id="" ><label for="">'$value'</label><br>';
echo"<input type='radio' id='$value' name='gender' value='$value'>
<label for='$value'>$value</label><br>";

    }
  echo '</form>';
}

afficherRadio($tableau);
?>
