<section class="addEventListener">

    <h3>Programmation événementielle</h3>
    <p>
        Exécute du code lorsqu'il se passe quelque chose dans la page.
        <br>
        Syntaxe: <strong>element.addEventListener("<span class="specification">Nom de l'évènement</span>", "<span class="specification">Fonction de l'évènement</span>")</strong>
    </p>

    <div class="events">

        <h3>Liste d'événements fréquents pour les balises</h3>
        <ul>
            <li><strong>click</strong> <br> Clique de souris ou touch</li>
            <li><strong>mouseenter</strong> <br> Le curseur survol la balise</li>
            <li><strong>mouseleave</strong> <br> Le curseur sort du survol la balise</li>
            <li><strong>mousemove</strong> <br> Le curseur se déplace sur la balise</li>
            <li><strong>load</strong> <br> Le contenu de balise est chargé</li>
            <li><strong>change</strong> <br> La valeur du input change</li>
            <li><strong>keydown</strong> <br> Une touche du clavier est appuyée</li>
            <li><strong>keyup</strong> <br> Une touche du clavier est relâchée</li>
        </ul>

        <a class="external_link" target="_blank" href="https://www.w3schools.com/jsref/dom_obj_event.asp">En savoir plus</a>
    </div>

    <div class="d-grid">

        <div class="grid-item">
    
            <h4>Informations d'événements</h4>
            <p>La fonction appelée par le addeventlistener reçoit automatiquement un paramètre contenant les informations d'événements. Par exemple, parfois, il est utile de savoir quel est la balise qui est la cible de l'événement en cours. Pour le savoir, on peu utiliser .target sur le paramètre de la fonction.
        
            <br> 
            
            Syntaxe: <strong>element.addEventListener("click", function (<span class="specification">infos_click</span>) {
                <br> 
                console.log("La cible est: " + <span class="specification">infos_click.target</span>)
                <br>
            }</strong>
            </p>

            <a class="external_link" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/API/Event">En savoir plus</a>
        </div>
    
        <div class="grid-item">
    
            <h4>Propagation d'événement</h4>
            <p>
                On parle de propagation lorsqu'une seule action de l'utilisateur lance plusieurs événements. 
                <br>
                On peu imaginer par exemple qu'un click de souris lance une fonction sur une balise div mais aussi sur le body si un addEventListener a été déclaré sur chacun d'entre eux.
            </p>
            <a class="external_link" target="_blank" href="https://www.pierre-giraud.com/javascript-apprendre-coder-cours/propagation-evenement/#:~:text=Lorsqu'un%20%C3%A9v%C3%A8nement%20se%20d%C3%A9clenche,%C2%AB%20propage%20%C2%BB%20dans%20le%20DOM.">En savoir plus</a>
        </div>
    
    
        <div class="grid-item">
            <h4>stopPropagation</h4>
            <p>
                stopPropagation permet d'empêcher l'événement d'atteindre les balises parentes.
                <br>
                Syntaxe: <strong>element.addEventListener("click", function (<span class="specification">infos_click</span>) {
                    <br> 
                    <span class="specification">infos_click.stopPropagation()</span>
                    <br>
                }</strong>
            </p>
            <a class="external_link" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/API/Event/stopPropagation">En savoir plus</a>
        </div>
    
        
        <div class="grid-item">
    
            <h4>preventDefault</h4>
            <p>
                preventDefault permet d'annuler ce que le navigateur aurait fait en temps normal. Par exemple ne pas se faire rediriger lors d'un click sur un "a"
                <br>
                Syntaxe: <strong>une_balise_a.addEventListener("click", function (<span class="specification">infos_click</span>) {
                    <br> 
                    <span class="specification">infos_click.preventDefault()</span>
                    <br>
                }</strong>
            </p>
            <a class="external_link" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/API/Event/preventDefault">En savoir plus</a>
        </div>
    </div>
</section>