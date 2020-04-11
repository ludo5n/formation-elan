<?php
echo'exercice 4';
 $capitales = array("France"=>"Paris", "Allemagne"=>"Berlin", "USA"=>"Washington", "Italie"=>"Rome","Espagne"=>"Madrid");


 function afficherTableHTML2($tableau){
     
     ksort($tableau);
     echo    " <table border= 1px, solid,black;>
             <thead>
                 <tr>
                     <th>Pays</th>
                     <th>Capitale</th>
                     <th>Lien wiki</th>
                 </tr>
             </thead>
             <tbody> ";
    
         // pour chaque ligne (chaque enregistrement)
         foreach ( $tableau as $pays =>$saCapitale ) {
             // DONNEES A AFFICHER dans chaque cellule de la ligne
         echo    "<tr>"  //on peut rajouter du html dans du php en inscerant echo suivis des guillemets
                    ."<td>" . mb_strtoupper($pays) . "</td>
                     <td>$saCapitale</td>
                     <td><a href='https://fr.wikipedia.org/wiki/$saCapitale' target='_blank' >Lien<a></td>
                 </tr>";
 
         } // fin foreach
 
     echo "</tbody>";
     echo "</table>";
     
 }
 afficherTableHTML2($capitales);
?>