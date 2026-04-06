<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie 2 : Exercices 1 et 2</title>
</head>
<body>
    <h2>Formulaire Étudiant</h2>
    <form method="POST" action="">
        <label>Nom :</label> <input type="text" name="nom" required><br>
        <label>Prénom :</label> <input type="text" name="prenom" required><br>
        <label>Âge :</label> <input type="number" name="age" required><br>
        <label>Établissement :</label> <input type="text" name="etablissement" required><br>
        <label>Note 1 :</label> <input type="number" step="0.25" name="note1" required><br>
        <label>Note 2 :</label> <input type="number" step="0.25" name="note2" required><br>
        <label>Note 3 :</label> <input type="number" step="0.25" name="note3" required><br>
        <br>
        <input type="submit" name="valid" value="Calculer et Afficher">
    </form>

<?php
define("ETABLISSEMENT", "FPK");

if(isset($_POST["valid"])) {

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $note1 = $_POST['note1'];
    $note2 = $_POST['note2'];
    $note3 = $_POST['note3'];

    echo "<hr><h3>Résultats - Exercice 1</h3>";

    // Calcul
    $somme = $note1 + $note2 + $note3;
    $moyenne = $somme / 3;

    // Affichage
    echo "<strong>Étudiant :</strong> $nom $prenom <br>";
    echo "<strong>Âge :</strong> $age ans <br>";
    echo "<strong>Établissement :</strong> " . ETABLISSEMENT . "<br>";
    echo "<strong>Notes :</strong> $note1, $note2, $note3 <br>";
    echo "<strong>Somme :</strong> $somme <br>";
    echo "<strong>Moyenne :</strong> $moyenne /20 <br>";

    // Mention
    if ($moyenne >= 16) {
        $mention = "Excellent";
    } elseif ($moyenne >= 14) {
        $mention = "Bien";
    } elseif ($moyenne >= 12) {
        $mention = "Assez bien";
    } elseif ($moyenne >= 10) {
        $mention = "Passable";
    } else {
        $mention = "Échec";
    }

    echo "<strong>Mention :</strong> $mention <br>";

    // Statut
    $statut_age = ($age >= 18) ? "Majeur" : "Mineur";
    $statut_admission = ($moyenne >= 10) ? "Admis" : "Non admis";
    echo "<strong>Statut :</strong> $statut_age et $statut_admission <br>";

    echo "<hr><h3>Résultats - Exercice 2</h3>";

    // Switch
    echo "<strong>Appréciation :</strong> ";
    switch ($mention) {
        case "Excellent": echo "Félicitations<br>"; break;
        case "Bien": echo "Bon travail<br>"; break;
        case "Assez bien": echo "Efforts satisfaisants<br>"; break;
        case "Passable": echo "Peut mieux faire<br>"; break;
        case "Échec": echo "Doit redoubler d'effort<br>"; break;
    }

    // Tableau + for
    $tableau_notes = [$note1, $note2, $note3];
    echo "<strong>Les 3 notes :</strong> ";
    for ($i = 0; $i < count($tableau_notes); $i++) {
        echo $tableau_notes[$i] . " ";
    }
    echo "<br>";

    // While
    echo "<strong>Comptage jusqu'à l'âge ($age) :</strong> ";
    $compteur = 1;
    while ($compteur <= $age) {
        echo $compteur . " ";
        $compteur++;
    }
    echo "<br>";

    // Foreach
    $matieres = ["PHP", "HTML", "CSS"];
    echo "<strong>Notes par matières :</strong><br>";
    foreach ($matieres as $index => $matiere) {
        echo "- $matiere : " . $tableau_notes[$index] . "/20 <br>";
    }
}
?>

</body>
</html>