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

        <div class="leftSide">
            <?php
            require_once('template_menu.php');

            $currentPageId = 'accueil';
            if (isset($_GET['page'])) {
                $currentPageId = $_GET['page'];
            }

            $lang = "fr";
            if (isset($_GET['lg'])) {
                $lang = $_GET['lg'];
            }

            renderMenuToHTML($currentPageId, $lang);

            $refFr = 'index.php?page=' . $currentPageId . '&lg=fr';
            $refEn = 'index.php?page=' . $currentPageId . '&lg=en';
            ?>

            <div class="langue">
                <a class="langueClick" href=<?php echo $refFr ?>>FR</a>
                <a class="langueClick" href=<?php echo $refEn ?>>EN</a>
            </div>
        </div>

        <?php
        $pageToInclude = $lang . "/" . $currentPageId . ".php";
        if (is_readable($pageToInclude))
            require_once($pageToInclude);
        else
            require_once("error.php");
        ?>

    </div>

    <?php
    require_once('template_footer.php');
    ?>

</body>

</html>