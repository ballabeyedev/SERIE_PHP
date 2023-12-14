<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin: 20px;
        }
        .TITRE{
            border: 3px solid black;
            height: 30px;
            padding: 10px;
            text-decoration: underline;
        }

        form {
            max-width: 300px;
            margin-right: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }

        tr, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        tr {
            background-color: #f2f2f2;
        }
        .btn{
            background-color: black;
            color: white;
            padding: 10px;
        }
        .btn:hover{
            background-color: white;
            color: black;
        }
        .error{
            color: red;
        }

    </style>
</head>
<body>
    <form action="" method="POST">
        <p class="TITRE">ADRESSE CLIENT</p>

        <label for="name">Nom</label>
        <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
        <?php if(isset($_POST['name']) && empty($_POST['name'])): ?>
            <p class="error">Entrer votre nom</p>
        <?php endif; ?>

        <label for="name1">Prenom</label>
        <input type="text" name="name1" id="name1" value="<?php echo isset($_POST['name1']) ? htmlspecialchars($_POST['name1']) : ''; ?>">
        <?php if(isset($_POST['name1']) && empty($_POST['name1'])): ?>
            <p class="error">Entrer votre prénom</p>
        <?php endif; ?>

        <label for="Adress">Adresse</label>
        <input type="text" name="Adress" id="Adress" value="<?php echo isset($_POST['Adress']) ? htmlspecialchars($_POST['Adress']) : ''; ?>">
        <?php if(isset($_POST['Adress']) && empty($_POST['Adress'])): ?>
            <p class="error">Entrer votre adresse</p>
        <?php endif; ?>

        <label for="ville">Ville</label>
        <input type="text" name="ville" id="ville" value="<?php echo isset($_POST['ville']) ? htmlspecialchars($_POST['ville']) : ''; ?>">
        <?php if(isset($_POST['ville']) && empty($_POST['ville'])): ?>
            <p class="error">Entrer votre ville</p>
        <?php endif; ?>

        <label for="CP">Code Postal</label>
        <input type="text" name="CP" id="CP" value="<?php echo isset($_POST['CP']) ? htmlspecialchars($_POST['CP']) : ''; ?>">
        <?php if(isset($_POST['CP']) && empty($_POST['CP'])): ?>
            <p class="error">Entrer votre code Postal</p>
        <?php endif; ?>

        <button class="btn">Valider</button>
    </form>

    <table border="1">
        <tr>
            <td>Nom</td>
            <td>Prenom</td>
            <td>Adresse</td>
            <td>Ville</td>
            <td>Code Postal</td>
        </tr>

        <?php
        if(isset($_POST['name']) && isset($_POST['name1']) && isset($_POST['Adress']) && isset($_POST['ville']) && isset($_POST['CP'])){
            $mon_nom= $_POST["name"];
            $mon_prenom= $_POST["name1"];
            $mon_adresse= $_POST["Adress"];
            $ma_Ville= $_POST["ville"];
            $mon_coteP= $_POST["CP"];

            if($mon_nom === ""){
                echo '<p class="error"> Entrer votre nom </p>';   
            }
            elseif($mon_prenom === ""){
                echo '<p class="error"> Entrer votre prenom </p>';
            }
            elseif($mon_adresse === ""){
                echo '<p class="error">Entrer votre adresse </p>';
            }
            elseif($ma_Ville === ""){
                echo '<p class="error">Entrer votre ville </p>';
            }
            elseif($mon_coteP === ""){
                echo '<p class="error">Entrer votre code Postal </p>';
            }
            else{
                echo '<tr>';
                echo '<td>' . $mon_nom . '</td>';
                echo '<td>' . $mon_prenom . '</td>';
                echo '<td>' . $mon_adresse . '</td>';
                echo '<td>' . $ma_Ville . '</td>';
                echo '<td>' . $mon_coteP . '</td>';
                echo '</tr>';
            }
        }
        ?>
    </table>
</body>
</html>
