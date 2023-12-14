<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre Parfait</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #form {
            border: 3px solid black;
            padding: 30px;
            border-radius: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: black;
            color: #fff;
            transition: 0.8s;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            color: green;
        }
    </style>
</head>
<body>
    <div id="form">
        <form action="" method="POST">
            <label for="number">Nombre</label>
            <input type="text" name="number" id="number" placeholder="Entrer un nombre entier positif">

            <button type="submit">Vérifier si c'est un nombre parfait</button>
        </form>

        <?php
        if (isset($_POST["number"])) {
            $number = (int)$_POST["number"];

            if ($number <= 0) {
                echo '<div class="result">Veuillez entrer un nombre entier positif.</div>';
            } else {
                $somme_diviseur = 0;

                for ($i = 1; $i <= $number / 2; $i++) {
                    if ($number % $i == 0) {
                        $somme_diviseur += $i;
                    }
                }

                if ($somme_diviseur == $number) {
                    echo '<div class="result">' . $number . ' est un nombre parfait !</div>';
                } else {
                    echo '<div class="result">' . $number . ' n\'est pas un nombre parfait.</div>';
                }
            }
        }
        ?>
    </div>
</body>
</html>
