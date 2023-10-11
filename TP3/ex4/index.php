<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Mot de passe</title>
    <?php
    if (isset($_GET['css'])) {
        echo '<link rel="stylesheet" href="css/' . $_GET['css'] . '.css" type="text/css" media="screen" title="default" charset="utf-8" />';
    } else if (isset($_COOKIE['cookieName'])) {
        echo '<link rel="stylesheet" href="css/' . $_COOKIE['cookieName'] . '.css" type="text/css" media="screen" title="default" charset="utf-8" />';
    } else {
        echo '<link rel="stylesheet" href="css/style1.css" type="text/css" media="screen" title="default" charset="utf-8" />';
    }
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    echo 'Session de ' . $_SESSION['newsession'];
    ?>

    <form id="style_form" action="index.php" method="GET">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>

    <?php
    setcookie('cookieName', 'style1');
    if (isset($_GET['css'])) {
        setcookie('cookieName', $_GET['css']);
    }
    ?>

    <a href="connected.php">Page de connexion</a>
    <a href="disconnected.php">Se déconnecter</a>

</body>

</html>