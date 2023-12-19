<?php
function afficherTableauXHTML($tableau) {
    if (!is_array($tableau) || empty($tableau)) {
        return "Veuillez fournir un tableau non vide.";
    }

    $resultat = "<table border='1'>";

    // En-têtes de colonne
    $resultat .= "<tr>";
    foreach (array_keys(reset($tableau)) as $titre) {
        $resultat .= "<th>{$titre}</th>";
    }
    $resultat .= "</tr>";

    // Contenu du tableau
    foreach ($tableau as $ligne) {
        $resultat .= "<tr>";
        foreach ($ligne as $valeur) {
            $resultat .= "<td>{$valeur}</td>";
        }
        $resultat .= "</tr>";
    }

    $resultat .= "</table>";
    return $resultat;
}

// Exemple d'utilisation
$tableau_multidimensionnel = [
    ['Nom' => 'Balla', 'Âge' => 25, 'Ville' => 'Dakar', 'Profesion' => 'Etudiant'],
    ['Nom' => 'Abdou', 'Âge' => 30, 'Ville' => 'Thies', 'Profesion' => 'Professeur'],
    ['Nom' => 'Laye', 'Âge' => 22, 'Ville' => 'Kaolack', 'Profesion' => 'Eleve']
);

echo afficherTableauXHTML($tableau_multidimensionnel);
?>
