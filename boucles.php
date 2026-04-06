<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3 - Boucles</title>
    
</head>
<body>

    <h1>Exercice 3 : Boucles</h1>

    <!-- Formulaire pour saisir n -->
    <form method="post">
        <label for="n">Entrer un nombre entier n :</label><br>
        <input type="number" name="n" id="n" required>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    // Vérifier si le formulaire a été soumis
    if (isset($_POST['n'])) {

        // Récupérer la valeur saisie et la convertir en entier
        $n = intval($_POST['n']);

        // Vérifier que n est strictement positif
        if ($n > 0) {

            echo '<div class="bloc">';

            // 1) Table de multiplication de n de 1 à 10
            echo "<h2>1) Table de multiplication de $n</h2>";
            echo "<pre>";
            for ($i = 1; $i <= 10; $i++) {
                echo $n . " x " . $i . " = " . ($n * $i) . "\n";
            }
            echo "</pre>";

            // 2) Triangle d'étoiles centré de hauteur n
            echo "<h2>2) Triangle d'étoiles centré de hauteur $n</h2>";
            echo "<pre>";
            for ($ligne = 1; $ligne <= $n; $ligne++) {
                // Afficher les espaces au début
                for ($espace = 1; $espace <= $n - $ligne; $espace++) {
                    echo " ";
                }

                // Afficher les étoiles
                for ($etoile = 1; $etoile <= (2 * $ligne - 1); $etoile++) {
                    echo "*";
                }

                echo "\n";
            }
            echo "</pre>";

            // 3) Carré d'étoiles de taille n x n
            echo "<h2>3) Carré d'étoiles de taille $n x $n</h2>";
            echo "<pre>";
            for ($i = 1; $i <= $n; $i++) {
                for ($j = 1; $j <= $n; $j++) {
                    echo "*";
                }
                echo "\n";
            }
            echo "</pre>";

            // 4) Afficher les nombres pairs entre 1 et n
            echo "<h2>4) Nombres pairs entre 1 et $n</h2>";
            echo "<pre>";
            for ($i = 1; $i <= $n; $i++) {
                if ($i % 2 == 0) {
                    echo $i . " ";
                }
            }
            echo "</pre>";

            // 5) Calculer la somme des entiers de 1 jusqu'à n
            echo "<h2>5) Somme des entiers de 1 à $n</h2>";
            $somme = 0;
            for ($i = 1; $i <= $n; $i++) {
                $somme += $i;
            }
            echo "<p>La somme de 1 à $n est : <strong>$somme</strong></p>";

            // 6) Vérifier si n est pair ou impair
            echo "<h2>6) Vérification pair / impair</h2>";
            if ($n % 2 == 0) {
                echo "<p>Le nombre $n est <strong>pair</strong>.</p>";
            } else {
                echo "<p>Le nombre $n est <strong>impair</strong>.</p>";
            }

            echo '</div>';

        } else {
            echo "<p style='color:red;'>Veuillez entrer un entier strictement positif.</p>";
        }
    }
    ?>

</body>
</html>