<!doctype html>
<html>

<head>
    <title>Menu</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <?php
    function renderMenuToHTML($currentPageId, $lang)
    {
        $mymenu = array(
            'accueil' => array('Accueil'),
            'cv' => array('Cv'),
            'projets' => array('Mes Projets'),
            'info_pratiques' => array('Infos Pratiques'),
            'coordonnees' => array('Mes coordonées')
        );

        echo '<nav class="menu">';

        foreach ($mymenu as $pageId => $pageParameters) {
            if ($pageId == $currentPageId) {
                echo '<a class="indexClick" id=currentpage href="index.php?page=' . $pageId . '&lg=' . $lang . '">' . $pageParameters[0] . '</a>';
            } else {
                echo '<a class="indexClick" href="index.php?page=' . $pageId . '&lg=' . $lang . '">' . $pageParameters[0] . '</a>';
            }
        }

        echo '</nav>';
    }
    ?>

</body>

</html>