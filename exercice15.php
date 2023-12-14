<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformation de Tableau</title>
</head>
<body>

<?php

function transformerTableau(&$tableau) {
    $avantTransformation = $tableau;

    foreach ($tableau as &$chaine) {
        $chaine = ucfirst(strtolower($chaine));
    }

    $apresTransformation = $tableau;

    return array('avant' => $avantTransformation, 'apres' => $apresTransformation);
}

$chaines =["Bonjour", "eCOle", "au revoir", "eTUdianT","proGRAMMAtion"];

$resultat = transformerTableau($chaines);

$avantTransformation = $resultat['avant'];
$apresTransformation = $resultat['apres'];

?>

<h2>Tableau avant et après la transformation</h2>
<table border="1">
    <tr>
        <td>Avant la transformation</td>
        <td>Après la transformation</td>
    </tr>
    <?php foreach ($avantTransformation as $index => $elementAvant) { ?>
        <tr>
            <td><?= $elementAvant ?></td>
            <td><?= $apresTransformation[$index] ?></td>
        </tr>
    <?php } ?>
</table>

</body>
</html>
