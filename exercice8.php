<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
            margin-left: 150px;
        }

        tr, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }

        tr {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Ville</td>
            <td>Age</td>
        </tr>
        <?php
    $personnes = [
        'FALL' => ['Ablaye', 'Kaolack', '26'],
        'DIOP' => ['Moustapha', 'Mbour', '24'],
        'LO' => ['Talla', 'Thies', '21']
    ];
    echo '<tr>';
    echo '<td> FALL </td>';
    echo '<td>' . $personnes['FALL'][0] . '</td>'; 
    echo '<td>' . $personnes['FALL'][1] . '</td>'; 
    echo '<td>' . $personnes['FALL'][2] . '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td> DIOP </td>';
    echo '<td>' . $personnes['DIOP'][0] . '</td>'; 
    echo '<td>' . $personnes['DIOP'][1] . '</td>'; 
    echo '<td>' . $personnes['DIOP'][2] . '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td> LO</td>';
    echo '<td>' . $personnes['LO'][0] . '</td>'; 
    echo '<td>' . $personnes['LO'][1] . '</td>'; 
    echo '<td>' . $personnes['LO'][2] . '</td>';
    echo '</tr>';
?>
    </table>
</body>
</html>

