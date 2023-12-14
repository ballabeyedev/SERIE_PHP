<?php
$nombre_initial = isset($_POST['nombre_initial']) ? $_POST['nombre_initial'] : rand(100, 999);
$nombre_de_coups = isset($_POST['nombre_de_coups']) ? $_POST['nombre_de_coups'] + 1 : 0;

$message = "Essayez de deviner le nombre (entre 100 et 999).";

if (isset($_POST['submit'])) {
    $tentative = $_POST['tentative'];

    if ($tentative < $nombre_initial) {
        $message = "Plus grand !";
    } elseif ($tentative > $nombre_initial) {
        $message = "Plus petit !";
    } else {
        $message = "Félicitations ! Vous avez trouvé le nombre en $nombre_de_coups coups.";
        $nombre_initial = rand(100, 999);
        $nombre_de_coups = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devinez le nombre avec boucle for</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #0066cc;
        }

        p {
            margin-top: 20px;
        }

        form {
            margin-top: 20px;
            text-align: center;
        }

        label {
            font-weight: bold;
            margin-right: 10px;
        }

        input {
            padding: 8px;
            margin-right: 10px;
            font-size: 16px;
        }

        button {
            padding: 10px;
            font-size: 16px;
            background-color: #0066cc;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #004080;
            transition: 0.5em;
        }
    </style>
</head>
<body>

    <h1>Devinez le nombre</h1>
    <p><?php echo $message; ?></p>

    <form method="post" action="">
        <input type="hidden" name="nombre_initial" value="<?php echo $nombre_initial; ?>">
        <input type="hidden" name="nombre_de_coups" value="<?php echo $nombre_de_coups; ?>">
        <label for="tentative">Votre tentative :</label>
        <input type="text" name="tentative" id="tentative" required>
        <button type="submit" name="submit">Soumettre</button>
    </form>

    <?php
    for ($i = 1; $i <= $nombre_de_coups; $i++) {
        echo "<p>Tentative $i : " . ($_POST["historique_tentatives_$i"] ?? "Pas disponible") . "</p>";
    }
    ?>
</body>
</html>
