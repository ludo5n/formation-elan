<?php $elements = array("case1" => "", "case2" => "", "case3" => "checked");
function genererCheckbox($elements){
    // echo "<form>";
foreach ($elements as $key => $value){
     return "<input type='checkbox'name='$key'>$key </input><label for='$key'>$value</label><br/>";
     
    } ;
    // echo "</form>";
}
genererCheckbox($elements);
?>
<!-- // michka j'ai passé plusieurs heures sur cette exercice sans recherche sur internet
 ,entre les petits points ' qui font des erreurs partout et le <br/> que j'ai trouvé au hasard sans comprendre
 c'est un peu un coups de chance, faudra que tu m'expliques tout cela -->
  