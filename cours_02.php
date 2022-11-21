
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aide Mémoire</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <?php  include('./template/header/header.php'); ?>

        <main>
            <h2 id="cours2">Cours 2</h2>
            <?php  include('./template/cours/02/recuperation_balise.php'); ?>
            <?php  include('./template/cours/02/creation_balise.php'); ?>
            <?php  include('./template/cours/02/ajout_contenu.php'); ?>
            <?php  include('./template/cours/02/ajout_parent.php'); ?>
            <?php  include('./template/cours/02/supprimer_balise.php'); ?>
            <?php  include('./template/cours/02/attribut_balise.php'); ?>
        </main>
        
        <?php  include('./template/footer/footer.php'); ?>

        <script src="js/revision.js"></script>
    </body>
</html>