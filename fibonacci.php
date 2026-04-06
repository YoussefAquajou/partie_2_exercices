<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 - Fibonacci</title>
</head>
<body>

    <h1>Exercice 4 : Suite de Fibonacci</h1>
    <!--
    Algorithme :
        1. Initialiser F0 = 0 et F1 = 1
        2. Afficher F0 et F1
        3. Utiliser une boucle pour calculer les termes suivants
        4. Afficher les 100 premiers termes avec leur indice
    -->
    <?php
    // Nombre de termes à afficher
    $nombreTermes = 100;

    // Initialisation des deux premiers termes
    $f0 = 0;
    $f1 = 1;

    // Affichage des termes de Fibonacci
    echo "<pre>";

    // Afficher F0
    echo "F0 = " . $f0 . "\n";

    // Si on veut afficher au moins le deuxième terme
    if ($nombreTermes > 1) {
        echo "F1 = " . $f1 . "\n";
    }

    // Calcul des termes suivants à partir de F2
    for ($i = 2; $i < $nombreTermes; $i++) {
        // Calcul du terme courant
        $fi = $f0 + $f1;

        // Afficher le terme avec son indice
        echo "F" . $i . " = " . $fi . "\n";

        // Mettre à jour les deux termes précédents
        $f0 = $f1;
        $f1 = $fi;
    }

    echo "</pre>";
    ?>

</body>
</html>