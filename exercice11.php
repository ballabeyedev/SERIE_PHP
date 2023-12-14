<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .En-tete{
            background-color: rgba(7, 3, 2, 0.2);
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 50px;
        }
        tr, td{
            padding: 5px;
        }
    </style>
</head>
<body>
    <H1>Exercice8</H1>
    <table border="1">
        <tr class="En-tete">
            <td>Nom</td>
            <td>Prenom</td>
            <td>Ville</td>
            <td>Age</td>
        </tr>

        <?php
            $personnes = [
                'FALL'=> ['Ablaye', 'Kaolack', '26'],
                'DIOP'=> ['Moustapha', 'Mbour', '24'],
                'LO'=> ['Talla', 'Thies', '21']    
            ];

            $keys = array_keys($personnes);
            $index = 0;

            while ($index < count($personnes)) {
                $key = $keys[$index];
                $values = $personnes[$key];

                echo '<tr>';
                echo '<td>' .$key. '</td>';

                $innerIndex = 0;

                while ($innerIndex < count($values)) {
                    $value = $values[$innerIndex];
                    echo '<td>' .$value. '</td>';
                    $innerIndex++;
                }

                echo '</tr>';
                $index++;
            }
        ?>
    </table>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .En-tete{
            background-color: red;
        }
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 50px;
        }
        tr, td{
            padding: 5px;
        }

    </style>
</head>
<body>
    <H1>Exercice9</H1>
    <table border="1px">
        <tr class="En-tete">
            <td>NOM</td>
            <td>Prenom</td>
            <td>Ville</td>
            <td>Age</td>
        </tr>

        <?php
            $personnes= [
                'BEYE'=> [
                    'Prenom' => 'Balla',
                    'Ville' => 'Dakar',
                    'Age' => '18',
                ],
                'DIOP'=> [
                    'Prenom' => 'Mama',
                    'Ville' => 'Dakar',
                    'Age' => '20'
                ],
                'NDIAYE'=> [
                    'Prenom' => 'Oumy',
                    'Ville' => 'Dakar',
                    'Age' => '24'
                ],
            ];

            $keys = array_keys($personnes);
            $index = 0;

            while ($index < count($personnes)) {
                $key = $keys[$index];
                $values = $personnes[$key];

                echo '<tr>';
                echo '<td>' .$key. '</td>';

                $innerIndex = 0;

                while ($innerIndex < count($values)) {
                    $value = $values[array_keys($values)[$innerIndex]];
                    echo '<td>' .$value. '</td>';
                    $innerIndex++;
                }

                echo '</tr>';
                $index++;
            }
        ?>
    </table>
</body>
</html>

