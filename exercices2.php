<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple d'un nombre</title>
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

    .nombre {
        background-color: #fff;
        padding: 20px;
        border-radius: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
        transition: 0,8em;
    }

    p {
        margin-bottom: 16px;
        color: blue;
        text-decoration: underline; 
    }

    .result {
        margin-top: 20px;
        font-weight: bold;
    }

    .juste {
        color: green;
        border: 1px solid black;
        padding: 10px;
    }

    .faux {
        color: red;
        border: 1px solid black;
        padding: 10px;

    }
    #form{
        border: 3px solid black;
        padding: 30px;
        border-radius:50px;
    }
    </style>
</head>
<body>
    <form action="" method="POST" id="form">
        <p>VERIFICATION SI UN NOMBRE EST A  LA FOIS MULTIPLE DE DEUX AUTRE NOMBRE</p>
        <label for="number">Nombre</label>
        <input type="text" name="number" placeholder="Entrer un nombre">
        <button type="submit">Valider</button>

        <?php
            if (isset($_POST['number'])) {
            $mon_nombre =(int) $_POST["number"];

            if ($mon_nombre % 3 === 0 && $mon_nombre % 5 === 0) {
            echo '<p class="juste">' . $mon_nombre . ' est un multiple commun de 3 et 5.</p>';
        } else {
            echo '<p class="faux">' . $mon_nombre . ' n\'est pas un multiple commun de 3 et 5.</p>';
        }
    }
    ?>
    </form>


</body>
</html>
