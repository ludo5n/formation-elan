<?php

	if(isset($_COOKIE['auth']) && !isset($_SESSION['user'])){

		// VARIABLE
		$secret = htmlspecialchars($_COOKIE['auth']);

		// VERIFICATION
		require('connexion.php');

		$req = $bdd->prepare("SELECT count(*) as numberAccount FROM ferrari WHERE secreto = ?");
		$req->execute(array($secret));

		while($user = $req->fetch()){   //je t'avoue que toute cette  du traitement du cookies  je ne sais pas si cela se fait reellement

			if($user['numberAccount'] == 1){

				$reqUser = $bdd->prepare("SELECT * FROM ferrari WHERE secreto = ?"); 
				$reqUser->execute(array($secret));

				while($userAccount = $reqUser->fetch()){

					$_SESSION['user'] = 1;
                    $_SESSION['pseudo'] = $userAccount['pseudo'];
				}

			}

		}

	}

	if(isset($_SESSION['user'])){

		require('connexion.php');
        $req='SELECT * 
        FROM ferrari
        WHERE pseudo = "'.$f_pseudo.'"';//recuperation de la liste des pseudo
        $statement = $bdd->query($req);//execution de la requete
        $reponse = $statement->fetch(); 
		$reqUser = $bdd->prepare("SELECT * FROM ferrari WHERE pseudo = ?");
		$reqUser->execute(array($_SESSION['pseudo']));

		while($userAccount = $reqUser->fetch()){

			if($userAccount['blocked'] == 1) {
				header('location: ../logout.php');
				exit();
			}

		}

	}

?>