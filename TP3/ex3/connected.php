<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Mot de passe</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    if (isset($_POST['login'])) {
        echo $_POST['login'];
    }
    if (isset($_POST['login'])) {
        echo $_POST['password'];
    }
    ?>

    <?php
    // on simule une base de données
    $users = array(
        // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi'
    );
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    if (isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin = $_POST['login'];
        $tryPwd = $_POST['password'];
        // si login existe et password correspond
        if (array_key_exists($tryLogin, $users) && $users[$tryLogin] == $tryPwd) {
            $successfullyLogged = true;
            $login = $tryLogin;
        } else
            $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";
    if (!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "<h1>Bienvenu " . $login . "</h1>";
    }
    ?>
</body>

</html>