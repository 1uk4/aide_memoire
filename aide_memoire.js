alert("coucou"); /*affiche une pop-up*/
prompt ("comment va tu?"); /*comme alert mais donne une zone de texte pour répondre*/
console.log ("bonjour"); /*affiche ca dans la console*/
console.log ( prompt("commetn ca va?")); /*interaction et enregistrer dans la console (seulement utile pour savoir ce que fais l'ordinateur et le débuguer)*/

var x = 5 ; /*sert à donner une variable*/
alert (3+x) ;
x = 7; /*x vaut désormait 7, pas de var par ce que existe déja*/
clear ; /*permet de nettoyer la console*/
var résultat = prompt (2+2); /*enregistrer le résultat dans une variable*/
var x = prompt (" votre premier nombre") ; /*peut mettre number avant le prompt pour dire que c'est un chiffre, ou parseint pour prendre que des nombres entiers.*/
var y = prompt ("votre deuxieme nombre") ;
alert (number (x) + number(y)); /*pour lui dire qu'il faut additionner des nombres.*/


var email = "djfkl@gmail.com" ; /*fonctionne aussi avec des lettres*/
email.length ;/*donne la longueur de la vriable*/
email.touppercase() ;/*donne la variable en majuscule*/
email.tolocalelowercase() ;/*remet en minuscule*/
email.indexof("com") ;/*donne la position dans la variable de com*/
var typeDeVariable = typeof (email) /*donne le type de variale, number, string, boolean (true/false)*/

if(email.indexof("abcd") == -1) alert("mot pas trouver"); /*donne recherche dans le string, si pas trouver (-1), dis pas trouver*/

var phrase = "je ne sais pas ce que j'écrit mais j'écrit une phrase stupide!";
var phrase_coupée=phrase.slice(2, 10) ; /*coupe la phrase du caractère 2 au caractère 10 non compris*/
let phrase_coupée2 = phrase.substr ( 2, 8); /*let = var, coupe la phrase su caractère 2 non compris pour une longueur de 8 caractères*/

var nbr1 = 4;
var nbr2 = 7;
var variable = nbr1 < nbr2 && nbr1 > 2 || nbr2 > 2; /*&& veut dire et, || veut dire ou*/
alert (variable); /*donne "true*, car boolean */

var nbr1 = 4;
var nbr2 = 7;
if (nbr1 > nbr2){
	alert ("le numéros 1 est plus petit")
} else if ( nbr1 == nbr2) { /*sinon si ...*/
	alert (ils sont égale)
} else { /*alors ...*/
		alert ("le numéro 1 est suppérieur")
	}

var bienvenu = confirm (" bienvenu, rentrez?") /*sois true sois false*/
if (bienvenu) {
	alert ("bienvenu")
}
else {
	sortez de ma page
}