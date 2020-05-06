
<?php
 
session_start();
require_once 'fonctions.php';
// Si l'utilisation est connecté, il dégage.
  if(logged()) {
      header('Location: index.php');
  }
// Si le formulaire n'est pas vide (si le mec a pas tapé l'URL).
if(!empty($_POST)) 
{
        // On vérifie le token (cf : faille CSRF cross site request forgery ( forcer un  utilisateur a repondre a une requetes forger a son insu)).
             if($_POST['token'] === $_SESSION['token']) {
        // On vérifie l'intégrité des input.
        $f_pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_VALIDATE_REGEXP,
        ["options" => array("regexp" => '/[A-Za-z0-9]{6,32}/')]));
        $f_password = filter_input(INPUT_POST, 'psw', FILTER_VALIDATE_REGEXP,
        ["options" => array("regexp" => '/[A-Za-z0-9]{8,72}/')]);
       
        // On vérifie la conformité des champs.
        if($f_pseudo && $f_password ) 
        {
              // Connexion à la BDD.
              require_once('connexion.php');
                       try {
                            
                              // $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                                                     
                              // On  veut savoir si le pseudo existe déjà.
                              $req='SELECT * 
                              FROM ferrari
                              WHERE pseudo = "'.$f_pseudo.'"';//recuperation de la liste des pseudo
                              $statement = $bdd->query($req);//execution de la requete
                              $reponse = $statement->fetch(); //fetch cherche le resultat demander dans un tableau
                             if($reponse )
                             {                             
                              // S'il existe , on continue.
                                       
                                if (password_verify($f_password,$reponse['psw'])) //si le password est la meme que celui de la bdd
                                {
                                    $_SESSION['user'] = $reponse; //on stoke le resultat dans la session
                                    header("Location: bienvenue.php");//redirection vers la page de bienvenue
                                } else{
                                    header("Location: index.php?error=2mdpincorrect");//redirection vers la page d'aceuil si le mot de passe ne correspond pas
                                }
                            } else{
                                header("Location: index.php?error=loginIncorrect");//redirection vers la page d'acceuil si le login ne correspond pas
                            }                                   
               } catch (PDOException $e) {
               $e->getMessage();
              die();                                                                  
                // Erreur de connexion à la BDD.
               }
        } else {
              header("Location:index.php?error=1 champs valeur d'entrée incorrecte");
            // Champs non conformes.
        }
      
    } else {
            header("Location:index.php?error=0 url tapé a la main"); // si l'utilisateur est un pirate
            }
}
?> 


<!-- // // session_start();//démarre ou récupère une session

// // if(!empty($_POST)){
// //     $f_username = trim(filter_input(INPUT_POST, "uname", FILTER_SANITIZE_STRING));
// //     $f_password = filter_input(INPUT_POST, "psw", FILTER_VALIDATE_REGEXP, [
// //         "options" => array("regexp"=>'/[A-Za-z0-9]{6,32}/')
// //     ]);
    
// //     if($f_username && $f_password){
// //         if($f_username === $user['uname'] && $f_password === $user['psw']){
// //             $_SESSION['user'] = $user;
// //             header("Location: bienvenue.php");
// //         }
// //         else header("Location: /?error=2");//identifiant incorrect
// //     }
// //     else header("Location:index.php"); // pirate
// // }
// // else header("Location: /?error=0");//champs obligatoire manquant
// ?> --> 