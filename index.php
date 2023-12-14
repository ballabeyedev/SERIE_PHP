<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'exercices</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
        
        h1, h2 {
            margin-bottom: 10px;
        }
        
        .exercises {
            max-width: 800px;
            margin: 20px auto;
        }
        
        ul {
            list-style-type: none;
            padding: 0;
        }
        
        li {
            margin-bottom: 10px;
        }
        
        a {
            text-decoration: none;
            color: #0066cc;
        }
        
        a:hover {
            text-decoration: underline;
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

    <header>
        <h1>SERIE D'EXERCICE PROGRAMMATION: PHP</h1>
        <p>Bienvenue sur la page d'exercices. Choisissez un exercice ci-dessous pour commencer.</p>
    </header>
    <br><br><br><br>
    <table border="1" class="table">
        <tr>
            <td>
                <label for="">PARTIE1</label>
                <select name="" id="" onchange="directionalapse(this.value, 'partie1')">
                    <option value="">LISTE</option>                    
                    <option value="exercice1.php">Exercice1</option>                    
                    <option value="exercices2.php">Exercice2</option>                    
                    <option value="exercice3.php">Exercice3(P1)</option>                    
                    <option value="exercices3.php">Exercice3(P2)</option>                    
                </select>
            </td>
            <td>
                <label for="">PARTIE2</label>
                <select name="" id="" onchange="directionalapse(this.value, 'partie2')">
                    <option value="">LISTE</option>                    
                    <option value="exercices4.php">Exercice4</option>                    
                    <option value="exercice5.php">Exercice5</option>                    
                    <option value="exercice6.php">Exercice6</option>                    
                    <option value="exercice7.php">Exercice7</option>                    
                </select>
            </td>
            <td>
                <label for="">PARTIE3</label>
                <select name="" id="" onchange="directionalapse(this.value, 'partie3')">
                    <option value="">LISTE</option>                    
                    <option value="exercice8.php">Exercice8</option>                    
                    <option value="exercice9.php">Exercice9</option>                    
                    <option value="exercice10.php">Exercice10</option>                    
                    <option value="exercice11.php">Exercice11</option>                    
                </select>
            </td>
            <td>
                <label for="">PARTIE4</label>
                <select name="" id="" onchange="directionalapse(this.value, 'partie4')">
                    <option value="">LISTE</option>                    
                    <option value="exercice12.php">Exercice12</option>                    
                    <option value="exercice13.php">Exercice13</option>                    
                    <option value="exercice14.php">Exercice14</option>                    
                    <option value="exercice15.php">Exercice15</option>                    
                </select>
            </td>
            <td>
                <label for="">PARTIE5</label>
                <select name="" id="" onchange="directionalapse(this.value, 'partie5')">
                    <option value="">LISTE</option>                    
                    <option value="exercice16.php">Exercice16</option>                    
                    <option value="exercice17.php">Exercice17</option>                    
                    <option value="exercice18.php">Exercice18</option>                    
                </select>
            </td>
        </tr>
    </table>

    <script>
        function directionalapse(selectedValue, partie){
            window.location.href = selectedValue;
        }
    </script>
</body>
</html>
