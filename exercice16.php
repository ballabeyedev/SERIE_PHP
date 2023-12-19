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
echo "Sinus de l'angle en radians : $sinusEnRadian\n";

$angleEnDegre = 90; 
$sinusEnDegre = calculerSinus($angleEnDegre, 'degre');
echo "Sinus de l'angle en degrés : $sinusEnDegre\n";

$angleEnGrade = 90; // Remplacez cela par votre valeur d'angle en grades
$sinusEnGrade = calculerSinus($angleEnGrade, 'grade');
echo "Sinus de l'angle en grades : $sinusEnGrade\n";

