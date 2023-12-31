<?php
define('_MYSQL_HOST', '127.0.0.1');
define('_MYSQL_PORT', 3306);
define('_MYSQL_DBNAME', 'dbtest');
define('_MYSQL_USER', 'root');
define('_MYSQL_PASSWORD', '');

function checkAndResponse($request, $result)
{
    if (empty($result) & $_SERVER['REQUEST_METHOD'] != 'POST') {
        // Aucune donnée trouvée, renvoyer un statut 404 - Not Found
        http_response_code(404);
        echo json_encode(array('message' => "Aucun utilisateur trouvé."));
    } else if ($request) {
        // Les données ont été récupérées avec succès, renvoyer un statut 200 - OK
        http_response_code(200);
        echo json_encode($result);
    } else {
        // Erreur de la requête SQL, renvoyer un statut 500 - Internal Server Error
        http_response_code(500);
        echo json_encode(array('message' => "Erreur interne du serveur."));
    }
}
