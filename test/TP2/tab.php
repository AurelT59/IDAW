<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>Titre principal</h1>
        <?php
            $prenoms = ['Mathilde', 'Pierre', 'Amandine', 'Florian'];
            
            //On rajoute une valeur à $prenoms et on lui associe la clef 8
            $prenoms[] = 'Lisa';  
            
            $taille = count($prenoms);

            $resultat = "";
            
            print_r($prenoms);

            /*On tente d'afficher les valeurs de notre tableau en utilisant le
             *résultat de count() et en bouclant sur les indices*/
            $p = "";
            for($i = 0; $i < $taille; $i++){
                $p = $p . $prenoms[$i]. ', ';
            }
            echo $p. '<br><br>';
            
            //On utilise une boucle foreach ($tableau as $valeurs)
            foreach ($prenoms as $valeurs){
                $resultat .= $valeurs. ', ';
            }
            echo $resultat;
        ?>
        <p>Un paragraphe</p>
    </body>
    </html>