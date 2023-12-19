<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: left;
    }

    th {
        background-color: #3498db;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>

    
</head>
<body>
<?php
function afficherTableauXHTML($tableau) {
    if (!is_array($tableau) || empty($tableau)) {
        return "Veuillez fournir un tableau non vide.";
    }

    $resultat = "<table border='1'>";

    $resultat .= "<tr>";
    foreach (array_keys(reset($tableau)) as $titre) {
        $resultat .= "<th>{$titre}</th>";
    }
    $resultat .= "</tr>";

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

$tableau_multidimensionnel = [
    ['Nom' => 'Balla', 'Âge' => 25, 'Ville' => 'Dakar', 'Profesion' => 'Etudiant'],
    ['Nom' => 'Abdou', 'Âge' => 30, 'Ville' => 'Thies', 'Profesion' => 'Professeur'],
    ['Nom' => 'Laye', 'Âge' => 22, 'Ville' => 'Kaolack', 'Profesion' => 'Eleve']

];


echo afficherTableauXHTML($tableau_multidimensionnel);
?>
    
</body>
</html>

