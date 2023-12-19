<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
    <title>Trigonometry Calculator</title>
</head>
<body>

<?php

function calculerSinus($angle, $unite = 'radian') {
    switch ($unite) {
        case 'degre':
            $angle = deg2rad($angle);
            break;
        case 'grade':
            $angle = ($angle / 180) * M_PI;
            break;
    }

    $sinus = sin($angle);

    return $sinus;
}

// Exemples d'utilisation de la fonction
$angleEnRadian = 90;
$sinusEnRadian = calculerSinus($angleEnRadian);
echo "<p class='result'>Sinus de l'angle en radians : $sinusEnRadian</p>";

$angleEnDegre = 90; 
$sinusEnDegre = calculerSinus($angleEnDegre, 'degre');
echo "<p class='result'>Sinus de l'angle en degrés : $sinusEnDegre</p>";

$angleEnGrade = 90; // Remplacez cela par votre valeur d'angle en grades
$sinusEnGrade = calculerSinus($angleEnGrade, 'grade');
echo "<p class='result'>Sinus de l'angle en grades : $sinusEnGrade</p>";

?>

</body>
</html>
