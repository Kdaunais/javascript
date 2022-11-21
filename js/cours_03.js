
/* ******************************************
*********** Fonction JS *********************
****************************************** */

function test(string) {
    console.log(string);
}

let test2 = function (string) {
    console.log(string);
}

test('Le premier test est fonctionnel')
test2('Le deuxième test est fonctionnel')



/* ******************************************
*********** addEventListener ****************
****************************************** */

const body = document.body

body.addEventListener('click', function () {
    // alert('Ouch')
})


/* ******************************************
*********** function(event) *****************
****************************************** */

window.addEventListener('load', function(event){
    
    // alert(event.type)
})

/* ******************************************
*********** event.target ********************
****************************************** */

let uneVariable

function click_variable(infos) {

    console.log( "L'élément choisi est: "+ infos.target.className)
}

uneVariable = addEventListener('click', click_variable)


/* ******************************************
*********** stopPropagation() ***************
****************************************** */

const premiereBalise = document.querySelector('.premiereBalise')
const deuxiemeBalise = document.querySelector('.deuxiemeBalise')

premiereBalise.addEventListener('click', function () {
    this.style.backgroundColor = 'red'
})

deuxiemeBalise.addEventListener('click', function (e) {

    // e.stopPropagation()
    console.log('Je suis ta balise préféré')
})


/* ******************************************
*********** preventDefault() ***************
****************************************** */

const lien = document.querySelector('.lienWeb')
const checkbox = document.getElementById('checkbox')

lien.addEventListener('click', function (event) {
    
    if (!checkbox.checked) {
        event.preventDefault()
    }
})

