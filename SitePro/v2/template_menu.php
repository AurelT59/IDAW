<!doctype html>
<html>

<head>
    <title>Menu</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
</head>

<body>

    <?php
    function renderMenuToHTML($currentPageId)
    {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
            // idPage titre
            'index' => array('Accueil'),
            'cv' => array('Cv'),
            'projets' => array('Mes Projets'),
            'info_pratiques' => array('Infos Pratiques')
        );

        echo '<div class="leftSide">
        <nav class="menu">';

        foreach ($mymenu as $pageId => $pageParameters) {
            if ($pageId == $currentPageId) {
                echo '<a class="indexClick" id=currentpage href="' . $pageId . '.php">' . $pageParameters[0] . '</a>';
            } else {
                echo '<a class="indexClick" href="' . $pageId . '.php">' . $pageParameters[0] . '</a>';
            }
        }

        echo '</nav>
        </div>';
    }
    ?>

    <!-- <div class="leftSide">
        <nav class="menu">
            <a class="indexClick" href="index.php">Accueil</a>
            <a class="indexClick" href="cv.php">CV</a>
            <a class="indexClick" href="projets.php">Projets</a>
            <a class="indexClick" href="info_pratiques.php">Infos Pratiques</a>
        </nav>
    </div> -->
</body>

</html>