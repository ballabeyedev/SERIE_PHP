<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            color: #3498db;
        }
    </style>
    <title>Trigonometry Calculator</title>
</head>
<body>

<div class="calculator">

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

</div>

</body>
</html>
