

/* ******************************************
***********Récupérer une balise en JS********
****************************************** */

let main = document.querySelector('sélecteurs') //Retourne le premier élément dans le document correspondant au sélecteur
let desParagraphe = document.querySelectorAll('sélecteurs') //Retourne une NodeList statique représentant une liste des éléments du document qui correspond au sélecteur

let section = document.getElementById('un id') //Retourne l'élément dont la propriété id correspond à la chaîne de caractères spécifiée.
let className = document.getElementsByClassName('une classe') //Renvoie un tableau de tous les éléments enfants qui ont tous les noms de classe donnés
let tagName = document.getElementsByTagName('une balise') //Retourne une liste des éléments portant le nom de balise donné



/* ******************************************
***********Création de balises***************
****************************************** */   

//Informations de mon strong
const baliseStrong = document.createElement('strong') 
baliseStrong.textContent = 'Contenu de la balise'

//Informations de mon h2
const baliseH2 = document.createElement('h2')  
baliseH2.appendChild(baliseStrong)   

//Informations de ma section
const variableSection = document.createElement('section')
variableSection.setAttribute('id','idSection')
variableSection.appendChild(baliseH2)       

//Ajout dans main
unMain.appendChild(section3)


/* ******************************************
***********Supprimer une balise**************
****************************************** */

// baliseH2.remove()       



/* ******************************************
***********Ajouter un attribut***************
****************************************** */

let uneImage = document.createElement('img')
uneImage.setAttribute('src', 'image/une-image.jpg')
uneImage.setAttribute('alt', 'nomImage')
uneImage.setAttribute('width', '400px')
uneImage.setAttribute('height', '400px')

// main.appendChild(uneImage)   


//Voir l'attribut d'un élément 
let monAttribut = uneImage.getAttribute('src')
console.log(monAttribut);
