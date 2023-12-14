<!DOCTYPE html>
<html>
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

<?php
$personnes = [
    'BEYE' => [
        'Prenom' => 'Balla',
        'Ville' => 'Dakar',
        'Age' => '18',
    ],
    'DIOP' => [
        'Prenom' => 'Mama',
        'Ville' => 'Dakar',
        'Age' => '20'
    ],
    'NDIAYE' => [
        'Prenom' => 'Oumy',
        'Ville' => 'Dakar',
        'Age' => '24'
    ],
];
?>

<table border="1">
    <tr>
        <td>Nom</td>
        <td>Prenom</td>
        <td>Ville</td>
        <td>Age</td>
    </tr>

    <tr>
        <td>BEYE</td>
        <td><?php echo $personnes['BEYE']['Prenom']; ?></td>
        <td><?php echo $personnes['BEYE']['Ville']; ?></td>
        <td><?php echo $personnes['BEYE']['Age']; ?></td>
    </tr>

    <tr>
        <td>DIOP</td>
        <td><?php echo $personnes['DIOP']['Prenom']; ?></td>
        <td><?php echo $personnes['DIOP']['Ville']; ?></td>
        <td><?php echo $personnes['DIOP']['Age']; ?></td>
    </tr>

    <tr>
        <td>NDIAYE</td>
        <td><?php echo $personnes['NDIAYE']['Prenom']; ?></td>
        <td><?php echo $personnes['NDIAYE']['Ville']; ?></td>
        <td><?php echo $personnes['NDIAYE']['Age']; ?></td>
    </tr>
</table>

</body>
</html>
