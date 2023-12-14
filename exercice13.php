<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul TVA</title>
    <style>
        body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}




input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 15px;
    box-sizing: border-box;
}

input[type="submit"] {
    background-color: #4caf50;
    color: #fff;
    cursor: pointer;
}

input[type="text"][readonly] {
    background-color: #eee;
    cursor: not-allowed;
}

p.error-message {
    color: red;
    margin-top: -10px;
    margin-bottom: 10px;
}
    </style>
</head>
<body>

<?php
$prixHT = isset($_POST['prixHT']) ? $_POST['prixHT'] : '';
$tauxTVA = isset($_POST['tauxTVA']) ? $_POST['tauxTVA'] : '';
$montantTVA = 0;
$prixTTC = 0;

if (isset($_POST['submit'])) {
    if (!empty($prixHT) && !empty($tauxTVA) && is_numeric($prixHT) && is_numeric($tauxTVA)) {
        $montantTVA = $prixHT * ($tauxTVA / 100);
        $prixTTC = $prixHT + $montantTVA;
    } else {
        echo '<p style="color: red;">Veuillez saisir des valeurs valides.</p>';
    }
}
?>

<div class="container">
    <form action="" method="post">
        <label for="prixHT">Prix HT :</label>
        <input type="text" name="prixHT" id="prixHT" value="<?php echo $prixHT; ?>" placeholder="Entrez le prix HT" required>

        <label for="tauxTVA">Taux de TVA :</label>
        <input type="text" name="tauxTVA" id="tauxTVA" value="<?php echo $tauxTVA; ?>" placeholder="Entrez le taux de TVA en %" required>

        <input type="submit" name="submit" value="Calculer"> <br>

        Montant TVA : <input type="text" id="montantTVA" value="<?php echo number_format($montantTVA, 2); ?>" readonly>

        Prix TTC :   <input type="text" id="prixTTC" value="<?php echo number_format($prixTTC, 2); ?>" readonly>
    </form>
</div>

</body>
</html>
