<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Configuration</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" title="default" charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <h1>Users</h1>

    <?php

    require_once('db_connect.php');

    if (isset($_POST['name']) & isset($_POST['mail'])) {
        $addRequest = $pdo->prepare("INSERT INTO `users` (`id`, `name`, `email`) VALUES ('','" . $_POST['name'] . "','" . $_POST['mail'] . "')");
        $addRequest->execute();
    }
    if (isset($_POST['id']) & isset($_POST['delete'])) {
        $deleteRequest = $pdo->prepare("DELETE FROM `users` WHERE `id` = " . $_POST['id']);
        $deleteRequest->execute();
    }
    // if (isset($_POST['name']) & isset($_POST['mail'])) {
    //     $addRequest = $pdo->prepare("INSERT INTO `users` (`id`, `name`, `email`) VALUES ('','" . $_POST['name'] . "','" . $_POST['mail'] . "')");
    //     $addRequest->execute();
    // }

    $request = $pdo->prepare("select * from users");
    // retrieve data from database using fetch(PDO::FETCH_OBJ) and
    // display them in HTML array
    $request->execute();
    $usersTab = $request->fetchAll(PDO::FETCH_OBJ);

    // print_r($usersTab);

    echo '<table>';
    echo '<thead>';
    // foreach ($usersTab as $user) {
    //     echo '<tr>' . $user[] . '</tr>';
    // }
    echo '<th>ID</th><th>Name</th><th>Email</th>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($usersTab as $user) {
        echo '<tr>';
        foreach ($user as $champ) {
            echo '<td>' . $champ . '</td>';
        }
        echo '<td> 
                <form action="users.php" method=post"> 
                    <input type="hidden" value="' . $champ . '" name="id" /> 
                    <input type="submit" value="Modifier" name ="modify" /> 
                </form>
            </td>
            <td>
                <form action="users.php" method=post"> 
                    <input type="hidden" value="' . $champ . '" name="id" /> 
                    <input type="submit" value="Supprimer" name ="delete" /> 
                </form>
            </td> </tr>';
    }
    echo '</tbody>';
    echo '</table>';

    /*** close the database connection ***/
    $pdo = null;
    ?>

    <form action="users.php" method="post">
        <table>
            <tr>
                <td>
                    <p>Nom</p>
                </td>
                <td><input type="text" name="name" /></td>
            </tr>
            <tr>
                <td>
                    <p>Mail</p>
                </td>
                <td><input type="text" name="mail" /></td>
            </tr>
            <tr>
                <td><input type="submit" value="Ajouter" name="add" /></td>
            </tr>
        </table>
    </form>

</body>

</html>