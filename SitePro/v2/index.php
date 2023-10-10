<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Index</title>
</head>

<body>

    <?php
    require_once('template_header.php');
    ?>

    <div class="innerBody">

        <?php
        require_once('template_menu.php');
        ?>

        <div class="contenu">
            <h3>Bienvenue sur mon site !</h3>
            <p>Je suis Aurélien Terrades</p>
            <p>Prenez le temps de naviguer et de découvrir mon parcours !</p>
            <!-- <div class="btn btn-dark">GO</div> -->
        </div>
    </div>

    <?php
    require_once('template_footer.php');
    ?>

</body>

</html>