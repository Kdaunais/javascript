
<section class="attributs_balise">

    <h3>Les valeurs des propriétés CSS d'un élément</h3>

    <div class="d-grid two--cols">

        <div class="grid-item">

            <h4>Fonction getComputedStyle(element)</h4>

            <p>
                La fonction getComputedStyle permet d'obtenir la valeur des propriétés initiallements déclarées en CSS sous forme d'un objet javascript
                <br>
                <strong>let un_div = document.querySelector('#un_div')</strong>
                <br> 
                <strong>let css_du_div = <span class="specification">getComputedStyle(un_div)</span></strong>
                <br> 
                <strong>console.log(<span class="specification">css_du_div.backgroundColor</span>)</strong>
            </p>

            <a class="external_link" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/API/Window/getComputedStyle">En savoir plus</a>

        </div>

    </div>
</section>