
/* ***********************************************************
******************** Déclaration de variable *****************
*********************************************************** */

// Ancienne façon de faire
var titre = "Mon grand-père"

// Bonne façon de faire
let enseignement = "Ghibli"

// Constante qui ne changera jamais
const prix_gaz = 1.05



/* ***********************************************************
******************** Type de Variable ************************
*********************************************************** */
// Différence avec PHP?

let number = 3
let string  = 'JavaScript'
let content_de_faire_du_js = true
let bieres_du_vendredi = ["Blanche", "IPA", "Stout"]
let cours = {
    titre: "Programmation d'interface Web",
    module: 2,
    prof: "Kevin",
}


/* ***********************************************************
******************** Concaténation ***************************
*********************************************************** */
// Différence avec PHP?

let debut = "Baby"
let fin = "yoda"
let nomComplet = debut + "" + fin + "!"



/* ***********************************************************
******************** Condition *******************************
*********************************************************** */
//Identique à PHP

/* Condition if */

if (content_de_faire_du_js) {

    string = "vrai"

} else {

    string = "faux"
}

/* Opérateur ternaire */

2 > 1 ? string = "vrai" : string = "faux"

/* Switch Case */

switch (number) {

    case 1:
        "i égal 1"
        break

    case 2:
        "i égal 2"
        break

    case 3:
        "i égal 3"
        break
}



/* ***********************************************************
******************** Boucles *********************************
*********************************************************** */
// Presque identique à PHP, sauf la création de variable

/* Boucle for */

for (let i=0; i<100; i++) {

    'Je connais une chanson pour écoeurer les gens'

}

/* Boucle while */

while (number < 100) {

    'Je connais une chanson pour écoeurer les gens'

    number += 1
}

/* Boucle foreach */

let copie = []

for (let biere of bieres_du_vendredi) {
    console.log("Je vais boire une " + biere)
}


/* ***********************************************************
******************** Fonction ********************************
*********************************************************** */
// Presque identique à PHP, sauf que les fonctions agissent comme des variables


function addition(a, b) {
    let resultat = a + b
    console.log("Le résultat est " + resultat)
}

addition(30, 12)

let add = addition // on assigne la fonction addition à la variable add?!!

add(10, 5)
