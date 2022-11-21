<h3>Formulaires</h3>

<div class="d-grid">

    
    <div class="grid-item">

        <h4>document.forms</h4>
        <p>
            Il est possible d'accéder à l'ensemble des valeurs d'un formulaire à l'aide de l'attribut "name" de la balise form
            <br>
            <strong class="document-form"></strong>
            <strong>document.forms.<span class="specification">exemple</span></strong>
        </p>

        <a class="external_link" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/API/Document/forms">En savoir plus</a>

    </div>
    <div class="grid-item">

        <h4>Obtenir la valeur d'un input</h4>
        <p>
            Pour obtenir l'information d'un champs de formulaire, on peut utiliser la propriété ".value"

            <br>
            <strong>document.forms<span class="specification">.nom_form.nom_input.value</span></strong>
        </p>

        <a class="external_link" target="_blank" href="https://stackoverflow.com/questions/11563638/how-do-i-get-the-value-of-text-input-field-using-javascript">En savoir plus</a>

    </div>
    <div class="grid-item">

        <h4>Annuler l'envoi du formulaire</h4>
        <p>
        Il est possible d'annuler l'envoi d'un formulaire en utilisant e.preventDefault() lors de l'événement "submit" de la balise form
            <br>
            <strong>let form = document.forms.exemple</strong>
            <br>
            <strong><span class="specification">form</span>.addEventListener("<span class="specification">submit</span>", function(e) {</strong>
            <br>
            <strong><span class="specification">e.preventDefault()</span></strong>
            <br>
            <strong>})</strong>
        </p>

        <a class="external_link" target="_blank" href="https://stackoverflow.com/questions/11563638/how-do-i-get-the-value-of-text-input-field-using-javascript">En savoir plus</a>

    </div>
    <div class="grid-item">

        <h4>Type de input</h4>

        <a class="external_link" target="_blank" href="https://www.w3schools.com/html/html_form_input_types.asp">En savoir plus</a>

    </div>
    <div class="grid-item">

        <h4>Détecter un changement de valeur</h4>
        <p>
        Il est possible de détecter le changement de valeur d'une balise input à l'aide de l'événement "change"

            <br>
            <strong>let input = document.forms.exemple.nomInput</strong>
            <br>
            <strong><span class="specification">form</span>.addEventListener("<span class="specification">change</span>", function(e) {</strong>
            <br>
            <strong><span class="specification">console.log("La valeur à changé")</span></strong>
            <br>
            <strong>})</strong>
        </p>

        <a class="external_link" target="_blank" href="https://stackoverflow.com/questions/11563638/how-do-i-get-the-value-of-text-input-field-using-javascript">En savoir plus</a>

    </div>

</div>