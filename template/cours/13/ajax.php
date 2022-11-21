<h3>Ajax</h3>

<div class="d-grid">

    <div class="grid-item">

        <h4>Fetch</h4>
        <p>
        Récupérer des informations présentes sur le serveur directement à partir de javascript.
            <br>
            <strong><span class="specification">let url = "http://localhost/data/data.json"</span></strong>
            <br>
            <strong>fetch(url).then(resp => <span class="specification">resp.json()</span>).then(data => {</strong>
            <br>
            <strong><span class="specification">console.log(data)</span></strong>
            <br>
            <strong>})</strong>
        </p>

        <a class="external_link" target="_blank" href="https://www.javascripttutorial.net/javascript-fetch-api/">En savoir plus</a>

    </div>

    <div class="grid-item">

        <h4>Restrictions de l'ajax</h4>

        <ul>
            <li><p>1- Fichier de type texte <span class="specification">( json, txt, ...)</span></p></li>
            <li><p>2- Fichier doit être sur le même site Web que la page originale. Même nom de domaine. <br> Il est en fait possible de configurer un serveur pour permettre l'accès entre serveurs. C'est ce qu'on appel <span class="specification">des APIs</span>.</p></li>
            <li><p>3- Doit être converti avec fetch selon le format avant la lecture: <span class="specification">resp.json()</span> ou <span class="specification">resp.text()</span></p></li>
        </ul>

        <a class="external_link" target="_blank" href="https://www.fortinet.com/resources/cyberglossary/api-key">En savoir plus</a>
    </div>

    <div class="grid-item">

        <h4>Format JSON</h4>
        <p>
            JSON est un format qui sert de standard afin de transmettre de l'information entre les différents languages de programmation (PHP, JS, C#, ...).
            <br>
            <strong>convertir en texte JSON</strong>
            <br>
            <strong><span class="specification">JSON.stringify(une_variable)</span></strong>
            <br>
            <strong>convertir à partir d'un texte JSON</strong>
            <br>
            <strong><span class="specification">let donnees = JSON.decode(un_texte_json)</span></strong>
        </p>

        <a class="external_link" target="_blank" href="https://www.w3schools.com/js/js_json_intro.asp">En savoir plus</a>
    </div>

</div>