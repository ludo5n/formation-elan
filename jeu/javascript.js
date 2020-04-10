function estValide(button){
    return button.innerHTML.length == 0; //function that shows if you can play in this button
}
function setSymbol(button,symbole){// show the button and the symbol is played
    button.innerHTML = symbole;
}
function rechercherVainqueur(pions,joueurs,currentTurn){ // funcntion to prevent wins ,draw
    if (pions[0].innerHTML == joueurs[currentTurn] &&
        pions[1].innerHTML == joueurs[currentTurn] &&    // first colonne
        pions[2].innerHTML == joueurs[currentTurn] )
        return true;

    if (pions[3].innerHTML == joueurs[currentTurn] &&
        pions[4].innerHTML == joueurs[currentTurn] &&   // 2nd colonne
        pions[5].innerHTML == joueurs[currentTurn] )
        return true;

    if (pions[6].innerHTML == joueurs[currentTurn] &&
        pions[7].innerHTML == joueurs[currentTurn] &&  // third colonne
        pions[8].innerHTML == joueurs[currentTurn] )
        return true;

    if (pions[0].innerHTML == joueurs[currentTurn] &&
        pions[3].innerHTML == joueurs[currentTurn] &&   // first vertical lign
        pions[6].innerHTML == joueurs[currentTurn] )
        return true;
    if (pions[1].innerHTML == joueurs[currentTurn] &&
        pions[4].innerHTML == joueurs[currentTurn] &&   // 2nd vertical lign
        pions[7].innerHTML == joueurs[currentTurn] )
        return true;
    if (pions[2].innerHTML == joueurs[currentTurn] &&
        pions[5].innerHTML == joueurs[currentTurn] &&  //3rd vertical lign
        pions[8].innerHTML == joueurs[currentTurn] )
        return true;
    if (pions[0].innerHTML == joueurs[currentTurn] &&
        pions[4].innerHTML == joueurs[currentTurn] &&  //diagonal
        pions[8].innerHTML == joueurs[currentTurn] )
        return true;
    if (pions[2].innerHTML == joueurs[currentTurn] &&
        pions[4].innerHTML == joueurs[currentTurn] &&  // diagonal
        pions[6].innerHTML == joueurs[currentTurn] )
        return true;   
                        
}
function tableauEstPlein(pions){
    for ( let i=0, len = pions.length; i<len;i++){ //show the board of possibility of the game to the draw game
        if(pions[i].innerHTML.length == 0)
        return false;
    }
        return true;
}
let Afficheur = function(element){
    let display = element; //variable that take element constructor

    function setText(message){ 
        display.innerHTML = message;
    }
    return { sendMessage :setText};//return function that change the element message
}

function main(){
    let pions = document.querySelectorAll("#jeu button");
    let joueurs = ['X','O']; //players
    let currentTurn = 0;   //players turns
    let jeuEstFini = false; // condition if game is end
    let afficheur = new Afficheur(document.querySelector("#gameStatus")); //send message
    afficheur.sendMessage("Le jeu peux démarrer.<br/>Joueur " + joueurs[currentTurn] + " c'est à votre tour."); //game started, first player star the game

    for ( let i=0, len = pions.length; i<len;i++){
        pions[i].addEventListener("click" , function(){ // boucle to know the position of clicked button in the game
            if(jeuEstFini)
            return;

            if(!estValide(this)){ // if button is already clieked(played)
                afficheur.sendMessage("déplacement invalide!") // send message to say that can't play in a played symbol
            } else{
                setSymbol(this , joueurs[currentTurn]);
                jeuEstFini = rechercherVainqueur(pions,joueurs,currentTurn);//this function will shoerch if a player wins
            
            if(jeuEstFini){ // if the game hs been done and someone win?
                afficheur.sendMessage("Joueur " +  joueurs[currentTurn] + " à gagné! <a href='morpion.html'>Rejouer</a>");
                return;
            }

            if(tableauEstPlein(pions)){ //is the game null?
                afficheur.sendMessage("Match nul!!");
                return;
            }
                currentTurn = currentTurn ^ 1; // this will change players turn

             afficheur.sendMessage("joueur " + joueurs[currentTurn]+ " c'est à votre tour!");
             
            }
        });
    }
}
main();