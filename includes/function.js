/**
 * Created by Jkail on 25/07/2016.
 */



function edition(theId, destination, attribute) /** id de la value a recupérer, cible ou injecter le contenu, attribut html a modifier **/ {
    var textQuiVaBien = document.getElementById(theId).value;
    console.log(document.getElementById(theId).value);
    document.getElementById(destination).setAttribute(attribute,textQuiVaBien);
}

function editionTexte(theId, destination) /** id de la value a recupérer, cible ou injecter le contenu, attribut html a modifier **/ {
    var textQuiVaBien = document.getElementById(theId).value;
    console.log(document.getElementById(theId).value);
    document.getElementById(destination).innerHTML = textQuiVaBien;
}


/****Appel de la fonction edition ****/

/*Changement du logo*/
var logoElt = document.getElementById("logo");
logoElt.addEventListener("click", function(){
    edition("logo-nl","nl-logo","src");
});

/*Changement de l'url version en ligne */
var logoElt = document.getElementById("url");
logoElt.addEventListener("click", function(){
    edition("url-nl","url-generated","href");
});

/*Changement de l'url de désinscription */
var logoElt = document.getElementById("unsuscribe");
logoElt.addEventListener("click", function(){
    edition("unsuscribe-nl","unsuscribe-generated","href");
});

/*Changement de la baseline */
var logoElt = document.getElementById("baseline");
logoElt.addEventListener("click", function(){
    editionTexte("baseline-nl","baseline-generated");
});

/*Changement du numéro */
var logoElt = document.getElementById("numero");
logoElt.addEventListener("click", function(){
    editionTexte("numero-nl","numero-generated");
});
/*Changement de la date */
var logoElt = document.getElementById("date");
logoElt.addEventListener("click", function(){
    editionTexte("date-nl","date-generated");
});

