<?php
session_start();
require_once 'fonctions.php';
if(!logged()) {
    header("Location:index.php");
}
         
  
    
// -------------------------------------------php error-----------------------
    $errors = [
        "Pirate !",
        "Champs obligatoires manquants !",
        "Identifiants incorrects !",
    ];
?>
<!-- --------------------------    -------------------------------- --------------- -->
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
            <li id="vima" class="hoverMebottom button"><a href=""><i class="far fa-comment fa-flip-horizontal"></i>SERVICE CLIENTS<i class="fas fa-angle-down"></i></a>
               <!-- <div id="panel">
                  <p>overview</p>
                  <p>shipping</p>
                  <p>returns and refunds</p>
                </div> -->
           </li>
             <!-- <p><i class="fas fa-envelope"></i><i class="fas fa-phone-alt"></i>CONTACT US</p> -->
           
           
            <li class="hoverMebottom button"><a href=""><i class="fas fa-map-marker-alt"></i>POINT DE VENTE</a></li>
        </div>
        <div id ='logo'>
            
        <?php 
              echo"<h3>Bienvenue ",$_SESSION["user"]["pseudo"]," !!</h3>";
        ?>
         <button id="deconnexion"><a  href="log-out.php">déconnexion</a></button>
              <a href=""><img src="image/logo.jpg" alt="image logo ferrari" srcset=""></a>
        </div>
         <div>
            <li class="hoverMebottom button"><a href=""><i class="far fa-gem"></i> OWNERS AERA</a></li>
            <li class="hoverMebottom button"><a href=""><i class="fas fa-search"></i>RECHERCHER</a></li>
            <!-- <li class="hoverMebottom button"><a href=""><i class="far fa-user"></i>S'IDENTIFIER</a> -->
                       
              <li class="hoverMebottom button"><a href=""><i class="fas fa-cart-arrow-down"></i>PANIER</a></li>
        
        </div>
        <!-- <div class="panel">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div> -->
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
<main>
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 6</div>
          <img src="image/ferrari2040.jpg" style="width:100%">
          <div class="text">Ferrari xezri</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">2 / 6</div>
          <img src="image/fsp.jpg" style="width:100%">
          <div class="text">Ferrari Sport</div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 6</div>
          <img src="image/ferrari-monza-sp1-ac-mondial-2018-03.jpg" style="width:100%">
          <div class="text">Ferrari Mondza</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">4 / 6</div>
          <img src="image/racefansdotnet-20200206-140422-2.jpg" style="width:100%">
          <div class="text">Ferrari formule1</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">5 / 6</div>
          <img src="image/ferrari-modulo.jpg" style="width:100%">
          <div class="text">Ferrari Modulo (à l'interieur)</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">6 / 6</div>
          <img src="image/formule1.jpg" style="width:100%">
          <div class="text">Ferrari Formule1!</div>
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span>
          <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
          <span class="dot" onclick="currentSlide(6)"></span>
        </div>
        <ul class="slideshow">
            <li><span></span></li>
          <li><span>2</span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>
  </main>      
  
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    

   
  <!-- ------------------------------------------log----------------------------------------- -->
  <div id="id01" class="modal">
  <!-- ----------------------  ----------------  ---------------------- php get error----- -->
    <?php
        if(!empty($_GET) && $_GET['error'] !== false){
            echo "<h4>", $errors[$_GET['error']], "</h4>";
        }
    ?>
<!-- -------------------------------------------- -------------- ------------------------ -->
    <!-- <form class="modal-content animate" action="security.php" method="post">
      <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="image/logo.jpg" alt="Avatar" class="avatar"> -->
      <!-- </div> -->
  
      <!-- <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>
  
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>
          
        <button type="submit">Login</button>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Remember me
        </label> -->
      <!-- </div> --> 
  
      <div class="container" style="background-color:#fefefe">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </div>
  <!-- -------------------------------------overlay script ----------------------------- -->
  <script>
    function openNav() {
      document.getElementById("myNav").style.height = "100%";
    }
    
    function closeNav() {
      document.getElementById("myNav").style.height = "0%";
    }
    </script>
    <!-- ---------------------------------------------     ---------------------------------------- -->
        <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
          showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
          showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}    
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
        }
        </script>
       <!-- -------------------------------------------------------------------- -->
       <!-- -------------------------------------------------------------------------script log------------------ -->

       <script>
        // Get the modal
        var modal = document.getElementById('id01');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>
        <!-- -------------------------------toggle serviceclient------------------------ -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous">
     </script>
       <script>
        $(document).ready(function(){
          $("#vima").on("click",function(){  
              $(this).toggleClass(" fa-angle-down fa-angle-up")
            $("#panel").slideToggle("slow");
          });
        });
        </script>
      </body>
</html>