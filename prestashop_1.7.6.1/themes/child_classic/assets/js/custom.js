/*
 * Custom code goes here.
 * A template should always ship with an empty index.js
 */

$(document).ready(function(){ //Toujours commencer par cibler le document et à quel moment, ici c'est au chargement//
    let fade = $(".page-subheading"); //Les titres h3 de la page présentation vont s'afficher sur un fondu au démarrage//
    fade.fadeIn(3000);

    let para = $("p"); //Ce sont les textes de la page de présentation: je voulais qu'ils apparaissent en fondu//
    para.fadeIn(6000);
})