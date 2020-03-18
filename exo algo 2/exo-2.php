<?php
$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
function afficherTableHTML($tableau){
    
    ksort($tableau);
    echo    " <table border= 1px, solid,black cellspacing='0';>
            <thead>
                <tr>
                    <th>Pays</th>
                    <th>Capitale</th>
                </tr>
            </thead>
            <tbody> ";
   
        // pour chaque ligne (chaque enregistrement)
        foreach ( $tableau as $pays =>$saCapitale ) {
            // DONNEES A AFFICHER dans chaque cellule de la ligne
        echo    "<tr>"  //on peut rajouter du html dans du php en inscerant echo suivis des guillemets
                   ."<td>" . mb_strtoupper($pays) . "</td>
                    <td>" . $saCapitale . "</td>
                </tr>";

	    } // fin foreach

	echo "</tbody>";
    echo "</table>";
    
}

afficherTableHTML($capitales);
?>