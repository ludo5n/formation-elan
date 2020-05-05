<?php
          
          session_start();
        //   require_once 'fonctions.php';
          // Si l'utilisation est connecté, il dégage.
        //   if(logged()) {
        //       header('Location: index.php');
        //   }
          // Si le formulaire n'est pas vide (si le mec a pas tapé l'URL).
          if(!empty($_POST)) {
                  
              // On vérifie le token (cf : faille CSRF).
                 //       if($_POST['token'] === $_SESSION['token']) {
                  // On vérifie l'intégrité des input.
                  $f_pseudo = trim(filter_input(INPUT_POST, 'pseudo', FILTER_VALIDATE_REGEXP,
                  ["options" => array("regexp" => '/[A-Za-z0-9]{6,32}/')]));
                  $f_password = filter_input(INPUT_POST, 'psw', FILTER_VALIDATE_REGEXP,
                  ["options" => array("regexp" => '/[A-Za-z0-9]{8,72}/')]);
                  $f_passwordconfirm = filter_input(INPUT_POST, 'psw-repeat', FILTER_VALIDATE_REGEXP,
                  ["options" => array("regexp" => '/[A-Za-z0-9]{8,72}/')]);
      
                  // On vérifie la conformité des champs.
                  if($f_pseudo && $f_password && $f_passwordconfirm && $f_passwordconfirm === $f_password) 
                  {
                        
                        
                                 try {
      
                                        // Connexion à la BDD.
                                        // $bdd = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                                          require 'connexion.php';                                     
                                        // On  veut savoir si le pseudo existe déjà.
                                        $login = $bdd->query('SELECT pseudo
                                                              FROM user.ferrari
                                                              WHERE pseudo = "'.$f_pseudo.'"');
                                        $login = $login->fetch();
                                        // S'il n'existe pas, on continue.
                                                 if(!$login) {
                                                                        //     // Chiffrement.
                                                        $password = password_hash($f_password, PASSWORD_BCRYPT); 
                                                        // Insertion.
                                                         try {
                                                                        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                                                        // $insert = $bdd->prepare('INSERT INTO `user`.`ferrari` (`pseudo`, `psw`) VALUES(`:pseudo`, `:psw`)');
                                                                        $stmt = $bdd->prepare("INSERT INTO user.ferrari (pseudo, psw) VALUES (:pseudo, :psw)");
                                                                        $stmt->execute(array("pseudo"=>$f_pseudo,"psw"=>$password));
                                                                        echo "New inscription réussie!";
                                                                        // $_SESSION['error'] = "Inscription réussie !";
                                                                        // header('Location: index.php');
                                                             } catch (PDOException $e) { 
                                                                echo "Error: " .$e->getMessage();
                                                                        die();  // meurt
                                                                // Insertion qui foire.
                                                                }
                                                                $bdd= null;
                                                } else {
                                                         header("Location:inscription.php?pseudo deja pris");
                                                         // Pseudo déjà pris.
                                                  }
                         } catch (PDOException $e) {
                         $e->getMessage();
                        die();                                                                  
                          // Erreur de connexion à la BDD.
                         }
                  } else {
                        header("Location:inscription.php?champs non conformes");
                      // Champs non conformes.
                  }
        //       } else {
        //         header("Location:inscription.php?error=token expiré,hacker");
        //           // Token expiré ou hackeur de merde.
        //       }
          } else {
                  header("Location:index.php?error= url tapé a la main");
                
                  // URL du traitement tapé à la main.
          };
      
      ?> 
<!-- // $radio= $_POST["radio"];
// $pays= $_POST["pays"];
// $prenom=$_POST["prenom"];
// $nom=$_POST["name"];
// $psw=$_POST["psw"];
// $pseudo=$_POST["pseudo"];
// $email=$_POST["email"];
// $tel=$_POST["tel"];

// //création du DSN, sata source name ( paramettre permettant d'etablir la connexion)
// $dsn = 'mysql:host=localhost;dbname=user;port3306,charset=UTF-8';
// // $servername = "localhost";
// // $username = "root";
// // $password = "";
// // $dbname = "user";
// // //creation et test de la connexion
// try {

//         $connexion = new PDO ($dsn,'root','' );

       
// // try {
//     // $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
//     // VALUES ('John', 'Doe', 'john@example.com')";
//     // use exec() because no results are returned
//     $sql="INSERT INTO `user`.`ferrari` (`radio`, `pays`, `prenom`, `name`, `psw`, `pseudo`, `email`, `tel`) VALUES ('$radio', '$pays', '$prenom', '$name', '$psw', '$pseudo', '$email', '$tel')";
//     $conn->exec($sql);
//     echo "New record created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
// 
        // foreach($connexion->query('SELECT * from ferrari') as $row) {
        //     print_r($row);
        //     }
//         // $connexion = null;
//         } catch (PDOException $e) {
//         print "Erreur !: " . $e->getMessage() . "<br/>";
//         die();
//     }
 
//     //Afficher le résultat dans un tableau
    
//  -->