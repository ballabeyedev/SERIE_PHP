<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul PPCM</title>
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
            <label for="num1">Entier 1</label>
            <input type="text" name="num1" id="num1" placeholder="Entrer le premier entier">

            <label for="num2">Entier 2</label>
            <input type="text" name="num2" id="num2" placeholder="Entrer le deuxième entier">

            <button type="submit">Calculer PPCM</button>
        </form>

        <?php
        if (isset($_POST["num1"]) && isset($_POST["num2"])) {           
            $num1 = (int)$_POST["num1"];
            $num2 = (int)$_POST["num2"];
            $var1=$num1;
            $var2=$num2;

            while ($var1 != $var2) {
                if($var1<$var2){
                    $var1+=$num1 ;
                }
                else{
                    $var2+=$num2 ;
                }
            }
            $PPCM= $var1;

            echo '<div class="result">Le PPCM de ' . $num1 . ' et ' . $num2 . ' est : ' . $PPCM . '</div>';
        }
        ?>
    </div> 
</body>
</html>
 