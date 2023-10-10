<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Projets</title>
</head>

<body>

    <?php
    require_once('template_header.php');
    ?>

    <div class="innerBody">
        <?php
        require_once('template_menu.php');
        renderMenuToHTML('projets');
        ?>

        <div class="contenu">
            <h3> Developpement d'un site web professionnel </h3>
            <p> Ce site même a été réalisé par mes soins dans le cadre de l'UV IDAW durant ma formation à l'IMT Nord
                Europe. </p>
            <h3> "Streinger Town" </h3>
            <p> En UV Projet Ouvert, j'ai donné des cours de programmation en langage C à des collégiens du collège
                André Streinger de Douai, dans le but de réaliser avec les élèves une voiture autonome. </p>
        </div>
    </div>

    <?php
    require_once('template_footer.php');
    ?>
</body>