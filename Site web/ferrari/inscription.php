<?php session_start(); ?>
<?php 
// Si la personne est déjà connectée.
// if(isset($_SESSION['user'])) {
    // On lui adresse une erreur ailleurs qu'en URL.
    // $_SESSION['error'] = "Vous n'avez rien à foutre là.";
    // On le redirige.
    // header('Location: index.php');
// }
// Si l'utilisateur n'a pas de token
if(isset($_SESSION['token'])) {
//     // On en créé un.
    $token = bin2hex(random_bytes(24));
    
// On le met en session.
    $_SESSION['token'] = $token;
    
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="ferrari.style.css">
    <title>Document</title>
</head>
<body>
    <div id='mise_a_jour'>
        <a href=""><h3>NOUVELLE MISE A JOUR</h3></a>
    </div>
    <div id='banniere_promo'>
        <h4>LIVRAISON OFFERTE ET DELAI DE RETOUR PROLONGE A 60 JOURS </h4>
    </div>
<header>
    <nav id='nav_general'>
         <div>
            <li class="hoverMebottom button"><ahref=""><i class="fas fa-globe-americas"></i> FR</a></li>
            <li class="hoverMebottom button"><a href=""><i class="fas fa-globe-americas"></i>SERVICE CLIENTS<i class="fas fa-angle-down"></i></a></li>
            <li class="hoverMebottom button"><a href=""><i class="fas fa-map-marker-alt"></i>POINT DE VENTE</a></li>
        </div>
        <div id ='logo'>
            
            <a href="index.php"><img src="image/logo.jpg" alt="image logo ferrari" srcset=""></a>
        </div>
         <div>
            <li class="hoverMebottom button"><a href=""><i class="far fa-gem"></i> OWNERS AERA</a></li>
            <li class="hoverMebottom button"><a href=""><i class="fas fa-search"></i>RECHERCHER</a></li>
            <li class="hoverMebottom button"><a href=""><i class="far fa-user"></i>S'IDENTIFIER</a><li>
            <li class="hoverMebottom button"><a href=""><i class="fas fa-cart-arrow-down"></i>PANIER</a></li>
        </div>
    </nav>
    <ul id='nav_principal'>
        <li class="hoverMebottom button"><a href="">HOMME</a></li>
        <li class="hoverMebottom button"><a href="">FEMME</a></li>
        <li class="hoverMebottom button"><a href="">ENFANT</a></li>
        <li class="hoverMebottom button"><a href="">MONTRES</a></li>
        <li class="hoverMebottom button"><a href="">LUNETTES</a></li>
        <li class="hoverMebottom button"><a href="">OBJETS DE COLLECTION</a></li>
        <li class="hoverMebottom button"><a href="">FOCUS ON</a></li>
    </div>
</header>
<div id=wrapper>
    <main>
        <h1>S'INSCRIRE</h1>
        
        <p><span>Inscrivez-vous maintenant</span>et bénéficiez des avantagesMon Compte </p>
        
        <li>recevoir notre newsletter exclusive</li>
        <li>sauvegarder vos articles préférés</li>
        <li>compléter vos achats plus rapidement</li>
        <li>controler vos commandes et retours</li>
       
    </main>
    <!-- <div id='genre'> -->
       <form action="traitement-inscription.php" method= "post">   
        <!-- <p>SEXE</p>

        <label class="container">Femme
        <input type="radio"  name="radio">
        <span class="checkmark"></span>
        </label>
        <label class="container">Homme
        <input type="radio" name="radio">
        <span class="checkmark"></span>
        </label>
        <br>
    </div> -->
<!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
  
<!-- <div class="custom-select" style="width:200px;">
    <select>
        <option value="0">Selectionnez un pays:</option>
        <option value="1">FRANCE</option>
        <option value="2">ALLEMAGNE</option>
        <option value="3">BELGIQUE</option>
        <option value="4">USA</option>
        <option value="5">AFRIQUE</option>
        <option value="6">INDE</option>
        <option value="7">CANADA</option>
        <option value="8">MEXIQUE</option>
        <option value="9">AUSTRALIE</option>
        <option value="10">JAPAON</option>
        <option value="11">RUSSIE</option>
        <option value="12">ANGLETERRE</option>
    </select> -->
    <!-- </div> -->
    <div id='grille'>
        <!-- <input type="text" placeholder="Prénom" name="prenom" required>
        <input type="text" placeholder="Nom" name="name" required> -->
        <input type="text" placeholder="Pseudo" name="pseudo" required>
        <input type="password" placeholder="Mot de passe (8-15 caractères)" name="psw" required>
        <input type="password" placeholder="Confirmez le mot de passe" name="psw-repeat" required>
        <!-- <input type="email" placeholder="Adresse E-mail" name="email" required>
        <input type="number"placeholder="Tel" name="tel"required> -->
        </div>
        <input type="hidden" name="token" id="token" value="<?php echo $token; ?>" />
    <input type="submit" value="Envoyer"> 
   </form>
<!-- </div>     -->
    <!-- <button type="submit" class="registerbtn">S'INSCRIRE</button> -->
<!--  
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "user";

// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    // VALUES ('John', 'Doe', 'john@example.com')";
    // use exec() because no results are returned
//     $sql = INSERT INTO `user`.`ferrari`(`radio`,`pays`,`prenom`,`name`,`psw`,`pseudo`,`email`,`tel`) VALUES ('M','Italie','$mike','loku','21457','$hjdfg','sgeijbeg@ca.com','24674642');
//     $conn->exec($sql);
//     echo "New record created successfully";
//     }
// catch(PDOException $e)
//     {
//     echo $sql . "<br>" . $e->getMessage();
//     }

// $conn = null;
//  -->

  


<script>
var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>

</body>