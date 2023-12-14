<?php

function sinus($angle, $unite = 'radian') {
    // Conversion de l'angle en radians si nécessaire
    switch ($unite) {
        case 'degre':
            $angle = deg2rad($angle);
            break;
        case 'grade':
            $angle = $angle * M_PI / 200;
            break;
        // Aucune conversion nécessaire pour les radians
    }

    // Calcul du sinus de l'angle
    $sinus = sin($angle);

    return $sinus;
}

// Exemples d'utilisation
$angleEnRadian = 1.5;
$angleEnDegre = 90;
$angleEnGrade = 100;

$resultatEnRadian = sinus($angleEnRadian);
$resultatEnDegre = sinus($angleEnDegre, 'degre');
$resultatEnGrade = sinus($angleEnGrade, 'grade');

echo "Sinus de $angleEnRadian radian : $resultatEnRadian\n";
echo "Sinus de $angleEnDegre degré : $resultatEnDegre\n";
echo "Sinus de $angleEnGrade grade : $resultatEnGrade\n";

?>
