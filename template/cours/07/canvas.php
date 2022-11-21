
<h3>Canvas</h3>
<p>
    La balise "canvas" représente une zone dans laquelle il est possible de créer des formes plus complexes à l'aide de Javascript.
    <br>
</p>
<img class="img-top" src="images/canvas.JPG" alt="canvas">

<div class="d-grid">

    <div class="grid-item">

        <h4>Canvas context</h4>
        <p>
            Pour interagir avec la balise canvas en Javascript, on doit d'abord récupérer ce qui s'appel le "context".
            <br>
            Syntaxe: 
            <br>
            <strong>let canvas = document.querySelector('canvas')</strong>
            <br>
            <strong>let <span class="specification">ctx</span> = canvas.<span class="specification">getContext('2d')</span></strong>
            <br>
            <strong>let ctx</strong> | Nom de variable peut être au choix, mais ctx est fréquent
            <br>
            <strong>getContext('2d')</strong> | L'autre option est "webgl" pour faire de la vrai 3D (complexe)


        </p>

        <a class="external_link" target="_blank" href="https://developer.mozilla.org/en-US/docs/Web/API/HTMLCanvasElement/getContext">En savoir plus</a>

    </div>
    <div class="grid-item">

        <h4>Rectangle</h4>
        <p>
            Pour effacer en forme de rectangle.
            <br>
            <strong>ctx.clearRect( x, y, width, height )</strong>
            <br>
            Pour remplir un rectangle.
            <br>
            <strong>ctx.fillRect( x, y, width, height )</strong>
            <br>
            Pour dessiner les bordures d'un rectangle.
            <br>
            <strong>ctx.strokeRect( x, y, width, height )</strong>
        </p>

        <a class="external_link" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/API/Canvas_API/Tutorial/Drawing_shapes">En savoir plus</a>

    </div>
    <div class="grid-item">

        <h4>Formes personnalisées</h4>
        <p>
            Création d'une nouvelle forme / chemin
            <br>
            <strong>ctx.beginPath( )</strong>
            <br>
            Détermine le point de départ
            <br>
            <strong>ctx.moveTo( x, y )</strong>
            <br>
            Pour tracer des chemins de lignes droite
            <br>
            <strong>ctx.lineTo( x, y )</strong>
            <br>
            Pour tracer un arc de cercle
            <br>
            <strong>ctx.arc( x, y, radius, startAngle, endAngle, ccw )</strong>
            <br>
            Pour remplir la couleur de fond
            <br>
            <strong>ctx.fill( )</strong>
            <br>
            Pour dessiner un trait autour de la forme
            <br>
            <strong>ctx.stroke( )</strong>
        </p>

        <a class="external_link" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/API/Canvas_API/Tutorial/Drawing_shapes">En savoir plus</a>

    </div>
    <div class="grid-item">

        <h4>Styles</h4>
        <p>
            Pour déterminer la couleur et la bordure, on utilise
            <br>
            <strong>ctx.fillStyle = "rgba( 255, 0, 0, 1 )"</strong>
            <br>
            <strong>ctx.strokeStyle = "FF0000"</strong>
            <br>
            <strong>ctx.lineWidth = 1</strong>
            
        </p>

        <a class="external_link" target="_blank" href="https://developer.mozilla.org/fr/docs/Web/API/Canvas_API/Tutorial/Drawing_shapes">En savoir plus</a>

    </div>
</div>